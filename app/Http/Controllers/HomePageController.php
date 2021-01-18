<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\ClientLogo;
use App\Contact;
use App\Feature;
use App\HomePage;
use App\Logo;
use App\Mission;
use App\Project;
use App\Service;
use App\Skill;
use App\Slider;
use App\Profile;
use App\TrainingCenter;
use App\SCInfo;
use App\BackTitle;
use App\User;
use App\StudentInformation;
use App\QuestionOption;
use App\Question;
use App\Course;
use App\AcademicHistry;
use App\ExamResultDetail;
use App\CustomerContact;
use App\About;
use App\Post;
use App\Mail\CustomerMail;
use App\Social;
use DB;
use Mail;
use Illuminate\Http\Request;


class HomePageController extends Controller
{

    public function index()
    {
        
        
        $sliders = Slider::where('status', 1)->get();
        
        $contacts = Contact::where('status', 1)->where('contact_setup_id',1)->first();
        //$logos = Logo::where('status', 1)->get();
        $projects = Project::where('service_status', 1)->take(9)->get();
        $missions = Mission::where('status', 1)->get();
        $features = Feature::where('status', 1)->get();
        $skills = Skill::where('status', 1)->get();
        $services = Service::where('status', 1)->where('contenttype',1)->get();
        $achievements = Achievement::where('status', 1)->get();
        $project_imgs = Project::where('service_status', 1)->get();
        $client_logos = ClientLogo::where('status', 1)->get();
        $welcomespeach = Profile::first();
        $centers = TrainingCenter::with('courses')->where('status',1)->get();
        $scinfos = SCInfo::where('status',1)->get();
        $b_t = BackTitle::where('status',1)->first();
        $socialmedia = Social::get();
        $consultancy = Service::where('status', 1)->where('contenttype',2)->get();
        

        // //dump( $b_t);die;

        // $i=0;
        // $project_info=[];
        // foreach ($projects as $p){
        //     if ($i<=3){
        //         $project_info[0][]=$p;
        //     }elseif($i>3 && $i<=6){
        //         $project_info[1][]=$p;
        //     }else{
        //         $project_info[2][]=$p;
        //     }
        //    $i++;
        // }

        // $j=0;
        // $service_info=[];
        // foreach ($services as $s){
        //     if ($j<=2){
        //         $service_info[0][]=$s;
        //     }elseif($j>2 && $j<=5){
        //         $service_info[1][]=$s;
        //     }
        //     $j++;
        // }

        //  $subject='Please Attend The Exam';
        //     $to='';
        //    Mail::send('email_template.index', ['content' => '', 'logo' =>'','title' => 'farhad', 'branch_name' =>  $subject], function ($message) use ($subject, $to){
        //    $message->from('jonyali0507@gmail.com', 'Mail Title');
        //    $message->to('farhadali0507@gmail.com');
        //    $message->subject($subject);
        // });
        // echo "Basic Email Sent. Check your inbox.";
        // die();

    return view('frontend.index', compact('sliders', 'contacts', 'skills','missions','socialmedia','services','scinfos','consultancy','client_logos','b_t'));
    }



    public function about()
    {
        $abouts = About::where('status', 1)->get();
        $socialmedia = Social::get();
        $contacts = Contact::where('status', 1)->where('contact_setup_id',1)->first();
        $logos = [];
        $skills = [];
        $missions = [];

        return view('frontend.menus.about', compact('abouts', 'socialmedia', 'contacts'));
    }
    public function galary()
    {
        $posts = \App\Post::where('status',1)->orderBy('id','desc')->paginate(16);
        return view('frontend.menus.galary', compact('posts'));
    }
    public function contact()
    {
        $socialmedia = Social::get();
        $contacts = Contact::where('status', 1)->where('contact_setup_id',1)->first();
        return view('frontend.menus.contact', compact('contacts','socialmedia'));
    }

    public function examResultSave(Request $request){
     
        $ExamResultDetail = new ExamResultDetail();
        $ExamResultDetail->student_id = $request->user_id ?? '';
        $ExamResultDetail->set_id = $request->set_id ?? '';
        $ExamResultDetail->result_percentage = $request->style_percentage ?? '';
        $ExamResultDetail->result_sheet = json_encode($request->result_sheet ?? '') ;
        $ExamResultDetail->status = 1;
        $ExamResultDetail->save();

        $StudentInformation = StudentInformation::with(['course'])->where('id',$request->user_id)->first();
        $result_status = $StudentInformation->exam_status ?? 0;
        $StudentInformation->exam_status=$result_status+1;
        $StudentInformation->save();
          $company_info=\App\Logo::where('status',1)->first();
        $mail_content =$StudentInformation->email." candidates completed Assessment for the program ".$StudentInformation->course->name."" .".  He/She got ".$request->style_percentage ." percent Marks. Please take necessary step.  ".json_encode($request->result_sheet ?? '');
        $center = TrainingCenter::where('id',$StudentInformation->center_id)->first();
        // dump( $center);
        // die();
        $to =strip_tags($center->sender_mail ?? '');
        $receiver_name =strip_tags($center->name ?? '');
        $logo = '';
        $website_name = $company_info->title ?? '';
        $footer_info = $company_info->website ?? '';
        $website =  '';
      
        $from_mail = strip_tags($company_info->email ?? '');
        $title = strip_tags($company_info->title ?? '');
        $course_name = strip_tags($StudentInformation->course->name ?? '');
        $subject = 'Candidates complete assessment';

        $mail_array = [$to, $from_mail];
        foreach ($mail_array as $value_email) {
           Mail::send('email_template.index', ['content' => $mail_content,'course_name'=>$course_name, 'logo' =>$logo,'website_name' => $website_name, 'branch_name' =>  $receiver_name ?? '','receiver_name'=>$receiver_name,'footer_info'=>$footer_info,'website'=>$website], function ($message) use ($subject, $value_email,$from_mail,$title){
               $message->from($from_mail, $title);
               $message->to($value_email);
               $message->subject($subject);
            }); 
        }
        echo "Basic Email Sent. Check your inbox.";
        die();
    }




    public function program(Request $request){
        $infos = Course::with('center');
        if($request->has('center_id')){
            if($request->center_id !='all'){
                $infos =$infos->where('center_id',$request->center_id ?? ''); 
            }
           
        }
        
        $infos =$infos->paginate(12);
        $centers = TrainingCenter::with('courses')->where('status',1)->get();
        $center_id = $request->center_id ?? "all";
        return view('frontend.course_list',compact('infos','centers','center_id'));
    }
     public function courseDetails($id){
       
        $info = Course::with('center')->where('id',$id)->first();
        return view('frontend.course_details',compact('info'));
    }
    public function studentRegistration(){
        $centers = TrainingCenter::with('courses')->where('status',1)->get();
        return view('frontend.student_registration',compact('centers'));
    }

    public function studentInfoSave(Request $request){
       // return $request->all();
        $center_info=TrainingCenter::where('id',$request->center_id)->first();
        $company_info=\App\Logo::where('status',1)->first();
        $logo=$company_info->logo_img ?? '';
        $com_email = $company_info->email ?? '';
        $website=$company_info->website ?? '';
        $logo=$company_info->logo_img ?? '';
        
        $mail_content = $center_info->mail_content ?? '';
        $subject=$center_info->mail_subject ?? '';
        $from_mail=$center_info->sender_mail ?? '';
        $website_name=$company_info->title ?? '';
        $receiver_name= $request->first_name ?? ''." ".$request->last_name ?? '';
        $title= $company_info->title ?? '';
        $footer_info= $center_info->mail_footer ?? '';
        $couses= Course::where('id',$request->course_id)->first();
        $url_link = 'http://portal.dgenacademy.com/program';
        //url('program');
        $course_name="<a href=".$url_link."/".$request->course_id.">".$couses->name ?? ''."</a>";

        $to=$request->email ?? '';
        

        $User = User::where('email',$request->email)->first();
        if($User){
           $User->name = $request->first_name ?? '';
            $User->email = $request->email ?? '';
            $User->center_id = $request->center_id ?? '';
            $User->user_type = 'student';
            $User->save();
            
        } else{
            $User = new User();
            $User->name = $request->first_name ?? '';
            $User->email = $request->email ?? '';
            $User->center_id = $request->center_id ?? '';
            $User->user_type = 'student';
            $User->save();

            
        }
         $user_id = $User->id;

        $StudentInformation = StudentInformation::where('email',$request->email)->first();
        if(!$StudentInformation){
            $StudentInformation = new StudentInformation();
        }

         $StudentInformation->first_name= $request->first_name ?? '';
         $StudentInformation->user_id=  $user_id;
         $StudentInformation->last_name= $request->last_name ?? '';
         $StudentInformation->email= $request->email ?? '';
         $StudentInformation->mobile= $request->mobile ?? '';
         $StudentInformation->height_edu_l= $request->height_edu_l ?? '';
         $StudentInformation->height_edu_y= $request->height_edu_y ?? '';
         $StudentInformation->height_edu_r= $request->height_edu_r ?? '';
         $StudentInformation->center_id= $request->center_id ?? '';
         $StudentInformation->course_id= $request->course_id ?? '';
         $StudentInformation->english_skill_l= $request->english_skill_l ?? '';
         $StudentInformation->english_skill_r= $request->english_skill_r ?? '';
         $StudentInformation->english_skill_w= $request->english_skill_w ?? '';
         $StudentInformation->english_skill_s= $request->english_skill_s ?? '';
         $StudentInformation->ms_w_skill= $request->ms_w_skill ?? '';
         $StudentInformation->ms_e_skill= $request->ms_e_skill ?? '';
         $StudentInformation->ms_pp_skill= $request->ms_pp_skill ?? '';
         $StudentInformation->ms_out_skill= $request->ms_out_skill ?? '';
         $StudentInformation->have_laptop= $request->have_laptop ?? '';
         $StudentInformation->have_internet= $request->have_internet ?? '';
         $StudentInformation->interest= $request->interest ?? '';
         $StudentInformation->feature_yourself= $request->feature_yourself ?? '';
         $StudentInformation->ex_in_freel= $request->ex_in_freel ?? '';
         $StudentInformation->year_of_ex_fl= $request->year_of_ex_fl ?? '';
         $StudentInformation->specify_area= $request->specify_area ?? '';
         $StudentInformation->have_work_ex= $request->have_work_ex ?? '';
         $StudentInformation->year_of_work_ex= $request->year_of_work_ex ?? '';
         $StudentInformation->status= 1;
         $StudentInformation->exam_status= 0;
         $StudentInformation->save();

          $mail_array = [$to, $from_mail, $com_email];
         foreach ($mail_array as $value_email) {
         //   return $value_email;
              Mail::send('email_template.index', ['content' => $mail_content,'course_name'=>$course_name, 'logo' =>$logo,'website_name' => $website_name, 'branch_name' =>  $center_info->name ?? '','receiver_name'=>$receiver_name,'footer_info'=>$footer_info,'website'=>$website], function ($message) use ($subject,$title, $value_email,$from_mail){
               $message->from($from_mail, $title);
               $message->to($value_email);
               $message->subject($subject);
            });
         }
          return redirect()->back()->with('success', 'Thank you for registration'); 
       
    }


    public function Assessment($id){
      
       \Session::put('student_id', $id);
        $student = StudentInformation::find($id);
        if($student){
          $question_set = array();
           $question_sets =Question::select('set_id')->groupBy('set_id')->get();
           foreach ($question_sets as $value) {
             array_push($question_set, $value->set_id);
           }
           if(sizeof($question_set) == 0){
            return "Please Wait Question Not Set Yet !";
           }
           
            $array_key = array_rand($question_set,1);
            $set_id = $question_set[ $array_key];
            //$set_id = "A";
            $order_by_key=['id','question','ques_ans'];
            $order_by_serial=['DESC','ASC'];

             $order_key = array_rand($order_by_key,1);
            $order_sel = array_rand($order_by_serial,1);
          // return $order_by_serial[$order_sel];
            
              $questions = Question::with('question_options')->where('set_id',$set_id)->orderBy($order_by_key[$order_key],$order_by_serial[$order_sel])->get();
            $questions= json_encode($questions);
            $user_id = $id;
            return view('frontend.primary_exam_2',compact('questions','user_id','set_id')); 
        }else{
            return redirect('/');
        }
        
    }

public function question_paper_fetch(Request $request){
     $id =  \Session::get('student_id');
     $student = StudentInformation::find($id);
        if($student){
          $question_set = array();
           $question_sets =Question::select('set_id')->groupBy('set_id')->get();
           foreach ($question_sets as $value) {
             array_push($question_set, $value->set_id);
           }
           if(sizeof($question_set) == 0){
            return "Please Wait Question Not Set Yet !";
           }
           
            $array_key = array_rand($question_set,1);
            $set_id = $question_set[ $array_key];
            //$set_id = "A";
            $order_by_key=['id','question','ques_ans'];
            $order_by_serial=['DESC','ASC'];

             $order_key = array_rand($order_by_key,1);
            $order_sel = array_rand($order_by_serial,1);
          // return $order_by_serial[$order_sel];
            
              $questions = Question::with('question_options')->where('set_id',$set_id)->orderBy($order_by_key[$order_key],$order_by_serial[$order_sel])->get();
            return $questions= json_encode(base64_encode($questions));
            $user_id = $id;
          }
    }

    public function checkAnswer(Request $request){
       // return $request->all();
        $question_id=$request->question_id;
        $que_ser=$request->que_ser;
        $result = Question::where('id',$question_id)->where('ques_ans',$que_ser)->first();
        return $que_ser;

    }

   

    public function formFour($id=''){
      
        if($id == ''){
             $id = \Auth::user()->id ?? '';
        }
         $info = StudentInformation::with(['center','course','session','acground'])->where('user_id',$id)->first();
         $centers = TrainingCenter::with('courses')->where('status',1)->get();
         $course_sessions = \App\CourseSession::get();
        return view('frontend.form_four',compact('centers','course_sessions','info'));
    }

    public function payment($id=''){

       if($id == ''){
         $id = \Auth::user()->id ?? '';
        }
         $info = StudentInformation::with(['center','course','session','acground'])->where('user_id',$id)->first();
         $centers = TrainingCenter::with('courses')->where('status',1)->get();
         $course_sessions = \App\CourseSession::get();
        return view('frontend.payment',compact('centers','course_sessions','info'));
    }
    public function due_payment(){
    $info = StudentInformation::with(['center','course','session','acground','payment']);
    if(\Auth::user()->user_type=='center'){
      $info = $info->where('center_id',\Auth::user()->center_id);
    }
     $info = $info->get();
     return view('student.due_payment',compact('info'));
    }

    public function payment_response(){
        return $message;

        // return view('frontend.payment_result',compact('message','tran_id','amount','currency','cus_name','currency','cus_email','cus_phone','center_id','course_id','session_id','student_id','status','cus_add1'));
    }


    public function formFourSave(Request $request){
       // return $request->all();
         $validatedData = $request->validate([
                'first_name' => ['required'],
                'last_name' => ['required'],
                'dob' => ['required'],
                'nid' => ['required'],
                "email"=>['required'],
                "mobile"=>['required'],
                "father_name"=>['required'],
                "father_mobile"=>['required'],
                "father_nid"=>['required'],
                "mother_name"=>['required'],
                "mother_mobile"=>['required'],
                "mother_nid"=>['required'],
                "certificate_id"=>['required'],
                "major_subject"=>['required'],
                "result"=>['required'],
                "years"=>['required'],
                "center_id"=>['required'],
                "course_id"=>['required'],
                "session_id"=>['required'],
                "english_skill_l"=>['required'],
                "english_skill_r"=>['required'],
                "english_skill_w"=>['required'],
                "english_skill_s"=>['required']
            ]);
DB::beginTransaction();

    try {
         $student_infos = StudentInformation::where('email',$request->email)->first();
         if($student_infos){
            $StudentInformation = StudentInformation::where('email',$request->email)->first();
         }else{
            $StudentInformation = new StudentInformation();
         }
         if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }
         $StudentInformation->first_name = $request->first_name ?? '';
        if($request->hasFile('image')){
            $StudentInformation->image = $fileName ?? '';
        }
        $StudentInformation->last_name = $request->last_name ?? '';
        $StudentInformation->dob = $request->dob ?? '';
        $StudentInformation->nid = $request->nid ?? '';
        $StudentInformation->email = $request->email ?? '';
        $StudentInformation->mobile = $request->mobile ?? '';
        $StudentInformation->father_name = $request->father_name ?? '';
        $StudentInformation->father_mobile = $request->father_mobile ?? '';
        $StudentInformation->father_nid = $request->father_nid ?? '';
        $StudentInformation->mother_name = $request->mother_name ?? '';
        $StudentInformation->mother_mobile = $request->mother_mobile ?? '';
        $StudentInformation->mother_nid = $request->mother_nid ?? '';
        $StudentInformation->center_id = $request->center_id ?? '';
        $StudentInformation->course_id = $request->course_id ?? '';
        $StudentInformation->session_id = $request->session_id ?? '';
        $StudentInformation->english_skill_l = $request->english_skill_l ?? '';
        $StudentInformation->english_skill_r = $request->english_skill_r ?? '';
        $StudentInformation->english_skill_w = $request->english_skill_w ?? '';
        $StudentInformation->english_skill_s = $request->english_skill_s ?? '';
        $StudentInformation->save();

        $student_id = $StudentInformation->id;
        $certificates = $request->certificate_id ?? [];
        for ($i=0; $i <count($certificates) ; $i++) { 
            $AcademicHistry = new AcademicHistry();
            $AcademicHistry->student_id = $student_id;
            $AcademicHistry->certificate_id = $certificates[$i] ?? '';
            $AcademicHistry->result = $request->result[$i] ?? '';
            $AcademicHistry->major_subject = $request->major_subject[$i] ?? '';
            $AcademicHistry->years = $request->years[$i] ?? '';
            $AcademicHistry->save();
        }
    DB::commit();
    return redirect()->back()->with('success', 'Information Save Successfully');  
    } catch (\Exception $e) {
        DB::rollback();
       
    }



    }


    // public function SendMessage(Request $request){
    //     try {
    //     $contact = new  CustomerContact();
    //     $contact->con_name = $request->con_name;
    //     $contact->email_address = $request->email_address;
    //     $contact->company_name = $request->company_name;
    //     $contact->phone_no = $request->phone_no;
    //     $contact->country = $request->country;
    //     $contact->message = $request->message;
    //     $contact->save();
    //     Mail::to($request->email_address)->send(new CustomerMail($request));
    //     return back()->with('message', 'Message send successfully !'); 
    //     } catch (Exception $e) {
    //        return back()->with('message', 'Message send successfully !');   
    //     }
        
    // }



    public function applynow(){
        $socialmedia = Social::get();
        $contacts = Contact::where('status', 1)->where('contact_setup_id',1)->first();

        return view('frontend.menus.applynow', compact('socialmedia', 'contacts'));
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(HomePage $homePage)
    {
        //
    }

    public function edit(HomePage $homePage)
    {
        //
    }

    public function update(Request $request, HomePage $homePage)
    {
        //
    }

    public function destroy(HomePage $homePage)
    {
        //
    }
}
