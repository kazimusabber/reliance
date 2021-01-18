<?php

namespace App\Http\Controllers;

use App\TrainingCenter;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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
    	$centers = TrainingCenter::where('status',1)->get();
        return view('courses.add',compact('centers'));
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
            'center_id'=>'required',
            'short_description'=>'required',
            'status'=>'required',
            'image'=>'required',
        ]);

        if($request->hasFile('image')){
           $file = $request->file('image');
           $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $fileName;
           $file->move('images/', $fileName);
           
       }


        Course::create([
            'name' => $request->name,
            'center_id' => $request->center_id ?? null,
            'short_description' => $request->short_description ?? null,
            'details' => $request->details ?? null,
            'start_date' => $request->start_date ?? null,
            'end_date' => $request->end_date ?? null,
            'teacher_id' => $request->teacher_id ?? null,
            'image' => $fileName ?? null,
            'fee' => $request->fee ?? 0,
            'status' => $request->status
        ]);

        

        return redirect()->to('add_courses');

    }

    public function manageCourses()
    {
        $infos = Course::with('center')->get();
        return view('courses.manage',['infos'=>$infos]);
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
    	$centers = TrainingCenter::where('status',1)->get();
        $missionById = Course::where('id', $id)->first();
        return view('courses.edit',['missionById'=>$missionById,'centers'=>$centers]);
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
        $this->validate($request,[
            'name'=>'required',
            'center_id'=>'required',
            'short_description'=>'required',
            'status'=>'required'
        ]);
        if($request->hasFile('image')){
           $file = $request->file('image');
           $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $fileName;
           $file->move('images/', $fileName);
           
       }

        $Course = Course::find($request->id);
        $Course->name = $request->name ?? null;
        $Course->center_id = $request->center_id ?? null;
        $Course->short_description = $request->short_description ?? null;
        $Course->details = $request->details ?? null;
        $Course->start_date = $request->start_date ?? null;
        $Course->end_date = $request->end_date ?? null;
        $Course->teacher_id = $request->teacher_id ?? null;
        $Course->fee = $request->fee ?? null;
        $Course->status = $request->status;
        if($request->hasFile('image')){
             $Course->image = $fileName;
         }
        $Course->save();


        return redirect('manage_courses')->with('message', 'Update Successfully');
    }

    public function deleteCourses($id)
    {
        $mission = Course::find($id);
        $mission->delete();
        return redirect('manage_courses')->with('message', 'Delete Successfully');
    }

    public function destroy(Mission $mission)
    {
        //
    }
}
