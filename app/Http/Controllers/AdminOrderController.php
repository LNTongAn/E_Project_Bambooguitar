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

class AdminOrderController extends Controller
{
    public function viewOrder()
    {
        $ds = Order::all();
        return view("admin.order.order_index")->with(['orders' => $ds]);
    }

    //UPDATE ORDER

    public function updateOrder($id)
    {
        //LẤY THÔNG TIN CHO VIỆC UPDATE
        $o = DB::table('order')
            ->where('id', intval($id))
            ->first();
            //THÔNG TIN CỦA SẢN PHẨM ORDER
        $oi = DB::table('order_item')
            ->where('order_id', intval($id))
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();
            //LẤY THÔNG TIN "NHÂN VIÊN" ĐỂ TẠO THẺ OPTION CHO STAFF_ID
        $s = DB::table('staff')
            ->where('role', intval('1'))
            ->get();
        return view('admin.order.order_update')->with(['o' => $o, 'order_item' => $oi, 'staff' => $s]);
    }

    public function PostUpdateOrder(Request $request, $id)
    {
        $status = $request->input('status');
        $shipping_name = $request->input('shipping_name');
        $shipping_mobile = $request->input('shipping_mobile');
        $staff_id = $request->input('staff_id');
        $delivered_date = $request->input('delivered_date');
        $shipping_fee = $request->input('shipping_fee');
        $shipping_email = $request->input('shipping_email');

        //LẤY THÔNG TIN SẢN PHẨM ORDER
        $orderMail = DB::table('order_item')
            ->where('order_id', intval($id))
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();

        //UPDATE BẢNG ORDER
        //STATUS BẰNG NULL VÌ GIÁ TRỊ 'CONFIRM' ĐÃ disabled KHI CHUYỂN QUA 'CONFIRM'
        // NÊN $STATUS KHÔNG LẤY ĐƯỢC GIÁ TRỊ => NULL
        if ($status == null) {
            $oU = DB::table('order')
                ->where('id', intval($id))
                ->update(['shipping_name' => $shipping_name, 'shipping_mobile' => $shipping_mobile, 'staff_id' => $staff_id, 'delivered_date' =>
                $delivered_date, 'shipping_fee' => $shipping_fee]);
        } else {
            $oU = DB::table('order')
                ->where('id', intval($id))
                ->update(['status' => $status, 'shipping_name' => $shipping_name, 'shipping_mobile' => $shipping_mobile, 'staff_id' => $staff_id, 'delivered_date' =>
                $delivered_date, 'shipping_fee' => $shipping_fee]);
        }

        //LẤY THÔNG TIN ORDER
        $o = DB::table('order')
            ->where('id', intval($id))
            ->first();
        session(['order' => $o]);

        //NẾU ĐƠN HÀNG Ở TRẠNG THÁI "XÁC NHẬN" THÌ PHẢI GỞI MAIL
        if ($status == 'confirm' || $status == null) {
            Mail::to('' . $shipping_email)->send(new SendMailOrder($orderMail));
        }

        session()->forget('order');

        return redirect('admin/order/order_index');
    }


    //DELETE ORDER

    public function deleteOrder($id)
    {
        $o = DB::table('order')
            ->where('id', intval($id))
            ->first();
        $oi = DB::table('order_item')
            ->where('order_id', intval($id))
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();
        return view('admin.order.order_delete')->with(['o' => $o, 'order_item' => $oi]);
    }

    public function PostDeleteOrder(Request $request, $id)
    {
        $reason = $request->input('reason');
        $shipping_email = $request->input('shipping_email');

        // LẤY LÝ DO HUỶ ĐƠN HÀNG ĐỂ GỬI MAIL
        session(['reason' => $reason]);

        //LẤY THÔNG TIN SẢN PHẨM ORDER
        $deleteOrderMail = DB::table('order_item')
            ->where('order_id', intval($id))
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();

            //GỞI MAIL ĐƠN HÀNG BẠN ĐÃ BỊ HUỶ
        Mail::to('' . $shipping_email)->send(new SendMailOrderCancellation($deleteOrderMail));
        session()->forget('reason');

        //XOÁ THÔNG TIN BẢNG ORDER_ITEM TRƯỚC RỒI MỚI TỚI ORDER NẾU KHÔNG SẼ BỊ LỖI
        //DO KHOÁ CHÍNH VÀ KHOÁ NGOẠI
        $od = DB::table('order_item')
            ->where('order_id', intval($id))
            ->delete();
        $od2 = DB::table('order')
            ->where('id', intval($id))
            ->delete();

        return redirect('admin/order/order_index');
    }
}
