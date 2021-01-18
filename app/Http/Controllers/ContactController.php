<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContactSetup;
use App\CustomerContact;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;
use File;
use ZipArchive;
Use Response;
use Alert;
use App\StudentInformation;
class ContactController extends Controller
{
    public function __construct(){
          $this->middleware('auth');
    }

    

    public function customerMessage(){
        $messageList = CustomerContact::get();
        return view('contact.list', compact('messageList'));
    }


    public function vatSmart(){
        $logos = Logo::where('status', 1)->get();
        return view('vat_smart.index',compact('logos'));
    }

    public function create()
    {
        $contactSetups = ContactSetup::where('status', 1)->get();
        return view('contact.add', compact('contactSetups'));
    }

    public function store(Request $request)
    {
//        return $request->all();
        $contact = new Contact();
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->contact_setup_id = $request->contact_setup_id;
        $contact->save();
        return redirect()->back()->with('message', 'New Contact Create Successfully');

    }

    public function manageContact(){
        $contacts = Contact::with('getName')->get();
        return view('contact.manage',['contacts'=>$contacts]);
    }
    public function show(Contact $contact)
    {
        //
    }

    public function edit($id)
    {

        $contactSetups = ContactSetup::where('status', 1)->get();
        $contactById = Contact::findOrFail($id);
        //dump($contactById);
        return view('contact.edit',compact('contactSetups'),['contactById'=>$contactById]);
    }

    public function update(Request $request, Contact $contact)
    {
        $contact = Contact::find($request->id);
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->location = $request->location;
        $contact->contact_setup_id = $request->contact_setup_id;
        $contact->save();
        return redirect('manage_contact')->with('message', 'Update Contact successfully');
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('manage_contact')->with('message', 'Delete Successfully');
    }
    public function SendMessage(Request $request){
        try {
        $contact = new  CustomerContact();
        $contact->con_name = $request->con_name;
        $contact->email_address = $request->email_address;
        $contact->company_name = $request->company_name;
        $contact->phone_no = $request->phone_no;
        $contact->country = $request->country;
        $contact->message = $request->message;
        $contact->save();
        // Mail::to($request->email_address)->send(new CustomerMail($request));
        return back()->with('message', 'Message send successfully !'); 
        } catch (Exception $e) {
           return back()->with('message', 'Message send successfully !');   
        }
        
    }
    public function destroy()
    {

    }

    public function sendquestion(Request $request){
        $contact = new  CustomerContact();
        $contact->con_name = $request->_name;
        $contact->email_address = $request->_email;
        $contact->phone_no = $request->_mobile;
        $contact->country = $request->_country;
        $contact->message = $request->_message;
        $contact->status = 1;
        $contact->is_seen = 0;
        if($request->hasFile('resumefile')){
           $file = $request->file('resumefile');
           $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $fileName;
           $file->move('files/', $fileName);
           $contact->_file = $fileName ?? null;   
       }
        
        $contact->save();
        // Mail::to($request->email_address)->send(new CustomerMail($request));
       
        alert()->success('Success Message', 'Your Information is submit successfully. We will contact with you soon');
        return back()->with('message', 'Message send successfully !'); 
    } 


    public function getDownload($id)
        {
            //PDF file is stored under project/public/download/info.pdf
            $filename = CustomerContact::where('id',$id)->select('_file')->first();

            $file = public_path(). "/files/".$filename->_file;

            $headers = array(
                      'Content-Type: application/pdf',
                    );

            return Response::download($file, 'document.pdf', $headers);
        }

    public function cansubmitform(Request $request){
        $filelist = array();    
        
        if($request->hasFile('canfiles')){
           $file = $request->file('resumefile');
           for($i = 0;$i< count($file); $i++){
               $fileName =  $i.date('mdYHis') . uniqid().".". $file[$i]->getClientOriginalExtension();
               $nameWithBasePath = $fileName;
               $file[$i]->move('upload/', $fileName);
               array_push($filelist, $fileName);
           }
       }

        $data = array (
        'first_name'=>$request->_name,
        'email'=> $request->_email,
        'mobile'=> $request->_mobile,
        'nid'=> $request->_agerange,
        'feature_y$dataourself'=> $request->_canoccupation,
        'image'=> implode(',',$filelist),
        'Candidates_English_Listening'=> $request->can_eng_lan,
        'have_work_ex'=> $request->can_skill,
        'academic_background'=> $request->can_qualification,
        'status'=> $request->_cangostatus,
        'exam_status'=>2,
        );
        StudentInformation::insert($data);
        alert()->success('Success Message', 'Your Information is submit successfully. We will contact with you soon');
        return redirect()->back();
         
    }


    public function aussubmitform(Request $request){
        
        $filelist = array(); 
        if($request->hasFile('ausfiles')){
           $file = $request->file('ausfiles');
           for($i = 0;$i< count($file); $i++){
               $fileName =  $i.date('mdYHis') . uniqid().".". $file[$i]->getClientOriginalExtension();
               $nameWithBasePath = $fileName;
               $file[$i]->move('upload/', $fileName);
               array_push($filelist, $fileName);
               }
           }

         $data = array (
            'first_name'=>$request->_name,
            'email'=> $request->_email,
            'mobile'=> $request->_mobile,
            'nid'=> $request->_agerange,
            'feature_yourself'=> $request->_ausoccupation,
            'image'=> implode(',',$filelist),
            'Candidates_English_Listening'=> $request->aus_eng_lan,
            'have_work_ex'=> $request->_ausexpyear,
            'academic_background'=> $request->aus_qualification,
            'status'=> $request->_ausgostatus,
            'exam_status'=>1,
        );
        StudentInformation::insert($data);
        alert()->success('Success Message', 'Your Information is submit successfully. We will contact with you soon');
        return redirect()->back();
        
    }


    public function studentallfile($id){
        $filename = StudentInformation::where('id',$id)->select('image','first_name')->first();

        $newfile = explode(',', $filename->image);
        $zip = new ZipArchive;
   
        $fileName = $filename->first_name.'.zip';
   
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(public_path('upload'));
   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             
            $zip->close();
        }
    
        return response()->download(public_path($fileName));
        }
   
    

}
