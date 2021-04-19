@extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Author Information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" action="{{route('author.update',$author->id)}}" method="post">

            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Author Name</label>
                    <input type="text" name="name" value="{{$author->name}}" class="form-control" placeholder="Enter Author name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Author Phone</label>
                    <input type="text" name="phone" value="{{$author->phone}}" class="form-control" placeholder="Enter phone number" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" value="{{$author->description}}" class="form-control" placeholder="Enter description" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <br>
                    <input type="radio" name="status" value="active" @if('$author->status==Active') checked  @endif >Active
                    <input type="radio" name="status" value="inactive" @if('$author->status==Inactive') checked  @endif>Inactive
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    {{--    Form end--}}
@endsection
