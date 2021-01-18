<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
        $infos = Menu::with('submenu')->orderBy('serial','asc')->get();
        return view('header_menu.index',compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $menus = Menu::get();
        return view('header_menu.add',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'main_menu'=>'required',
            'status'=>'required'
        ]);
        Menu::create([
            'main_menu' => $request->main_menu,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'menu_url' => $request->menu_url,
            'serial' => $request->serial
        ]);

        return redirect()->to('menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    public function edit($id)
    {
         $menus = Menu::get();
        $info = Menu::find($id);
        return view('header_menu.edit',compact('info','menus'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
            'main_menu'=>'required',
            'status'=>'required'
        ]);
        
        $menu = Menu::where('id',$request->id)->first();
        $menu->main_menu = $request->main_menu ?? '';
        $menu->parent_id = $request->parent_id ?? '';
        $menu->status = $request->status ?? '';
        $menu->menu_url = $request->menu_url ?? '/';
        $menu->serial = $request->serial ?? 0;
        $menu->save();
        return redirect('menu')->with('message', 'Delete Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('menu')->with('message', 'Delete Successfully');
    }
}
