<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Project;
use App\SoftwareSolution;
use Illuminate\Http\Request;

class SoftwareSolutionController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        $projects = Project::where('service_status', 1)->get();
        $logos = Logo::where('status', 1)->get();

        return view('software_solution.index',compact('projects', 'logos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(SoftwareSolution $softwareSolution)
    {
        //
    }

    public function edit(SoftwareSolution $softwareSolution)
    {
        //
    }

    public function update(Request $request, SoftwareSolution $softwareSolution)
    {
        //
    }

    public function destroy(SoftwareSolution $softwareSolution)
    {
        //
    }
}
