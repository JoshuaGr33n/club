<?php 

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\AuthAccessAuthorizesResources;
use Illuminate\Html\HtmlServiceProvider;

use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ProspectiveMembers;
use App\Chart;
use DB;

class PageController extends Controller { 

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function prospectiveMembers()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }


        $prospective_members = ProspectiveMembers::select('*')->orderBy('created_at','DESC')->get();
        $prospective_members_count = ProspectiveMembers::select('*')->orderBy('created_at','DESC')->count();
       

        return view('prospective-members',['prospective_members'=>$prospective_members,'prospective_members_count'=>$prospective_members_count])->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function deleteProspectiveMember(Request $request)
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }


        ProspectiveMembers::where(['id'=> $request->id])->delete();
       

        
        return Redirect::to('prospective-members');
    }



    public function allMembers(Request $request)
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }


      
       $all_members = DB::table('users')->orderby('fname','DESC')->get();
      
       
       return view('all-members',['all_members'=>$all_members])->with('i', (request()->input('page', 1) - 1) * 5);
        
       
    }


    public function memberProfile($username, Request $request)
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

          if(empty($username)){
            return Redirect::to('/');
        }

        if(Auth::user()->username==$username){
            return Redirect::to('my-profile');
        }

      
       $member_profile = DB::table('users')->where('username',$username)->first();

       if(!$member_profile){
        return Redirect::to('/');
        }

       $member_chart_record = Chart::select([DB::raw("SUM(goal) AS total_goal"), DB::raw("SUM(assist) AS total_assist"), DB::raw("SUM(clean_sheet) AS total_clean_sheet"),'member_id'])->where('member_id',$member_profile->id)->groupby('member_id')->first();
      
       
       return view('member-profile',['member_profile'=>$member_profile,'member_chart_record'=>$member_chart_record])->with('i', (request()->input('page', 1) - 1) * 5);
        
       
    }

    public function memberChart($username, Request $request)
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }
        if(empty($username)){
            return Redirect::to('/');
        }

       

        $member_profile = DB::table('users')->where('username',$username)->first();

        if(!$member_profile){
            return Redirect::to('/');
            }

            
       
        $member_chart = Chart::where('member_id',Auth::user()->id)->orderby('goal', 'DESC')->paginate(10);

       
        
        return view('member-chart',['member_chart'=>$member_chart,'member_profile'=>$member_profile]);

    }





    public function chart()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        $members = DB::table('users')->orderby('fname','ASC')->paginate(10);
        //
        return view('chart',['members'=>$members]);

    }


    public function goalChart()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        $goal_chart = Chart::select([DB::raw("SUM(goal) AS total_goal"),'member_id'])->groupby('member_id')->orderby('total_goal',"DESC")->paginate(10);
       
        return view('goal-chart',['goal_chart'=>$goal_chart]);

    }


    public function assistChart()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        $assist_chart = Chart::select([DB::raw("SUM(assist) AS total_assist"),'member_id'])->groupby('member_id')->orderby('total_assist',"DESC")->paginate(10);

        return view('assist-chart',['assist_chart'=>$assist_chart]);

    }


    public function cleanSheetChart()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        $clean_sheet_chart = Chart::select([DB::raw("SUM(clean_sheet) AS total_clean_sheet"),'member_id'])->groupby('member_id')->orderby('total_clean_sheet',"DESC")->paginate(10);

        return view('clean-sheet-chart',['clean_sheet_chart'=>$clean_sheet_chart]);

    }



    public function homeChart()
    {
        

        $goal_chart = Chart::select([DB::raw("SUM(goal) AS total_goal"),'member_id'])->groupby('member_id')->orderby('total_goal',"DESC")->take(5)->get();

        $assist_chart = Chart::select([DB::raw("SUM(assist) AS total_assist"),'member_id'])->groupby('member_id')->orderby('total_assist',"DESC")->take(5)->get();

        $clean_sheet_chart = Chart::select([DB::raw("SUM(clean_sheet) AS total_clean_sheet"),'member_id'])->groupby('member_id')->orderby('total_clean_sheet',"DESC")->take(5)->get();
       
        return view('home',['goal_chart'=>$goal_chart,'assist_chart'=>$assist_chart,'clean_sheet_chart'=>$clean_sheet_chart]);

    }



}
