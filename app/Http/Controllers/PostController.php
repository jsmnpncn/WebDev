<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        $posts = DB::table('post')
        ->leftJoin('statuses', 'post.status', '=', 'statuses.id')
        ->select('post.*', 'statuses.display_name as status_display_name',
                'statuses.name as status_name')
        ->get();

        $statuses = DB::table('statuses')->get();

        return view('addPost', compact('posts', 'statuses'));
    }

    public function store(Request $request){
        Log::info("-----Start-----");
        Log::info("Title: " . $request->title);
        Log::info("Description: " . $request->description);

        $posts = DB::table('post')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => 1,
            'created_at' => now(),
            'status' => $request->status
        ]);

        return redirect('addPost');
    }

    public function editForm($id){
        $post = DB::table('post')->where('id', $id)->first();
        $statuses = DB::table('statuses')->get();

        $post = DB::table('post')->where('id', $id)->update([

        ]);

        return view('edit', compact('post', 'statuses'));
    }

    public function editSubmit(Request $request, $id){
        return redirect('post');
    
    }

    public function deletePost($id){
        DB::table('posts')
        ->where('id', $id)
        ->delete();
    }

    public function searchPosts(Request $request){
    $posts = DB::table('post')
    ->where('title', 'like', '%{$request->param}$')
    ->orWhere('description', 'like', '%{$request->param}$')
    ->get();
    $statuses = DB::table('statuses')->get();

    return view('posts', compact('posts', 'statuses'));
    }

}
