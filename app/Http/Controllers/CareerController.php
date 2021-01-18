<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use DB;

class CareerController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        return view('career.index');
    }

    public function create()
    {
        return view('career.add');
    }

    public function store(Request $request)
    {
        DB::table('careers')->insert([
            'job_title'=>$request->job_title,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('message', 'Career Create Successfully');
    }

    public function show(Career $career)
    {

    }

    public function edit(Career $career)
    {
        return view('career.edit');
    }

    public function update(Request $request, Career $career)
    {

    }

    public function destroy(Career $career)
    {

    }
}
