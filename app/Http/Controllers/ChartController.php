<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use Redirect,Response;
use DB;
use Auth;

class ChartController extends Controller
{
    public function index()
    {
        //


        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }


        $charts = Chart::orderBy('id','desc')->paginate(8);
        
        $all_members = DB::table('users')->orderby('fname','DESC')->get();
   
        return view('manage-chart',['charts'=>$charts,'all_members'=>$all_members]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }

        $postID = $request->post_id;
        $post   =   Chart::updateOrCreate(['id' => $postID],
                    ['goal' => $request->goal, 'assist' => $request->assist, 'clean_sheet' => $request->clean_sheet, 'member_id' => $request->member ]);
    
        return Response::json($post);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }

        $where = array('id' => $id);
        $post  = Chart::where($where)->first();

        $member = DB::table('users')->where('id',$post->member_id)->first();
        
        $data = $post;
 
        return Response::json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }


        $post = Chart::where('id',$id)->delete();
   
        return Response::json($post);
    }
}