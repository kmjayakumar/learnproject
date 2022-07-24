<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;


class PostController extends Controller
{
    public function addPost()
    {
        return view('Post.addPost');
    }

    public function savePost(Request $request)
    {
        DB::table('posts')->insert(['name'=>$request->name, 'age'=>$request->age,'gender'=>$request->gender, 'address'=> $request->address, 'phone' => $request->phone]);
        return redirect()->back()->with('get', 'geee');
        

    }

    public function viewPost()
    {
        $posts = DB::table('posts')->get();
        return view('Post.viewPost', compact('posts'));
    }

    public function editPost($id)
    {
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('Post.editPost', compact('posts'));

    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update(['name'=>$request->name, 'age'=>$request->age,'gender'=>$request->gender, 'address'=> $request->address, 'phone' => $request->phone]);
        return redirect()->back()->with('get', 'geee');
    }

    public function deletePost($id)
    {
        $posts = DB::table('posts')->where('id',$id)->delete();
        return redirect()->back()->with('delete');
    }

    /*search*/
    /*public function search(Request $request)
    {
        if($request->has('post_search'))
        {
            //$posts = Post::search($request->post_search)->paginate(7);
            $posts = DB::table('posts')->search($request->post_search);
        }
        else
        {
            //$posts = Post::paginate(7);
            $posts = DB::table('posts')->get();
        }
        return view('welcome', compact('posts'));
    }
    public function fullTextSearch(Request $request)
    {
        $this->validate($request,['product_name'=>'required']);
        $posts = Posts::create($request->all());
        return back();
    }*/

    //
}
