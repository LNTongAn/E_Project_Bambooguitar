<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMailOrder;
use App\Mail\SendMailOrderCancellation;

class AdminCustomerController extends Controller
{
    public function customerIndex(){

        //LẤY THÔNG TIN ALL KHÁCH HÀNG
        $c = DB::table('members')->get();

        return view('admin.customer.customer_index')->with(['customer'=>$c]);
    }

    public function customerUpdate($id)
    {
        //LẤY THÔNG TIN KHÁCH HÀNG THEO ID
        $c = DB::table('members')
            ->where('id', $id)
            ->first();

        return view('admin.customer.customer_update')->with(['c'=>$c]);
    }

    public function PostCustomerUpdate(Request $request, $id){
        //LẤY DỮ LIỆU EMAIL
        $email = $request->input('email');
         // xử lý upload hình vào thư mục
         if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/customer/customer_update/' .$id)->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            //KHÔNG DẪN public/member/img ĐƯỢC NHA
            $file->move("member/img", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $c = DB::table('members')
                ->where('id', intval($id))
                ->first();
            $imageName = $c->picture;
        }
        //TIẾP TỤC LẤY DỮ LIỆU
        $fullname = $request->input('fullname');
        $tel = $request->input('tel');
        $address = $request->input('address');

        //THỰC HIỆN UPDATE
        $cU = DB::table('members')
            ->where('id', intval($id))
            ->update([
                'email' => $email,
                'picture' => $imageName,
                'fullname' => $fullname,
                'tel' => $tel,
                'address' => $address
            ]);

            return redirect('admin/customer/customer_index');
    }

    public function deleteCustomer($id)
    {
        $c = DB::table('members')
            ->where('id', intval($id))
            ->delete();
        return redirect('admin/customer/customer_index');
    }

    public function lockCustomer($id)
    {
        //LẤY ACTIVE CỦA KHÁCH HÀNG ĐỂ DÙNG CHO 2 BẢNG DƯỚI
        $customer = DB::table('members')
            ->where('id', intval($id))
            ->first();

            //KHOÁ ACCOUNT
        if ($customer->active == 1) {
            $c = DB::table('members')
                ->where('id', intval($id))
                ->update([
                    'active' => 2
                ]);
            return redirect('admin/customer/customer_index');
        }

        //MỞ KHOÁ ACCOUNT
        if ($customer->active == 2) {
            $c = DB::table('members')
                ->where('id', intval($id))
                ->update([
                    'active' => 1
                ]);
            return redirect('admin/customer/customer_index');
        }
    }


}
