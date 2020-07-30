<?php

namespace EvilMan2404\BlogState\Controllers;

use App\Http\Controllers\Controller;
use App\Posts;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogState extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('BlogState::choose',['posts' => $posts]);
    }
    public function getState(Request $request){
        $this->validate($request,
            [
                'post' => 'required|numeric',
                'date' => 'required',
            ]);
        $date = date("d-m-Y",strtotime(str_ireplace(".", "-", $request->input('date'))));
        $state = DB::table('states')->where('id_post',$request->input('post'))->where('visit',$date);
        $all = $state->count();
        $states = $state->get();

        return view('BlogState::result', ['amount' => $all, 'list' => $states]);
    }
}

