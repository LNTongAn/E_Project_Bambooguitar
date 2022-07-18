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

class AdminFeedbackController extends Controller
{
    public function feedbackIndex(){

        $f = DB::table('feedback')->get();

        return view('admin.feedback.feedback_index')->with(['feedback'=>$f]);
    }

    public function replyFeedback($id){

        $f = DB::table('feedback')
        ->where('id', intval($id))
        ->first();

        $pf = DB::table('product')
        ->where('id', intval($f->product_id))
        ->first();

        return view('admin.feedback.feedback_reply')->with(['f'=>$f, 'pf'=>$pf]);

    }

    public function PostReplyFeedback(Request $request, $id){

        $staff_id = $request->input('staff_id');
        $reply = $request->input('reply');
        $created_DateRep = $request->input('created_DateRep');

        $f = DB::table('feedback')
        ->where('id', intval($id))
        ->update([
            'staff_id' => $staff_id,
            'reply' => $reply,
            'created_DateRep' => $created_DateRep
        ]);

        return redirect('admin/feedback/feedback_index');

    }

    public function deleteFeedback($id){
        $f = DB::table('feedback')
        ->where('id', intval($id))
        ->delete();
        return redirect('admin/feedback/feedback_index');
    }

}
