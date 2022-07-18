<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminStaffController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\AdminBlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home controller
Route::get('/', function () {
    return view('home.home');
});


//signup
Route::get('home/signUp', [HomeController::class, 'signUp']);
Route::post('home/postSignUp', [HomeController::class, 'postSignUp']);



//Product
Route::get('home/product/{category_id}', [HomeController::class, 'products']);
Route::get('/', [HomeController::class, 'product_home']);

Route::get('home/product/findPrice/{category_id}', [ProductController::class, 'findPrice']);
Route::get('home/productDetail/{id}', [ProductController::class, 'productDetail']);


//cart
Route::get('home/cart', [ProductController::class, 'cart']);
Route::get('home/add-to-cart/{id}', [ProductController::class, 'addToCart']);
Route::patch('home/update-cart', [ProductController::class, 'update']);
Route::delete('home/remove-from-cart', [ProductController::class, 'remove']);


//checkout
// Route::get('home/checkOut/{id}', [ProductController::class, 'checkOut']);
Route::post('home/storeOrder', [ProductController::class, 'storeOrder']);

//login member
Route::get('home/loginMember', [HomeController::class, 'login_member']);
Route::post('home/checkLogin', [HomeController::class, 'checkLogin']);
Route::get('logoutMember', [HomeController::class, 'logoutMember']);


//member
Route::prefix('home')->name('home')->middleware('CheckLogin:member')->group(function () {

    Route::get('memberProfile/{id}', [HomeController::class, 'members']);

    Route::get('changePass/{id}', [HomeController::class, 'memberChangePass']);
    Route::get('PostMemberChangePass/{id}', [HomeController::class, 'PostMemberChangePass']);

    Route::get('orderHistory/{id}', [HomeController::class, 'memberOrderHistory']);
    Route::get('deleteOrder/{id}', [HomeController::class, 'memberDeleteOrder']);

    //FEEDBACK
    Route::get('productDetail/PostFeedbackMember/{id}', [ProductController::class, 'PostFeedbackMember']);

    //MEMBER HISTORY FEEDBACK
    Route::get('memberFeedbackHistory/{id}', [HomeController::class, 'memberFeedbackHistory']);

});



//login Admin
Route::get('loginAdmin', [AdminController::class, 'login_admin']);
Route::post('checkLoginAdmin', [AdminController::class, 'checkLoginAdmin']);
Route::get('logoutAdmin', [AdminController::class, 'logoutAdmin']);

//Admin controller
Route::prefix('admin')->name('admin')->middleware('CheckLoginAdmin:admin')->group(function () {

    //DASHBOARD
    Route::get('dashboard', [AdminController::class, 'dashboardIndex']);
    Route::get('changePass/{username}', [AdminController::class, 'changePass']);
    Route::post('PostChangePass/{username}', [AdminController::class, 'PostChangePass']);

    //PRODUCT CONTROLLER
    Route::get('product/index', [AdminController::class, 'index']);

    Route::get('product/create', [AdminController::class, 'create']);
    Route::post('product/postCreate', [AdminController::class, 'postCreate']);

    Route::get('product/update/{id}', [AdminController::class, 'update']);
    Route::post('product/postUpdate/{id}', [AdminController::class, 'postUpdate']);

    Route::get('product/delete/{id}', [AdminController::class, 'delete']);

    //ORDER CONTROLLER
    Route::get('order/order_index', [AdminOrderController::class, 'viewOrder']);

    Route::get('order/order_update/{id}', [AdminOrderController::class, 'updateOrder']);
    Route::post('order/PostUpdateOrder/{id}', [AdminOrderController::class, 'PostUpdateOrder']);

    Route::get('order/order_delete/{id}', [AdminOrderController::class, 'deleteOrder']);
    Route::get('order/PostDeleteOrder/{id}', [AdminOrderController::class, 'PostDeleteOrder']);

    //STAFF
    Route::get('staff/staff_index', [AdminStaffController::class, 'staffIndex']);

    Route::get('staff/staff_create', [AdminStaffController::class, 'staffCreate']);
    Route::post('staff/PostStaffCreate', [AdminStaffController::class, 'PostStaffCreate']);

    Route::get('staff/staff_update/{username}', [AdminStaffController::class, 'staffUpdate']);
    Route::post('staff/PostStaffUpdate/{username}', [AdminStaffController::class, 'PostStaffUpdate']);

    Route::get('staff/deleteStaff/{username}', [AdminStaffController::class, 'deleteStaff']);

    Route::get('staff/lockStaff/{username}', [AdminStaffController::class, 'lockStaff']);

    //CUSTOMER
    Route::get('customer/customer_index', [AdminCustomerController::class, 'customerIndex']);

    Route::get('customer/customer_update/{id}', [AdminCustomerController::class, 'customerUpdate']);
    Route::post('customer/PostCustomerUpdate/{id}', [AdminCustomerController::class, 'PostCustomerUpdate']);

    Route::get('customer/deleteCustomer/{id}', [AdminCustomerController::class, 'deleteCustomer']);

    Route::get('customer/lockCustomer/{id}', [AdminCustomerController::class, 'lockCustomer']);

    //FEEDBACK
    Route::get('feedback/feedback_index', [AdminFeedbackController::class, 'feedbackIndex']);

    Route::get('feedback/feedback_reply/{id}', [AdminFeedbackController::class, 'replyFeedback']);
    Route::post('feedback/PostReplyFeedback/{id}', [AdminFeedbackController::class, 'PostReplyFeedback']);

    Route::get('feedback/deleteFeedback/{id}', [AdminFeedbackController::class, 'deleteFeedback']);


    //BLOG
    Route::get('blog/blog_index', [AdminBlogController::class, 'blogIndex']);

    Route::get('blog/blog_create', [AdminBlogController::class, 'blogCreate']);
    Route::post('blog/PostBlogCreate', [AdminBlogController::class, 'PostBlogCreate']);

    Route::get('blog/blog_update/{id}', [AdminBlogController::class, 'blogUpdate']);
    Route::post('blog/PostBlogUpdate/{id}', [AdminBlogController::class, 'PostBlogUpdate']);

    Route::get('blog/deleteBlog/{id}', [AdminBlogController::class, 'deleteBlog']);

});


//BLOG
Route::get('home/blog', [BlogController::class, 'blog']);
Route::get('home/blogDetail/{id}', [BlogController::class, 'blogDetail']);

//CONTACT US
Route::get('home/contact', [HomeController::class, 'contactIndex']);


//ABOUT US
Route::get('home/about', [HomeController::class, 'About']);
Route::get('home/SendMailContact', [HomeController::class, 'SendMailContact']);
