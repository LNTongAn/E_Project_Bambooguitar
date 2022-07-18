<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailContact;
use App\Models\Product;
use App\Models\Member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function products($category_id)
    {

        //lấy db theo thể loại
        $ds = DB::table('product')
            ->where('category_id', intval($category_id))
            ->paginate(15);

        //lấy title
        // $title = DB::table('product')
        // ->join('category', 'product.category_id', '=', 'category.id')
        // ->where('category_id', intval($category_id))
        // ->select('category.name')
        // ->take(1)->get();

        // LẤY THÔNG TIN TIÊU ĐỀ CHO THỂ LOẠI
        $title = DB::table('category')
            ->where('id', intval($category_id))
            ->first();

        return view('home.product')->with(['products' => $ds, 'tle' => $title]);
    }


    public function product_home()
    {
        //LẤY 4 SẢN PHẨM CHO TRANG HOME
        $ds = Product::take(4)->get();

        //LẤY 4 SẢN PHẨM TIẾP THEO
        $ds2 = DB::table('product')
        ->where('category_id', intval(2))
        ->take(4)->get();

        //LẤY 4 SP TIẾP
        $ds3 = DB::table('product')
        ->where('category_id', intval(3))
        ->take(4)->get();

        //LẤY 3 BÀI BÁO
        $ds4 = DB::table('blogs')->take(3)->get();
        //LẤY 1 BÀI BÁO CHÍNH
        $b1 = DB::table('blogs')
        ->where('id', intval(7))
        ->first();

        return view('home.home')->with(['products' => $ds, 'product2' => $ds2, 'product3'=>$ds3, 'blog'=>$ds4, 'blog1'=>$b1]);
    }

    public function signUp()
    {
        return view('home.signUp');
    }

    public function postSignUp(Request $request)
    {
        $email = $request->input('email');

        $checkM = DB::table('members')
            ->where('email', $email)
            ->first();

        //KIỂM TRA THÔNG TIN XEM CÓ TRÙNG MAIL KHÔNG
        if ($checkM) {
            return redirect('home/signUp')->with('loi', 'Username available !');
        }

        $password = $request->input('password');
        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('home/signUp')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("member/img", $imageName);
        } else {
            $imageName = null;
        }
        $fullname = $request->input('fullname');
        $tel = $request->input('tel');
        $address = $request->input('address');
        $active = $request->input('active');


        DB::table('members')->insert([
            'id'    => null,
            'email' => $email,
            'password' => $password,
            'picture' => $imageName,
            'fullname' => $fullname,
            'tel' => $tel,
            'address' => $address,
            'active' => $active
        ]);
        return redirect()->action([HomeController::class, 'product_home']);
    }




    public function login_member(Request $request)
    {

        //KIỂM TRA XEM ĐÃ ĐĂNG NHẬP CHƯA NẾU RỒI THÌ VỀ TRANG HOME
        if (session()->has('member')) {
            $user = $request->session()->get('member');

            return redirect('/');
        }
        //NẾU CHƯA THÌ CHO PHÉP VÀO TRANG LOGIN CHO MEMBER
        return view('home.loginMember');
    }

    public function logoutMember(Request $request)
    {
        // $request->session()->invalidate();
        $request->session()->forget('member');
        return redirect('/');
    }


    public function checkLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = DB::table('members')->where('email', $email)->first();
        if ($user != null && $user->password == $password) {
            // $request->session()->push('user', $user);
            session(['member' => $user]);

            //CHẶN TÀI KHOẢN BỊ KHOÁ
            if(session('member')->active == 2){
                $request->session()->forget('member');
                return redirect('home/loginMember')->with('message', 'Sorry, your account is currently locked!');
            }

            //TRANG HOME
            return redirect("/");
        } else {
            return redirect('home/loginMember')->with('message', 'Login Fail.');
        }
    }


    //MEMBER PROFILE
    public function members($id)
    {

        //LẤY THÔNG TIN MEMBER THEO ID KHI ĐÃ ĐN
        $user = DB::table('members')
            ->where('id', $id)->first();

        return view('home.memberProfile')->with(['user' => $user]);
    }

    //ĐỔI MK CHO MEMBER
    public function memberChangePass($id)
    {
        $user = DB::table('members')
            ->where('id', $id)->first();

        return view('home.changePass')->with(['user' => $user]);
    }

    public function PostMemberChangePass(Request $request, $id)
    {

        //LẤY THÔNG TIN MEMBER ĐỂ SO SÁNH
        $user = DB::table('members')
            ->where('id', $id)->first();

        $old_pass = $request->input('old_pass');
        //PASS CŨ KHÔNG GIỐNG THÌ FLASH VỀ TRANG ... VÀ TRẢ THONG BÁO FAIL
        if ($old_pass != $user->password) {
            return redirect('home/changePass/' . $id)->with('passF', 'Change password Fail. Because old_pass not true!');
        }

        $new_pass = $request->input('new_pass');
        $confirm_pass = $request->input('confirm_pass');


        if ($confirm_pass != $new_pass) {
            return redirect('home/changePass/' . $id)->with('passF', 'Change password Fail. Because confirm_pass no coincidences new_pass!');
        }
        // NẾU MẬT KHẨU MỚI HOẶC NHẬP LẠI MẬT KHẨU == NULL THÌ CHO FLASH VỀ TRANG ... TRẢ THÔNG BÁO F
        if ($confirm_pass == null || $new_pass == null) {
            return redirect('home/changePass/' . $id)->with('passF', 'Change password Fail. Because confirm_pass = null OR new_pass = null');
        }

        $p = DB::table('members')
            ->where('id', intval($id))
            ->update([
                'password' => $new_pass
            ]);

        return redirect('home/changePass/' . $id)->with('passT', 'Change password success!');
    }

    //MEMBER HISTORY ORDER
    public function memberOrderHistory($id)
    {
        //LẤY THÔNG TIN LỊCH SỬ ĐÃ ORDER CHO MEMBER ĐÃ ĐN
        $o = DB::table('order')
            ->where('member_id', intval($id))
            // đảo ngược mảng
            ->orderByRaw('id DESC')
            ->get();

        //LẤY THÔNG TIN SẢN PHẨM ĐÃ ĐƯỢC ORDER
        //KHÔNG PHẢI THEO ID VÌ TA SẼ @IF BÊN TRANG KIA
        $oi = DB::table('order_item')
            ->join('product', 'order_item.product_id', '=', 'product.id')
            ->get();

        return view('home.orderHistory')->with(['o' => $o, 'oi' => $oi]);
    }

    //XOÁ ĐƠN HÀNG
    public function memberDeleteOrder($id)
    {
        $od = DB::table('order_item')
            ->where('order_id', intval($id))
            ->delete();
        $od2 = DB::table('order')
            ->where('id', intval($id))
            ->delete();

        return redirect('home/orderHistory/' . session('member')->id)->with('alert', 'You have successfully canceled your order!');
    }

    //FEEDBACK HISTORY MEMBER
    public function memberFeedbackHistory($id){

        $f = DB::table('feedback')
        ->where('member_id', intval($id))
        ->orderByRaw('id DESC')
        ->get();

        $pf = Product::all();

        return view('home.feedback')->with(['feedback'=>$f, 'productfb'=>$pf]);
    }

    //CONTACT US
    public function contactIndex(){

        return view('home.contact');
    }


    //ABOUT US
    public function About(){

        return view('home.about');
    }

    public function SendMailContact(Request $request){

        $contact_mail = array(
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message')
        );

        //Send mail
        Mail::to('ducndts2108004@fpt.edu.vn')->send(new SendMailContact($contact_mail));

        return redirect('home/contact');
    }


}
