@extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Post here</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
{{--        {{dd($categories)}}--}}
        <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="form-group" ">

                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" id="category" >


                        <option value="category" >Select Category </option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group" ">

            <label for="exampleInputEmail1">Author</label>
            <select name="author_id" id="author" >


                    <option value="author" >Select Author </option>
                @foreach($authors as $author)
                    <option value="{{$author->id}}" >{{$author->name}}</option>
                @endforeach
            </select>
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title here" required>
{{--                </div>  <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Slug</label>--}}
{{--                    <input type="text" name="slug" class="form-control" placeholder="Enter slug here" >--}}
{{--                </div>--}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Short_description</label>
                    <input type="text" name="short_description" class="form-control" placeholder="write Short description here" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" id="textarea" cols="300" rows="10" placeholder="write description here"></textarea>
                </div>
    
                <div class="form-group">
                    <label for="exampleInputEmail1">Published_date</label>
                    <input type=date name="published_date" class="form-control"  required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type=file name="image" class="form-control"  required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Featured</label>
                    <br>
                    <input type="radio" name="featured" value="Yes"  >YES
                    <input type="radio" name="featured" value="No" checked>NO
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <br>
                    <input type="radio" name="status" value="published" checked >PUBLISHED
                    <input type="radio" name="status" value="unpublished">UNPUBLISHED
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Breaking News</label>
                    <br>
                    <input type="radio" name="breaking_news" value="yes"  >Yes
                    <input type="radio" name="breaking_news" value="no" checked>No
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
{{--        Form end--}}
@endsection

