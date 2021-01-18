<?php

namespace App\Http\Controllers;

use App\ProjectSetup;
use Illuminate\Http\Request;

class ProjectSetupController extends Controller
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
        $projectSetups = ProjectSetup::where('status', 1)->get();
        return view('project_setup.add', compact('projectSetups'));
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'project_type'=>'required',
            'status'=>'required',
        ]);

        ProjectSetup::create([
            'project_type' => $request->project_type,
            'status' => $request->status
        ]);

        return redirect()->to('add_project_type');
    }

    public function show(ProjectSetup $projectSetup)
    {
        //
    }

    public function manageProjectSetup()
    {
        $projectSetups = ProjectSetup::all();
        return view('project_setup.manage',['projectSetups'=>$projectSetups]);
    }

    public function edit(ProjectSetup $projectSetup, $id)
    {
        $projectSetupById = ProjectSetup::where('id', $id)->first();
        return view('project_setup.edit',['projectSetupById'=>$projectSetupById]);
    }

    public function update(Request $request, ProjectSetup $projectSetup)
    {
//        return $request->all();
        $projectSetup = ProjectSetup::find($request->id);
        $projectSetup-> project_type = $request->project_type;
        $projectSetup-> status = $request->status;
        $projectSetup->save();
        return redirect('manage_project_type')->with('message', 'Update Successfully');
    }

    public function deleteProjectSetup($id)
    {
        $projectSetup = ProjectSetup::find($id);
        $projectSetup->delete();
        return redirect('manage_project_type')->with('message', 'Delete Successfully');
    }

    public function destroy(ProjectSetup $projectSetup)
    {
        //
    }
}
