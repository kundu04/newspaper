<?php

namespace App\Http\Controllers;

use App\Add;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['adds']=Add::all();
        return view('admin.add.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add=new Add();
        $image=$request->file('image');
        $image->move('images/post',$image->getClientOriginalName());
        $add->image='images/post/'.$image->getClientOriginalName();
        $add->slug=str::slug($request->image,'-');
        $add->url=$request->url;
        $add->status=$request->status;

        $add->save();
        session()->flash('success','add created successfully');
        return redirect(route('add.index'));
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
     */
    public function edit($id)
    {
        $data['adds']=Add::findOrFail($id);

        return view('admin.add.edit', $data);
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
        $add=Add::findOrFail($id);

        if($request->hasFile('image')) {
            if(file_exists(public_path($add->image)))
            {
                unlink(public_path($add->image));
            }
            $image = $request->file('image');
            $image->move('images/post', $image->getClientOriginalName());
            $add->image = 'images/post/' . $image->getClientOriginalName();
        }
        $add->url=$request->url;
        $add->status=$request->status;
        $add->slug=str::slug($request->image,'-');

        $add->save();
        session()->flash('success','add updated successfully');
        return redirect(route('add.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Add::findOrFail($id)->delete();
        session()->flash('success','add deleted successfully');
        return redirect(route('add.index'));
    }
}
