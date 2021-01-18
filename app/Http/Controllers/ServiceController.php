<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        return view('service.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'service_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required'
        ]);

//        dump($request->slider_img);
        if($request->hasFile('service_img')){
            $file = $request->file('service_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Service::create([
            'contenttype'=>$request->contenttype,
            'title' => $request->title,
            'description' => $request->description,
            'service_img' => $nameWithBasePath,
            'status' => $request->status
        ]);

        return redirect()->to('add_service');
    }

    public function show(Service $service)
    {
        //
    }

    public function manageService()
    {
        $services = Service::all();
        return view('service.manage',['services'=>$services]);
    }

    public function edit($id)
    {
        $serviceById = Service::where('id', $id)->first();
        return view('service.edit',['serviceById'=>$serviceById]);
    }
    public function update(Request $request, Service $service)
    {
        if($request->hasFile('service_img')){
            $file = $request->file('service_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }
        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->contenttype = $request->contenttype;
        $service->description = $request->description;
        if($request->hasFile('service_img')){
             $service->service_img = $fileName;
        }
        $service->status = $request->status;
        $service->save();
        return redirect('manage_service')->with('message', 'Update Successfully');
    }

    public function deleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('manage_service')->with('message', 'Delete Successfully');
    }

    public function destroy(Service $service)
    {
        //
    }
}
