<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectSetup;
use App\ProjectFeature;
use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        return view('project.index');
    }

    public function create()
    {
        $projectSetups = ProjectSetup::where('status',1)->get();
        return view('project.add', compact('projectSetups'));
    }

    public function save(Request $request){
//        return $request->all();
        Project::created($request->all());

    }


    public function projectFeature(){
        $projectSetups = Project::where('service_status',1)->get();
        return view('project.feature.index',compact('projectSetups'));
    }
     public function projectFeatureSave(Request $request){
        //return $request->all();
        ProjectFeature::create($request->all());
        return redirect()->back();
    }
    public function projectFeatureUpdate(Request $request){
        $ProjectFeature = ProjectFeature::findOrFail($request->id);
        $ProjectFeature->project_id = $request->project_id;
        $ProjectFeature->feature= $request->feature;
        $ProjectFeature->serial = $request->serial;
        $ProjectFeature->status = $request->status;
        $ProjectFeature->save();
        return redirect('product-feature-list');
    }
    public function projectFeatureList(){
        $rows=ProjectFeature::with('ProjectName')->get();
        return view('project.feature.list',compact('rows'));
    }

    public function editFeature($id){
        $row = ProjectFeature::findOrFail($id);
        $projectSetups = Project::where('status',1)->get();
        return view('project.feature.edit',compact('row','projectSetups'));

    }

    public function store(Request $request)
    {
//        return $request->all();
//        $this->validate($request,[
//            'project_name'=>'required',
//            'project_type'=>'required',
//            'description'=>'required',
//            'project_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
//            'status'=>'required',
//        ]);
//
        if($request->hasFile('project_img')){
            $file = $request->file('project_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Project::create([
            'project_name' => $request->project_name,
            'description' => $request->description,
            'project_img' => $nameWithBasePath ?? '',
            'service_status' => $request->service_status,
            'project_setup_id' => $request->project_setup_id
        ]);

        return redirect()->to('add_project');


        Project::created($request->all());


    }

    public function show(Project $project)
    {
        $project = Project::all();
        return view('posts.manage', ['project'=>$project]);
    }

    public function manageProject(){
       $projects = Project::with('getName')->get();
//        $projects = Project::all();
        return view('project.manage',['projects'=>$projects]);
    }

    public function edit(Project $project, $id)
    {
        $projectSetups = ProjectSetup::where('status', 1)->get();
        $projectById = Project::findOrFail($id);
        return view('project.edit',compact('projectSetups'),['projectById'=>$projectById]);
    }

    public function update(Request $request, Project $project)
    {
        $project = Project::findOrFail($request->id);
        $project->project_name = $request->project_name;
        $project->description= $request->description;
//        $project-> slider_img = $request->post_img;
        $project->service_status = $request->service_status;
        $project->project_setup_id = $request->project_setup_id;
        $project->save();
        return redirect('manage_project')->with('message', 'Update Successfully');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('manage_project')->with('message', 'Delete Successfully');
    }

    public function destroy(Project $project)
    {
        //
    }
}
