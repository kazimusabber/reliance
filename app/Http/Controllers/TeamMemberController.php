<?php

namespace App\Http\Controllers;

use App\TeamMember;
use Illuminate\Http\Request;
use DB;

class TeamMemberController extends Controller
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
        return view('team_member.add');
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
            'name'=>'required',
            'designation'=>'required',
            'join_date'=>'required',
            'age'=>'required',
            'salary'=>'required',
            'experts'=>'required',
            'quotation'=>'required',
            'member_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

//        return $request->all();

        if($request->hasFile('member_img')){
            $file = $request->file('member_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        DB::table('team_members')->insert([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'join_date'=>$request->join_date,
            'age'=>$request->age,
            'salary'=>$request->salary,
            'experts'=>$request->experts,
            'quotation'=>$request->quotation,
            'member_img'=>$nameWithBasePath,
        ]);
        return redirect()->back()->with('message', 'Member Create Successfully');
}

    public function show(TeamMember $teamMember)
    {
        //
    }

    public function edit(TeamMember $teamMember)
    {
        return view('team_member.edit');
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        //
    }

    public function destroy(TeamMember $teamMember)
    {
        //
    }
}
