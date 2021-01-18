<?php

namespace App\Http\Controllers;

use App\ContactSetup;
use Illuminate\Http\Request;

class ContactSetupController extends Controller
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

    }

    public function create()
    {
        return view('contact_setup.add');
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'office_title'=>'required',
            'status'=>'required'
        ]);

        ContactSetup::create([
            'office_title' => $request->office_title,
            'status' => $request->status,
        ]);

        return redirect()->to('add_contact_setup');
    }

    public function show(ContactSetup $contactSetup)
    {
        //
    }

    public function manageContactSetup()
    {
        $contactSetups = ContactSetup::all();
        return view('contact_setup.manage',['contactSetups'=>$contactSetups]);
    }

    public function edit(ContactSetup $contactSetup, $id)
    {
        $contactSetupById = ContactSetup::where('id', $id)->first();
        return view('contact_setup.edit',['contactSetupById'=>$contactSetupById]);

    }


    public function update(Request $request, ContactSetup $contactSetup)
    {
        $contactSetup = ContactSetup::find($request->id);
        $contactSetup-> office_title = $request->office_title;
        $contactSetup-> status = $request->status;
        $contactSetup->save();
        return redirect('manage_contact_setup')->with('message', 'Update Successfully');

    }
    public function deleteContactSetup($id)
    {
        $contactSetup = ContactSetup::find($id);
        $contactSetup->delete();
        return redirect('manage_contact_setup')->with('message', 'Delete Successfully');
    }
    public function destroy(ContactSetup $contactSetup)
    {
        //
    }
}
