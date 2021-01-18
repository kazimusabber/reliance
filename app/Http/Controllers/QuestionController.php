<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuestionOption;
use App\Question;
use Auth;
use DB;
class QuestionController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index(){
    	$infos = Question::with('question_options')->get();
    	return view('question.manage',compact('infos'));
    } 

    public function create(){
    	return view('question.add');
    }

    public function store(Request $request){
    	DB::beginTransaction();

	try {
    	$user_id = Auth::user()->id ?? '';
    	if($request->has('id')){
    		$questios = Question::where('id',$request->id)->first();
    	}else{
    		$questios = new Question();
    	}
    	
    	$questios->set_id = $request->set_id ?? '';
    	$questios->ques_ans = strip_tags($request->ques_ans ?? '');
    	$questios->question = strip_tags($request->question ?? '');
    	$questios->created_by = $user_id;
    	$questios->status = $request->status ?? 1;
    	$questios->save();

    	$question_id = $questios->id;
    	$que_serials = $request->que_serial ?? [];
    	$que_option = $request->que_option ?? [];
    	if($request->has('option_id')){
    		 $option_id=$request->option_id;
    		for ($i=0; $i <count($option_id) ; $i++) { 
    			
	    		$QuestionOption = QuestionOption::where('id',$option_id[$i])->first();
	    		$QuestionOption->question_id=$question_id;
	    		$QuestionOption->que_serial=$que_serials[$i];
	    		$QuestionOption->que_option=strip_tags($que_option[$i]);
	    		$QuestionOption->created_by=$user_id;
	    		$QuestionOption->save();

	    	}
    	}else{
    		for ($i=0; $i <count($que_serials) ; $i++) { 
	    		$QuestionOption = new QuestionOption();
	    		$QuestionOption->question_id=$question_id;
	    		$QuestionOption->que_serial=$que_serials[$i];
	    		$QuestionOption->que_option=strip_tags($que_option[$i]);
	    		$QuestionOption->created_by=$user_id;
	    		$QuestionOption->save();

	    	}
    	}

    	
    	DB::commit();
   		return redirect()->back()->with('success', 'Information Save Successfully');  
		} catch (\Exception $e) {
		    DB::rollback();
		   
		} 
    }

    public function edit($id){
    	$info = Question::with('question_options')->where('id',$id)->first();
    	return view('question.edit',compact('info'));

    }

    public function delete($id){
    	$Question = Question::find($id);
        $Question->delete();

        $QuestionOption = QuestionOption::where('question_id',$id)->delete();
       return redirect('question')->with('warning', 'Information Delete Successfully');  

    }
}
