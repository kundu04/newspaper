@extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Post here</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
{{--        {{dd($post)}}--}}
        <form role="form" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="card-body">
                <div class="form-group">

                <label for="exampleInputEmail1">Category</label>
                <select name="category_id" id="category" >


                    <option value="category" >Select Category </option>
{{--                    @foreach($categories as $category)--}}
{{--                        <option {{$post->category_id === $category->id?'selected':''}} value="{{$category->id}}" >{{$category->name}}</option>--}}
{{--                    @endforeach--}}
                    <option {{$post->category_id === $post->relCategory->id?'selected':''}} value="{{$post->relCategory->id}}" >{{$post->relCategory->name}}</option>

                </select>
            </div>
            <div class="form-group" >

            <label for="exampleInputEmail1">Author</label>
            <select name="author_id" id="author" >


                <option value="author" >Select Author </option>
{{--                @foreach($authors as $author)--}}
{{--                    <option {{$post->author_id === $author->id?'selected':''}} value="{{$author->id}}" >{{$author->name}}</option>--}}
{{--                @endforeach--}}
                <option {{$post->author_id === $post->relAuthor->id?'selected':''}} value="{{$post->relAuthor->id}}" >{{$post->relAuthor->name}}</option>
            </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Enter title here" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Short_description</label>
        <input type="text" name="short_description" value="{{$post->short_description}}" class="form-control" placeholder="write Short description here" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea name="description"  id="textarea" cols="300" rows="10" placeholder="write description here">{{$post->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Published_date</label>
        <input type=date name="published_date" value="{{$post->published_date}}" class="form-control"  required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type=file name="image" class="form-control"  >
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Featured</label>
        <br>
        <input type="radio" name="featured" value="Yes"  {{$post->is_featured==='Yes' ?'checked':''}} >YES
        <input type="radio" name="featured" value="No" {{$post->is_featured==='No' ?'checked':''}}>NO
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <br>
        <input type="radio" name="status" value="published" {{$post->status=== 'published' ?'checked':''}} >PUBLISHED
        <input type="radio" name="status" value="unpublished" {{$post->status==='unpublished' ?'checked':''}}>UNPUBLISHED
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Breaking News</label>
        <br>
        <input type="radio" name="breaking_news" value="yes" {{$post->breaking_news=== 'yes' ?'checked':''}} >Yes
        <input type="radio" name="breaking_news" value="no" {{$post->breaking_news==='no' ?'checked':''}}>No
    </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update Post</button>
    </div>
    </form>
    </div>
    Form end
@endsection

