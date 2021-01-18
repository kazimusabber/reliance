<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }

    public function index()
    {
        $logos = Logo::where('status', 1)->get();
        return compact('logos');
    }

    public function create()
    {
        return view('logo.add');
    }

    public function store(Request $request)
    {
//         return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'logo_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required'
        ]);

//        dump($request->slider_img);
        if($request->hasFile('logo_img')){
            $file = $request->file('logo_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Logo::create([
            'title' => $request->title,
            'description' => $request->description,
            'phone' => $request->phone,
            'email' => $request->email,
            'website' => $request->website,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'logo_img' => $nameWithBasePath,
            'status' => $request->status,
            'default_color' => $request->default_color ?? "#fff",
        ]);
        return redirect()->to('add_logo');
    }

    public function deleteLogo($id)
    {
        $logo = Logo::find($id);
        $logo->delete();
        return redirect('manage_logo')->with('message', 'Delete Successfully');
    }

    public function show(Logo $logo)
    {
        //
    }

    public function manageLogo()
    {
//        return view('logo.manage');
        $logos = Logo::all();
        return view('logo.manage',['logos'=>$logos]);
    }

    public function edit($id)
    {
        $logoById = Logo::where('id', $id)->first();
        return view('logo.edit',['logoById'=>$logoById]);
    }

    public function update(Request $request, Logo $logo)
    {
       // return dump($request->all());
      
       $this->validate($request,[
           'title'=>'required',
           'status' => 'required'
       ]);

      
       if($request->hasFile('logo_img')){
           $file = $request->file('logo_img');
           $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
           $nameWithBasePath = $fileName;
           $file->move('images/', $fileName);
           
       }


        $logo = Logo::find($request->id);
        $logo->title = $request->title;
        $logo->description = $request->description;
        $logo->phone = $request->phone;
        $logo->email = $request->email;
        $logo->website = $request->website;
        if($request->hasFile('logo_img')){
            $logo->logo_img = $fileName;
        }
        $logo->mobile = $request->mobile;
        $logo->status = $request->status;
        $logo->under_constraction = $request->under_constraction;
        $logo->under_constraction_text = $request->under_constraction_text ?? '';
        $logo->map_url = $request->map_url ?? '';
        $logo->default_color = $request->default_color ?? "#fff";
        $logo->store_id = $request->store_id ?? '';
        $logo->store_password = $request->store_password ?? '';
        $logo->ssl_script = $request->ssl_script ?? '';



        $logo->save();
        return redirect('manage_logo')->with('Update');
    }

    public function destroy(Logo $logo)
    {
        //
    }
}
