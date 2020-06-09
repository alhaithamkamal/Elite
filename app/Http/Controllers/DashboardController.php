<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $user = Auth::user();
        if($slug === "instructor"){
            return view('dashboard.instructor.index');
        }
        else if ($slug === "parent"){
            $children = User::with('parent')->where('parent_id','=',$user->id)->get();
            return view('dashboard.parent.index', ['children' => $children]);
        }else if($slug === "student"){

        }else{
            Redirect::back();
        }
       
        
    }

    public function login($id){
        $user = User::where('id',$id)->first();
        
        Auth::login($user); // login user automatically
        return redirect('/');
    }
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Course $course)
    // {
    //     return view('posts.create', ['course' => $course->id]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(PostRequest $request, Course $course)
    // {
    //     $post = $course->posts()->create([
    //         'title' => $request->title,
    //         'description' =>  $request->description,
    //         'user_id' =>  $request->user()->id
    //     ]);
    //     $post->image = $request->file('image');
    //     $post->save();
    //     return redirect()->route('posts.show', ['course' => $course->id, 'post' => $post->id]);
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($course_id, Post $post)
    // {
    //     return view('posts.show', ['post' => $post, 'course' => $course_id]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Course $course, Post $post)
    // {
    //     return view('posts.edit', ['course' => $course->id, 'post' => $post]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(PostRequest $request, $course_id, Post $post)
    // {
    //     $attributes = [
    //             'title' => $request->title,
    //             'description' =>  $request->description,
    //         ];
    //     $post->update($attributes);
    //     if ($request->hasFile('image')){
    //         Storage::delete('public/'.$post->image);
    //         $post->image = $request->file('image');
    //         $post->save();
    //     }
    //     return redirect()->route('posts.show', ['course' => $course_id, 'post' => $post->id]);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($course_id, Post $post)
    // {
    //     if ($post->image) Storage::delete('public/'.$post->image);
    //     $post->delete();
    //     return redirect()->route('courses.show', $course_id);
    // }
}