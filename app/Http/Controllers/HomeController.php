<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\TrainingCenter;
use App\StudentInformation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        if(Auth::user()->user_type=='admin' || Auth::user()->user_type=='center'){
            $total_center = TrainingCenter::count();
            $registered = new StudentInformation();
            if(Auth::user()->user_type=='center'){
                $registered = $registered->where('center_id',Auth::user()->center_id);
            }
            $registered = $registered->count();
            
            $take_exam = StudentInformation::where('exam_status',0);
            if(Auth::user()->user_type=='center'){
                $take_exam = $take_exam->where('center_id',Auth::user()->center_id);
            }
            $take_exam->count();

            $not_response_by_center = StudentInformation::where('status',0);
            if(Auth::user()->user_type=='center'){
                $not_response_by_center = $not_response_by_center->where('center_id',Auth::user()->center_id);
            }
            $not_response_by_center->count();
             return view('home.admin',compact('total_center','registered','not_response_by_center'));
        }else if(Auth::user()->user_type=='student'){
            //return Auth::user()->id;
            $payments=\App\Payment::with(['student','center','course'])->where('student_id',Auth::user()->id)->get();
            return view('frontend.student_panel',compact('payments'));
        }else{
            $payments=\App\Payment::with(['student','center','course'])->where('student_id',Auth::user()->id)->get();
             return view('frontend.student_panel',compact('payments'));
        }
        
    }

    
    public function userProfile(){
        $user= User::find(Auth::user()->id);
        $centers = TrainingCenter::where('status',1)->get();
        return view('users.edit',compact('user','centers'));
    }
    public function newUser(){
        $user ='';
        $centers = TrainingCenter::where('status',1)->get();
        return view('users.add',compact('centers','user'));
    }

    public function userEdit($id){
         $user= User::find($id);
        $centers = TrainingCenter::where('status',1)->get();
        return view('users.edit',compact('user','centers'));
    }

    public function userList(){
        $info = User::with('center')->get();
        return view('users.index',compact('info'));

    }

    public function userDelete($id){
        $User = User::find($id);
        $User->delete();
        return redirect('user-list')->with('success', 'Delete Successfully');
    }


    public function userUpdate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'status' => 'required'

        ]);
        if($request->id ==''){
             $user = new User();
        }else{
             $user = User::find($request->id);
        }
       
        $user->name = $request->name ?? '';
        $user->email = $request->email ?? '';
        $user->user_type = $request->user_type ?? '';
        $user->center_id = $request->center_id ?? '';
        $user->status = $request->status ?? '';
        if($request->has('password')){
            if($request->password !=''){
               $user->password = \Hash::make($request->password ?? '');; 
            }
        }
        $user->save();
        $user_id = $user->id;
        if($request->user_type =='student'){
            $StudentInformation = new StudentInformation();
            $StudentInformation->first_name = $request->name ?? '';
            $StudentInformation->email = $request->email ?? '';
            $StudentInformation->user_id = $user_id ?? '';
            $StudentInformation->center_id = $request->center_id ?? '';
            $StudentInformation->save();
        }
        return redirect()->back()->with('success','Information Save Successfully');
    }

}
