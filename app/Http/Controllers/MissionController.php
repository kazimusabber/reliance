<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
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
        return view('mission.add');
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
            'title'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);

//        dump($request->slider_img);


        Mission::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect()->to('add_mission');

    }

    public function manageMission()
    {
        $missions = Mission::all();
        return view('mission.manage',['missions'=>$missions]);
    }

    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission, $id)
    {
        $missionById = Mission::where('id', $id)->first();
        return view('mission.edit',['missionById'=>$missionById]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        $mission = Mission::find($request->id);
        $mission->title = $request->title;
        $mission->description = $request->description;
//        $slider-> slider_img = $request->slider_img;
        $mission->status = $request->status;
        $mission->save();
        return redirect('manage_mission')->with('message', 'Update Successfully');
    }

    public function deleteMission($id)
    {
        $mission = Mission::find($id);
        $mission->delete();
        return redirect('manage_mission')->with('message', 'Delete Successfully');
    }

    public function destroy(Mission $mission)
    {
        //
    }
}
