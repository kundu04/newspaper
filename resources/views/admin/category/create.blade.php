@extends('admin/layouts/master')
@section('content')
{{--Form start--}}

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form role="form" action="{{route('category.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <br>
                <input type="radio" name="status" value="active" checked >Active
                <input type="radio" name="status" value="inactive">Inactive
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
{{--    Form end--}}
@endsection
