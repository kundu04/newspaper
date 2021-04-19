@extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Ad Information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" action="{{route('add.update',$adds->id)}}" method="post">

            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type=file name="image" class="form-control"  >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">URL</label>
                    <br>
                    <input type="url" name="url" value="{{$adds->url}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <br>
                    <input type="radio" name="status" value="Active" {{$adds->status=== 'Active' ?'checked':''}} >ACTIVE
                    <input type="radio" name="status" value="Inactive" {{$adds->status==='Inactive' ?'checked':''}}>INACTIVE
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

