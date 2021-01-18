<?php

namespace App\Http\Controllers;

use App\Logo;
use App\Project;
use App\WebSolution;
use Illuminate\Http\Request;

class WebSolutionController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        $logos = Logo::where('status', 1)->get();
        $projects = Project::where('service_status', 1)->with('Feature')->get();



        return view('web_solution.index', compact('logos', 'projects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(WebSolution $webSolution)
    {
        //
    }

    public function edit(WebSolution $webSolution)
    {
        //
    }

    public function update(Request $request, WebSolution $webSolution)
    {
        //
    }

    public function destroy(WebSolution $webSolution)
    {
        //
    }
}
