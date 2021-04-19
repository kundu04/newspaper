<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts']=Post::with('relAuthor','relCategory')->get();
//        dd($post);
//        $data['posts']=Post::all();
      return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories']=Category::where('status','Active')->get();
        $data_author['authors']=Author::where('status','Active')->get();


        return view('admin.post.create',$data,$data_author);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
       $post=new Post();
       $post->author_id=$request->author_id;
       $post->category_id=$request->category_id;
       $post->title=$request->title;
       $post->slug=str::slug($request->title,'-');
        $post->short_description=$request->short_description;
       $post->description=$request->description;
           $image=$request->file('image');
           $image->move('images/post',$image->getClientOriginalName());
       $post->image='images/post/'.$image->getClientOriginalName();
        if(isset($request->is_featured))
        {
            $post->is_featured= $request->featured;
        }
       $post->published_date=$request->published_date;
       $post->status=$request->status;

       $post->save();
       session()->flash('success','post created successfully');
       return redirect(route('post.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *         $data['category']=Category::findOrFail($id);

     */
    public function edit($id)
    {
        $data['post']=Post::findOrFail($id);
        $data['categories']=Category::where('status','Active')->get();
        $data['authors']=Author::where('status','Active')->get();
//       return view('admin.post.edit',$data,$data_category,$data_author);
        return view('admin.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::findorFail($id);
        $post->author_id=$request->author_id;
        $post->category_id=$request->category_id;
        $post->title=$request->title;
        $post->slug=str::slug($request->title,'-');
        $post->short_description=$request->short_description;
        $post->description=$request->description;

        if($request->hasFile('image')) {
            if(file_exists(public_path($post->image)))
            {
                unlink(public_path($post->image));
            }
            $image = $request->file('image');
            $image->move('images/post', $image->getClientOriginalName());
            $post->image = 'images/post/' . $image->getClientOriginalName();
        }


        if(!isset($request->featured))
        {
            $post->is_featured= 'No';
        }else{
            $post->is_featured= $request->featured;
        }
        $post->published_date=$request->published_date;
        $post->status=$request->status;
        $post->breaking_news=$request->breaking_news;


        $post->save();
        session()->flash('success','post updated successfully');
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        session()->flash('success','post deleted successfully');
        return redirect(route('post.index'));


    }
}
