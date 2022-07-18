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

class AdminStaffController extends Controller
{
    public function staffIndex()
    {
        //LẤY THÔNG TIN NHÂN VIÊN TRỪ TT CỦA QUẢN TRỊ
        $s = DB::table('staff')
            ->where('role', intval(1))
            ->get();
        return view('admin.staff.staff_index')->with(['staff' => $s]);
    }

    public function staffCreate()
    {
        //VÀO TRANG ĐỂ THÊM NHÂN VIÊN
        return view('admin.staff.staff_create');
    }

    public function PostStaffCreate(Request $request)
    {
        //QUY TRÌNH TẠO THÊM ACCOUNT NHÂN VIÊN
        $username = $request->input('username');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        if ($password != $confirm_password) {
            return redirect('admin/staff/staff_create')->with('message', 'Password does not match confirm password !');;
        }
        $role = $request->input('role');
        $active = $request->input('active');

        $s = DB::table('staff')
            ->insert([
                'username' => $username,
                'password' => $password,
                'role' => $role,
                'active' => $active
            ]);

        return redirect('admin/staff/staff_index');
    }

    public function staffUpdate($username)
    {
        $s = DB::table('staff')
            ->where('username', $username)
            ->first();
        return view('admin.staff.staff_update')->with(['staff' => $s]);
    }

    public function PostStaffUpdate(Request $request, $username)
    {
        $name = $request->input('username');
        $role = $request->input('role');

        if ($role == 1) {
            $s = DB::table('staff')
                ->where('username', $username)
                ->update([
                    'username' => $name,
                    'role' => $role
                ]);
        }
        if ($role == null) {
            $s = DB::table('staff')
                ->where('username', $username)
                ->update([
                    'username' => $name
                ]);
        }
        return redirect('admin/staff/staff_index');
    }

    public function deleteStaff($username)
    {
        $s = DB::table('staff')
            ->where('username', $username)
            ->delete();
        return redirect('admin/staff/staff_index');
    }

    public function lockStaff($username)
    {
        //LẤY ACTIVE CỦA NHÂN VIÊN ĐỂ DÙNG CHO 2 BẢNG DƯỚI
        $staff = DB::table('staff')
            ->where('username', $username)
            ->first();

            //KHOÁ ACCOUNT
        if ($staff->active == 1) {
            $s = DB::table('staff')
                ->where('username', $username)
                ->update([
                    'active' => 2
                ]);
            return redirect('admin/staff/staff_index');
        }

        //MỞ KHOÁ ACCOUNT
        if ($staff->active == 2) {
            $s = DB::table('staff')
                ->where('username', $username)
                ->update([
                    'active' => 1
                ]);
            return redirect('admin/staff/staff_index');
        }
    }
}
