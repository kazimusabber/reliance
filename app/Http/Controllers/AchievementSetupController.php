<?php

namespace App\Http\Controllers;

use App\AchievementSetup;
use Illuminate\Http\Request;

class AchievementSetupController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {

    }

    public function create()
    {
        return view('achievement_setup.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'achievement_type'=>'required',
            'status'=>'required'
        ]);

        AchievementSetup::create([
            'achievement_type' => $request->achievement_type,
            'status' => $request->status,
        ]);

        return redirect()->to('add_achievement_setup');
    }

     public function show(AchievementSetup $achievementSetup)
    {
        //
    }

    public function manageAchievementSetup()
    {
        $achievementSetups = AchievementSetup::all();
        return view('achievement_setup.manage',['achievementSetups'=>$achievementSetups]);
    }

    public function edit($id)
    {
        $achievementSetupById = AchievementSetup::where('id', $id)->first();
        return view('achievement_setup.edit',['achievementSetupById'=>$achievementSetupById]);
    }

    public function update(Request $request, AchievementSetup $achievementSetup)
    {
        $achievementSetup = AchievementSetup::find($request->id);
        $achievementSetup-> achievement_type = $request->achievement_type;
        $achievementSetup-> status = $request->status;
        $achievementSetup->save();
        return redirect('manage_achievement_setup')->with('message', 'Update Successfully');

    }

    public function deleteAchievementSetup($id)
    {
        $achievementSetup = AchievementSetup::find($id);
        $achievementSetup->delete();
        return redirect('manage_achievement_setup')->with('message', 'Delete Successfully');
    }

    public function destroy(AchievementSetup $achievementSetup)
    {
        //
    }
}
