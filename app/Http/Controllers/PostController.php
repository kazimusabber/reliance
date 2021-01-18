<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{

    public function __construct(){
          $this->middleware('auth');
    }
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'post_type'=>'required',
            'description'=>'required',
            'post_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required',
        ]);

        if($request->hasFile('post_img')){
            $file = $request->file('post_img');
            $fileName =  date('mdYHis') . uniqid().".". $file->getClientOriginalExtension();
            $nameWithBasePath = $fileName;
            $file->move('images/', $fileName);
        }

        Post::create([
            'title' => $request->title,
            'post_type' => $request->post_type,
            'description' => $request->description,
            'post_img' => $nameWithBasePath,
            'status' => $request->status
        ]);

        return redirect()->to('add_post');

//        DB::table('posts')->UpdateOrCreate([
//            'title'=>$request->title,
//            'post_type'=>$request->post_type,
//            'description'=>$request->description,
//            'post_img'=>$nameWithBasePath,
//            'status'=>$request->status
//        ]);
//        return redirect()->back()->with('message', 'Post Create Successfully');
    }


    public function managePost(){
        $posts = Post::all();
        return view('posts.manage', ['posts'=>$posts]);
    }

    public function show(Post $post)
    {
        //
    }

    public function edit($id)
    {
        $postById = Post::where('id', $id)->first();
        return view('posts.edit',['postById'=>$postById]);
    }

    public function update(Request $request, Post $post, $id)
    {
//        return $request->all();
//        return $id;
        $post = Post::findOrFail($id);
        $post-> title = $request->title;
//        $post-> slider_img = $request->post_img;
        $post-> status = $request->status;
        $post->save();
        return redirect('manage_post')->with('message', 'Update Successfully');
    }

    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('manage_post')->with('message', 'Delete Successfully');
    }

    public function destroy(Post $post)
    {
        //
    }
}
