<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class AdminController extends Controller
{


    public function login_admin(Request $request)
    {

        //KIỂM TRA ĐIỀU KIỆN BỊ THỪA NHƯNG LƯỜI SỬA
        //NẾU ĐĂNG NHẬP RỒI THÌ KHI VÀO TRANG LOGIN CHO AMIN
        //SẼ BỊ ĐẨY VÀO TRANG DASHBOARD
        if (session()->has('user')) {
            $user = $request->session()->get('user');

            // $r = $user->role == 2 ? "admin" : "staff";
            // $name = $user->username;

            // if ($r == "admin") {
            //     return redirect('admin/dashboard');
            // } else {
            //     return redirect('admin/dashboard');
            // }
            return redirect('admin/dashboard');
        }
        // NẾU CHƯA ĐĂNG NHẬP THÌ TRẢ VỀ TRANG LOGIN CHO ADMIN
        return view('loginAdmin');
    }

    public function logoutAdmin(Request $request)
    {
        //$request->session()->invalidate();
        $request->session()->forget('user');
        return redirect('loginAdmin');
    }

    public function checkLoginAdmin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user = DB::table('staff')->where('username', $username)->first();
        //NẾU USER KHÔNG NULL VÀ PASSWORD GIỐNG THÌ LƯU LẠI GIÁ TRỊ VÀO SS
        if ($user != null && $user->password == $password) {
            // $request->session()->push('user', $user);
            session(['user' => $user]);

            //CHẶN KHI TÀI KHOẢN BỊ KHOÁ
            if(session('user')->active == 2){
                $request->session()->forget('user');
                return redirect('loginAdmin')->with('message', 'Sorry, your account is currently locked!');
            }

            return redirect("admin/dashboard");
        } else {
            return redirect('loginAdmin')->with('message', 'Login Fail.');
        }
    }

    //DASHBOARD
    public function dashboardIndex()
    {
        // LẤY DỮ LIỆU CHO 2 BẢNG PRODUCR AND ORDER
        $ds = Product::all();
        $ds2 = Order::all();

        return view('admin.dashboard')->with(['products' => $ds, 'orders' => $ds2]);
    }

    public function changePass($username){

        return view('admin.changePassword');
    }

    public function PostChangePass(Request $request, $username){

        $p = DB::table('staff')
        ->where('username', $username)
        ->first();

        $password = $request->input('password');
        if($p->password != $password){
            return redirect('admin/changePass/'.$username)->with('message', 'Incorrect password!');
        }

        $NewPassword = $request->input('NewPassword');
        $ConfirmPassword = $request->input('ConfirmPassword');
        if($NewPassword != $ConfirmPassword){
            return redirect('admin/changePass/'.$username)->with('message', 'Confirm password does not match new password!');
        }

        $c = DB::table('staff')
        ->where('username', $username)
        ->update([
            'password' => $NewPassword
        ]);

        return redirect('admin/dashboard');
    }




    //PRODUCT INDEX
    public function index()
    {
        $ds = Product::all();
        return view('admin.product.index')->with(['products' => $ds]);
    }
    //CREATE PRODUCT
    public function create()
    {
        return view("admin.product.create");
    }

    public function postCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $product = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/product/create')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        } else {
            $imageName = null;
        }
        DB::table('product')->insert([
            'id' => null,
            'name' => $product['name'],
            'price' => $product['price'],
            'description' => $product['description'],
            'category_id' => intval($product['category_id']),
            'image' => $imageName,
            'inventory_qty' => $product['inventory_qty']
        ]);
        return redirect()->action([AdminController::class, 'index']);
    }
    //UPDATE PRODUCT
    public function update($id)
    {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->first();
        return view('admin.product.update', ['p' => $p]);
    }

    public function postUpdate(Request $request, $id)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $category_id = $request->input('category_id');
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/product/update')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/admin/images", $imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $p = DB::table('product')
                ->where('id', intval($id))
                ->first();
            $imageName = $p->image;
        }
        $inventory_qty = $request->input('inventory_qty');
        $p = DB::table('product')
            ->where('id', intval($id))
            ->update(['name' => $name, 'price' => intval($price), 'description' => $description, 'category_id' => $category_id, 'image' =>
            $imageName, 'inventory_qty' => $inventory_qty]);
        return redirect()->action([AdminController::class, 'index']);
    }
    //DELETE PRODUCT
    public function delete($id)
    {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action([AdminController::class, 'index']);
    }
}
