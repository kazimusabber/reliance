<?php

namespace App\Http\Controllers;

use App\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('center.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'status'=>'required'
        ]);

//        dump($request->slider_img);


        TrainingCenter::create([
            'name' => $request->name,
            'address' => $request->address ?? null,
            'mobile' => $request->mobile ?? null,
            'sender_mail' => $request->sender_mail ?? null,
            'mail_subject' => $request->mail_subject ?? null,
            'mail_content' => $request->mail_content ?? null,
            'exam_mail_body' => $request->exam_mail_body ?? null,
            'mail_footer' => $request->mail_footer ?? null,
            'status' => $request->status
        ]);


        return redirect()->to('add_center');

    }

    public function managecenter()
    {
        $infos = TrainingCenter::all();
        return view('center.manage',['infos'=>$infos]);
    }

    public function show( $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $missionById = TrainingCenter::where('id', $id)->first();
        return view('center.edit',['missionById'=>$missionById]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $mission = TrainingCenter::find($request->id);
        $mission->name = $request->name ?? null;
        $mission->address = $request->address ?? null;
        $mission->mobile = $request->mobile ?? null;
        $mission->sender_mail = $request->sender_mail ?? null;
        $mission->mail_content = $request->mail_content ?? null;
        $mission->exam_mail_body = $request->exam_mail_body ?? null;
        $mission->mail_footer = $request->mail_footer ?? null;
        $mission->mail_subject = $request->mail_subject ?? null;
        $mission->status = $request->status;
        $mission->save();
        return redirect('manage_center')->with('message', 'Update Successfully');
    }

    public function deletecenter($id)
    {
        $mission = TrainingCenter::find($id);
        $mission->delete();
        return redirect('manage_center')->with('message', 'Delete Successfully');
    }

    public function destroy(Mission $mission)
    {
        //
    }
}
