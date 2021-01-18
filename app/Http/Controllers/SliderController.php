<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
        return view('slider.add');
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'slider_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required'
        ]);

//        dump($request->slider_img);
        if($request->hasFile('slider_img')){
            $file = $request->file('slider_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'slider_img' => $fileName,
            'status' => $request->status
        ]);

        return redirect()->to('add_slider');
    }

    public function show(Slider $slider)
    {
        //
    }

    public function manageSlider()
    {
       $sliders = Slider::all();
       return view('slider.manage',['sliders'=>$sliders]);
    }

    public function edit($id)
    {
        $sliderById = Slider::where('id', $id)->first();
        return view('slider.edit',['sliderById'=>$sliderById]);
    }

    public function update(Request $request, Slider $slider)
    {
      
        $slider = Slider::find($request->id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        if($request->hasFile('slider_img')){
           
            $file = $request->file('slider_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
            $slider->slider_img = $fileName;
        }
        $slider->status = $request->status;
        $slider->save();
        return redirect('manage_slider')->with('message', 'Update Successfully');
    }

    public function deleteSlider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect('manage_slider')->with('message', 'Delete Successfully');
    }

    public function destroy(Slider $slider)
    {
        //
    }
}
