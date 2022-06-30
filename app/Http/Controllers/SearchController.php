<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text=$_GET['query'];
            $display= DB::table('displays')->where('comment_body','LIKE','%' .$search_text.'%')->paginate(100);
            return view('search',['display'=>$display]);
        }else{
             return view('search');
        }
    }
}
