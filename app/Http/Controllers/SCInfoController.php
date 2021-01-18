<?php

namespace App\Http\Controllers;

use App\SCInfo;
use App\BackTitle;
use Illuminate\Http\Request;

class SCInfoController  extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    public function create()
    {
        return view('cs_infos.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'quantity'=>'required',
        ]);

        SCInfo::create([
            'title' => $request->title,
            'quantity' => $request->quantity,
            'add_plus' => $request->add_plus,
            'status' => $request->status
        ]);
        return redirect()->back()->with('message', 'Skill Create Successfully');
    }

    public function manageSCInfo()
    {
        $skills = SCInfo::all();
        return view('cs_infos.manage',['skills'=>$skills]);
    }

    public function show(Skill $skill)
    {
        //
    }

    public function edit( $id)
    {
        $skillById = SCInfo::where('id', $id)->first();
        return view('cs_infos.edit',['skillById'=>$skillById]);
    }

    public function deleteSCInfo($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('manage_info')->with('message', 'Delete Successfully');
    }


    public function update(Request $request)
    {
        $SCInfo = SCInfo::find($request->id);
        $SCInfo->title = $request->title;
        $SCInfo->quantity = $request->quantity;
        $SCInfo->add_plus = $request->add_plus;
        $SCInfo->status = $request->status;
        $SCInfo->save();
        return redirect('manage_info')->with('message', 'Update Successfully');
    }

    public function destroy(Skill $skill)
    {
        //
    }

    public function change_b_t(){
    	$b_t=BackTitle::first();
    	 return view('cs_infos.back_title',['b_t'=>$b_t]);
    }

    public function update_bt(Request $request){
    	$this->validate($request,[
           'title'=>'required',
           'status' => 'required'
       ]);

      
       if($request->hasFile('image')){
           $file = $request->file('image');
           $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $fileName;
           $file->move('images/', $fileName);
           
       }
       if($request->hasFile('instractor_image')){
           $file = $request->file('instractor_image');
           $instractor_image =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $instractor_image;
           $file->move('images/', $instractor_image);
           
       }

       




        $BackTitle = BackTitle::find($request->id);
        $BackTitle->title = $request->title;
        if($request->hasFile('image')){
        $BackTitle->image = $fileName;
        }
        if($request->hasFile('instractor_image')){
        $BackTitle->instractor_image = $instractor_image;
        }
        $BackTitle->status = $request->status;
        $BackTitle->instractor_title = $request->instractor_title;
        $BackTitle->special_text = $request->special_text ?? '';
        $BackTitle->instractor_details = $request->instractor_details;
        $BackTitle->save();
        return redirect()->back();
    }
}
