<?php

namespace App\Http\Controllers;

use App\ClientLogo;
use Illuminate\Http\Request;

class ClientLogoController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        $client_logos = ClientLogo::where('status', 1)->get();
        return compact('client_logos');
    }

    public function create()
    {
        return view('client-logo.add');
    }

    public function store(Request $request)
    {
        ///         return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'client_logo_img'=>'required',
            'status' => 'required'
        ]);

//        dump($request->slider_img);
        if($request->hasFile('client_logo_img')){
            $file = $request->file('client_logo_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        ClientLogo::create([
            'title' => $request->title,
            'client_logo_img' => $fileName,
            'status' => $request->status,
            'details' => $request->details,
            'client_name' => $request->client_name,
            'designation' => $request->designation
        ]);
        return redirect()->to('add_client-logo');
    }

    public function show(ClientLogo $clientLogo)
    {
        //
    }

    public function deleteClientLogo($id)
    {
        $client_logo = ClientLogo::find($id);
        $client_logo->delete();
        return redirect('manage_client-logo')->with('message', 'Delete Successfully');
    }

    public function manageClientLogo()
    {
//        return view('logo.manage');
        $client_logos = ClientLogo::all();
        return view('client-logo.manage',['client_logos'=>$client_logos]);
    }

    public function edit($id)
    {
        $client_logoById = ClientLogo::where('id', $id)->first();
        return view('client-logo.edit',['client_logoById'=>$client_logoById]);
    }

    public function update(Request $request)
    {

        
         if($request->hasFile('client_logo_img')){
            $file = $request->file('client_logo_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        $clients = ClientLogo::find($request->id);
        $clients->title= $request->title;
         if($request->hasFile('client_logo_img')){
            $clients->client_logo_img= $fileName;
        }
        $clients->status= $request->status;
        $clients->details= $request->details;
        $clients->client_name= $request->client_name;
        $clients->designation= $request->designation;
        $clients->save();
        return redirect()->to('manage_client-logo');
    }

    public function destroy(ClientLogo $clientLogo)
    {
        //
    }
  
}
