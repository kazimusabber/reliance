<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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
        return view('skills.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tech_title'=>'required',
            'work_percent'=>'required',
        ]);

        Skill::create([
            'tech_title' => $request->tech_title,
            'work_percent' => $request->work_percent,
            'status' => $request->status
        ]);
        return redirect()->back()->with('message', 'Skill Create Successfully');
    }

    public function manageSkill()
    {
        $skills = Skill::all();
        return view('skills.manage',['skills'=>$skills]);
    }

    public function show(Skill $skill)
    {
        //
    }

    public function edit(Skill $skill, $id)
    {
        $skillById = Skill::where('id', $id)->first();
        return view('skills.edit',['skillById'=>$skillById]);
    }

    public function deleteSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect('manage_skill')->with('message', 'Delete Successfully');
    }


    public function update(Request $request, Skill $skill)
    {
        $skill = Skill::find($request->id);
        $skill-> tech_title = $request->tech_title;
        $skill-> work_percent = $request->work_percent;
        $skill-> status = $request->status;
        $skill->save();
        return redirect('manage_skill')->with('message', 'Update Successfully');
    }

    public function destroy(Skill $skill)
    {
        //
    }
}
