<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\AchievementSetup;
use Illuminate\Http\Request;

class AchievementController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
//        return view('achievement.add', compact('achievementSetups'));
    }

    public function create()
    {
        $achievementSetups = AchievementSetup::where('status', 1)->get();
        return view('achievement.add', compact('achievementSetups'));
    }

    public function store(Request $request)
    {
//        return $request->all();
        $this->validate($request,[
//            'achievement'=>'required',
            'description'=>'required',
            'status'=>'required',
            'achievement_setup_id'=>'required'
        ]);

        Achievement::create([
//            'achievement' => $request->achievement,
            'description' => $request->description,
            'status' => $request->status,
            'achievement_setup_id' => $request->achievement_setup_id,
        ]);

        return redirect()->to('add_achievement');
    }

    public function show(Achievement $achievement)
    {
        //
    }

    public function manageAchievement()
    {
        $achievements = Achievement::with('getName')->get();
        return view('achievement.manage',['achievements'=>$achievements]);
    }

    public function edit(Achievement $achievement, $id)
    {
        $achievementSetups = AchievementSetup::where('status', 1)->get();
        $achievementById = Achievement::findOrFail($id);
        return view('achievement.edit',compact('achievementSetups'),['achievementById'=>$achievementById]);
    }

    public function update(Request $request, Achievement $achievement)
    {
        $achievement = Achievement::find($request->id);
        $achievement-> achievement_type = $request->achievement_type;
        $achievement-> status = $request->status;
        $achievement->save();
        return redirect('manage_achievement')->with('message', 'Update Successfully');
    }

    public function deleteAchievement($id)
    {
        $achievement = Achievement::find($id);
        $achievement->delete();
        return redirect('manage_achievement')->with('message', 'Delete Successfully');
    }

    public function destroy(Achievement $achievement)
    {
        //
    }
}
