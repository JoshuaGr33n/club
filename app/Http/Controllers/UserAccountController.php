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
use DB; 
use Carbon\Carbon; 
use Mail; 
use Illuminate\Support\Str;
use App\User; 
use App\UserAccountModel;
use Hash;
use App\Chart;
use Storage;

class UserAccountController extends Controller { 

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function addNewMember()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }


        return view('add-new-member');
    }

    public function add_new_member_process(Request $request)
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }

        if (Auth::user()->status!=="admin") {
            return Redirect::to('/');
        }

        // if (!$request->email) {
        //     return Redirect::to('/');
        // }


      $messages = [
  
          'email.unique' => 'Email already taken',
          'email.email' => 'Invalid Email',
          'email.required' => 'Email is Required',
      ];
      $request->validate([
          'email' => 'required|email|unique:users'
      ],$messages);
      $check = ProspectiveMembers::where('email',$request->email)->get()->count();
      // $token = str_random(64);

      if($check>=1){
        return back()->with('duplicate_err', 'A link had already been forwarded to '.$request->email);
      }else{
      $token = Str::random(64);
  
        DB::table('prospective_members')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
      
        Mail::send('email-messages.create-account-link', ['token' => $token, 'email' => $request->email], function($message) use($request){
            $message->to($request->email);
            $message->from($request->email);
            $message->subject('Create Account');
        });
  
        return back()->with('success_message', 'A link have been forwarded to '.$request->email);
       }  
    }


    public function createAccount($email,$token, Request $request)
    {
        if (Auth::check()) {
            Auth::logout(); 
        }


        $check2 = DB::table('prospective_members')
        ->where(['email' => $request->email, 'token' => $request->token])
        ->first();

        
        if(!$check2){
            return redirect('/');

          }

    
        $check = DB::table('prospective_members')
                          ->where(['token' => $token])
                          ->first();
    
                          if(!$check){
                            return redirect('/');
    
                          }
    
                          if(empty($email)){
                            return redirect('/');
                          }
                          if(empty($token)){
                            return redirect('/');
                          }

        return view('create-account',['email'=>$email,'token'=>$token]);
    }



    public function createAccountProcess(Request $request) { 

        $check = DB::table('prospective_members')
        ->where(['email' => $request->email, 'token' => $request->token])
        ->first();

        
        if(!$check){
            return redirect('login');

          }



        $messages = [
          'fname.required' => 'Required',
          'lname.required' => 'Required',
          'gender.required' => 'Required',
          'dob.required' => 'Required',
          'occupation.required' => 'Required',
          'address.required' => 'Required',
          'phone.required' => 'Required',
          'phone.unique' => 'Phone number already taken',
          'phone.min' => 'Phone must be 11 digits',
          'phone.max' => 'Phone must be 11 digits',
          'password.min' => 'Password must be atleast 6 digits',
          'password.required' => 'Required',
          'retype_password.required' => 'Required',
          'retype_password.same' => 'Password dont match',

      ];
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:users',
            'dob' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'phone' => 'required|unique:users|min:11|max:11|regex:/(0)[0-9]{10}/',
            'password' => 'required|min:6|required_with:retype_password',
            'retype_password' => 'required|same:password'
            
        ],$messages);

        $uniqueCode = Str::random(6);
        $generated_username = $request->fname.$uniqueCode;
        
         //replace dash ' ' with space "-"
         $generated_username = str_replace(' ','-',$generated_username);
         //replace dash ' ' with space "-"
         if ($request->file('profile_pic')) { 
            
           if ($request->file('profile_pic')->isValid()) {

            $extension = $request->profile_pic->extension();
            $request->profile_pic->storeAs('profile_pic', $generated_username.".".$extension);
            $url = Storage::url('app/profile_pic/'.$generated_username.".".$extension);

           $create_acct = new UserAccountModel;
           $create_acct->fname = $request->fname;
           $create_acct->lname = $request->lname;
           $create_acct->gender = $request->gender;
           $create_acct->phone = $request->phone;
           $create_acct->email = $request->email;
           $create_acct->dob = $request->dob;
           $create_acct->occupation = $request->occupation;
           $create_acct->address = $request->address;
           $create_acct->pic = $url;
           $create_acct->username = $generated_username;
           $create_acct->password = \Hash::make($request->password);
           }
        }else{

            $create_acct = new UserAccountModel;
            $create_acct->fname = $request->fname;
            $create_acct->lname = $request->lname;
            $create_acct->gender = $request->gender;
            $create_acct->phone = $request->phone;
            $create_acct->email = $request->email;
            $create_acct->dob = $request->dob;
            $create_acct->occupation = $request->occupation;
            $create_acct->address = $request->address;
            $create_acct->username = $generated_username;
            $create_acct->password = \Hash::make($request->password);
        }    
      
        Mail::send('email-messages.sign-up-suc-message', ['fname' => $request->fname, 'lname' => $request->lname,'phone' => $request->phone, 'email' => $request->email], function($message) use($request){
          $message->to($request->email);
          $message->from('joshua@doshservices.com');
          $message->subject('Club Website');

        });

       


        $create_acct->save();

        DB::table('prospective_members')->where(['email'=> $request->email])->delete();

       
        return response()->json([ 'success'=> 'Registration Successful!']);
      
           
       
       

    }

    public function accountSettings()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }


        return view('account-settings');
    }

    public function accountSettingsProcess(Request $request) { 
        if (!Auth::check()) {
          return Redirect::to('/');
      }
      $update_acct = UserAccountModel::find(Auth::id());

      $messages = [
        'fname.required' => 'Required',
        'lname.required' => 'Required',
        'gender.required' => 'Required',
        'dob.required' => 'Required',
        'occupation.required' => 'Required',
        'address.required' => 'Required',
        'phone.required' => 'Required',
        'phone.min' => 'Phone must be 11 digits',
        'phone.max' => 'Phone must be 11 digits',
        'email.required' => 'Email is required',
          'email.email' => 'Invalid email',
          'email.required_with' => 'Email doesnt match',
          'retype_email.required' => 'Required',
          'retype_email.same' => 'Email dont match',

    ];

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'phone' => 'required|min:11|max:11|regex:/(0)[0-9]{10}/',
            'email' => 'required|email',
            'retype_email' => 'required|same:email'
            
        ],$messages);
        $id=Auth::id();
  
              $check_email =  DB::select("select * FROM users WHERE email='$request->email' AND id NOT IN('$id')");
              $check_phone=  DB::select("select * FROM users WHERE phone='$request->phone' AND id NOT IN('$id')");
               if ($check_email) {
                // return back()->with('email_duplicate_error', 'Email already belong to another User!');
                return response()->json([ 'email_duplicate_error'=> 'Email already belong to another User!']);
               }
               if ($check_phone) {
                // return back()->with('phone_duplicate_error', 'Phone Number already belong to another User!');
                return response()->json([ 'phone_duplicate_error'=> 'Phone Number already belong to another User!']);
               }

               if ($request->file('profile_pic')) { 
            
                if ($request->file('profile_pic')->isValid()) {
     
                 $extension = $request->profile_pic->extension();
                 $request->profile_pic->storeAs('profile_pic', $update_acct->username.".".$extension);
                 $url = Storage::url('app/profile_pic/'.$update_acct->username.".".$extension);
  
                 $update_acct->fname = $request->fname;
                 $update_acct->lname = $request->lname;
                 $update_acct->gender = $request->gender;
                 $update_acct->phone = $request->phone;
                 $update_acct->email = $request->email;
                 $update_acct->dob = $request->dob;
                 $update_acct->occupation = $request->occupation;
                 $update_acct->address = $request->address;
                 $update_acct->pic = $url;
                }
                 }else{
    
                    $update_acct->fname = $request->fname;
                    $update_acct->lname = $request->lname;
                    $update_acct->gender = $request->gender;
                    $update_acct->phone = $request->phone;
                    $update_acct->email = $request->email;
                    $update_acct->dob = $request->dob;
                    $update_acct->occupation = $request->occupation;
                    $update_acct->address = $request->address;
                }    
        
  
  
        $update_acct->save();
  
       
        $update_acct->update($request->all());
  
          // return back()->with('success', 'Profile Updated!');
          return response()->json([ 'update_success'=> 'Profile Updated!']);
       
  
    }



    public function changePassword(Request $request) { 
        if (!Auth::check()) {
             return Redirect::to('/');
         }


         $messages = [
            'old_password.min' => 'Password must be atleast 6 digits',
            'old_password.required' => 'Required',
            'new_password.min' => 'Password must be atleast 6 digits',
            'new_password.required' => 'Required',
            'confirm_new_password.same' => 'Password dont match',
    
        ];
         $rules = array(
          'old_password'    => 'required|min:6', 
          'new_password' => 'required|min:6',
          'confirm_new_password' => 'same:new_password' 
        );
      
        $validator = $this->validate($request, $rules,$messages);
       
      
          
          $userdata = array(
              'email'     => Auth::user()->email,
              'password'  =>request('old_password')
          );
         
          if (Auth::attempt($userdata)) {
                  $changePassword = UserAccountModel::find(Auth::id());
                  $changePassword->password = \Hash::make(request('new_password'));
                  $changePassword->save();
            
                  $changePassword->update($request->all());
         
                  // return back()->with('success', 'Password Changed');
                  return response()->json([ 'success'=> 'Password Changed!']);
      
          } else {        
      
            
                //  return back()->with('incorrect_password', 'Old Password Incorrect');
                return response()->json([ 'incorrect_password'=> 'Old Password Incorrect']);
      
          }
      
      
      
    
    }
    public function myProfile()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }
        $member_chart_record = Chart::select([DB::raw("SUM(goal) AS total_goal"), DB::raw("SUM(assist) AS total_assist"), DB::raw("SUM(clean_sheet) AS total_clean_sheet"),'member_id'])->where('member_id',Auth::user()->id)->groupby('member_id')->first();

        return view('my-profile',['member_chart_record'=>$member_chart_record]);
    }


    public function myChart()
    {
        if (!Auth::check()) {
            return Redirect::to('/');
        }
        
       
       
        $mychart = Chart::where('member_id',Auth::user()->id)->orderby('goal', 'DESC')->paginate(10);
        
        return view('my-chart',['mychart'=>$mychart]);

    }
   

}
