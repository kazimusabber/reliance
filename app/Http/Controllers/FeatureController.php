<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
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
        return view('feature.add');
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'feature_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description'=>'required',
            'status'=>'required'
        ]);

//        dump($request->slider_img);
        if($request->hasFile('feature_img')){
            $file = $request->file('feature_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Feature::create([
            'title' => $request->title,
            'feature_img' => $nameWithBasePath,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect()->to('add_feature');
    }

    public function manageFeature()
    {
        $features = Feature::all();
        return view('feature.manage',['features'=>$features]);
    }

    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature, $id)
    {
        $featureById = Feature::where('id', $id)->first();
        return view('feature.edit',['featureById'=>$featureById]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $feature = Feature::find($request->id);
        $feature->title = $request->title;
        if($request->hasFile('feature_img')){
            $file = $request->file('feature_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
            $feature->feature_img = $fileName;
        }
        $feature->description = $request->description;
        $feature->status = $request->status;
        $feature->save();
        return redirect('manage_feature')->with('message', 'Update Successfully');

    }

    public function deleteFeature($id)
    {
        $feature = Feature::find($id);
        $feature->delete();
        return redirect('manage_feature')->with('message', 'Delete Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
