<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class BlogController extends Controller
{
    public function blog(){

        $b = DB::table('blogs')->get();

        return view('home.blog')->with(['blog'=>$b]);
    }

    public function blogDetail($id){

        $b = DB::table('blogs')
        ->where('id', intval($id))
        ->first();

        return view('home.blogDetail')->with(['b'=>$b]);
    }

}
