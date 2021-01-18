<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\StudentInformation;
use Auth;
use App\TrainingCenter;
use App\ExamResultDetail;
use DB;
use Mail;

class StudentController extends Controller
{
    public function index(){
    	
    	$info = StudentInformation::with(['center','course','session']);
    	if(Auth::user()->user_type=='center'){
    		$info =$info->where('center_id',Auth::user()->center_id ?? '');
    	}
    	$info =$info->get();
    	return view('student.manage',compact('info'));
    }

    public function show($id){
    	StudentInformation::where('id',$id)->update(['status'=>2]);
    	$info = StudentInformation::with(['center','course','session'])->find($id);
    	return view('student.show',compact('info'));
    }
    public function update_stu_info(Request $request){
       
        StudentInformation::where('id',$request->user_id)->update([$request->data_key=>$request->data_value]);
        return '200';
    }

    public function check_new_student(Request $request){
    	$info = StudentInformation::with(['center','course','session']);
    	if($request->has('center_id')){
    		if($request->center_id !=''){
    			$info =$info->where('center_id',Auth::user()->center_id ?? '');
    		}
    	}
    	$info =$info->where('status',1)->get();
    	return $info;

    }

    // public function examMail($id){
    // 	$student=StudentInformation::find($id);
    // 	$center_id = $student->center_id ?? '';
    // 	$center = TrainingCenter::find($center_id);
    // 	$link = url('assessment/').$id;
    // 	$mail_body = str_replace('_exam_link_', $link, $center->exam_mail_body);
    // 	return view('student.exam_mail',compact('mail_body','student','center'));
    // }

    public function payment_history(){
       $payments=\App\Payment::with(['student','center','course']);
       if(Auth::user()->user_type=='center'){
        $payments=$payments->where('center_id',Auth::user()->center_id);
       }
        $payments=$payments->get();
        return view('student.payment_history',compact('payments'));
    }

    public function examMail($id){
    	$student=StudentInformation::find($id);
    	$center_id = $student->center_id ?? '';
    	$center_info = TrainingCenter::find($center_id);

        $company_info=\App\Logo::where('status',1)->first();
        $logo=$company_info->logo_img ?? '';
        $website=$company_info->website ?? '';
        $logo=$company_info->logo_img ?? '';
        
        $mail_content = $center_info->mail_content ?? '';
        $subject=$center_info->mail_subject ?? '';
        $from_mail=$center_info->sender_mail ?? 'jonyali0507@gmail.com';
        $website_name=$company_info->title ?? '';
        $receiver_name= $student->first_name ?? ''." ".$student->last_name ?? '';
        $title= $company_info->title ?? '';
        $footer_info= $center_info->mail_footer ?? '';
        $couses= Course::where('id',$student->course_id)->first();
        $course_name=url('/assessment')."/".$id;
        
        $to=$student->email ?? '';
        Mail::send('email_template.index', ['content' => $mail_content,'course_name'=>$course_name, 'logo' =>$logo,'website_name' => $website_name, 'branch_name' =>  $center_info->name ?? '','receiver_name'=>$receiver_name,'footer_info'=>$footer_info,'website'=>$website], function ($message) use ($subject,$title, $to,$from_mail){
           $message->from($from_mail, $title);
           $message->to($to);
           $message->subject($subject);
        });

        if (Mail::failures()) {
             return redirect()->back()->with('warning', 'You Use Wrong Email'); 
        }
    	return redirect()->back()->with('success','Mail Send');
    }

    public function examResultList(){

    	$info = ExamResultDetail::where('status',1)->orderBy('student_id','desc')->get();
    	return view('student.result_sheet',compact('info'));
    }


}
