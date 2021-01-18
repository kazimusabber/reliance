<?php

namespace App\Http\Controllers;

use App\About;
use App\Logo;
use App\Skill;
use App\Mission;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'topics'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);

        About::create([
            'topics' => $request->topics,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->to('add_about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    public function manageAbout()
    {
        $abouts = About::all();
        return view('about.manage',['abouts'=>$abouts]);
    }

    public function edit($id)
    {
        $aboutById = About::where('id', $id)->first();
        return view('about.edit',['aboutById'=>$aboutById]);
    }
    public function update(Request $request, About $about)
    {
        $about = About::find($request->id);
        $about-> topics = $request->topics;
        $about-> description = $request->description;
        $about-> status = $request->status;
        $about->save();
        return redirect('manage_about')->with('message', 'Update Successfully');

    }

    public function deleteAbout($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect('manage_about')->with('message', 'Delete Successfully');
    }

    public function destroy(About $about)
    {
        //
    }
}
