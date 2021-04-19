@extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    @extends('admin/layouts/master')
@section('content')
    {{--Form start--}}

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create New Advertisement</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" action="{{route('add.store')}}" method="post" enctype="multipart/form-data" >            @csrf
            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type=file name="image" class="form-control"  required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <br>
                                    <input type="url" name="url" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <br>
                                    <input type="radio" name="status" value="Active" checked >ACTIVE
                                    <input type="radio" name="status" value="Inactive">INACTIVE
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

@endsection

{{--<div class="card card-primary">--}}
{{--    <div class="card-header">--}}
{{--        <h3 class="card-title">Create advertisement here</h3>--}}
{{--    </div>--}}
{{--    <!-- /.card-header -->--}}
{{--    <!-- form start -->--}}
{{--    --}}{{--        {{dd($categories)}}--}}
{{--    <form role="form" action="{{route('add.store')}}" method="post" enctype="multipart/form-data" >--}}
{{--        @csrf--}}


{{--        <div class="form-group">--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Image</label>--}}
{{--                <input type=file name="image" class="form-control"  required>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">URL</label>--}}
{{--                <br>--}}
{{--                <input type="url" name="url" >--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">Status</label>--}}
{{--                <br>--}}
{{--                <input type="radio" name="status" value="Active" checked >ACTIVE--}}
{{--                <input type="radio" name="status" value="Inactive">INACTIVE--}}
{{--            </div>--}}
{{--        </div>--}}



{{--        <!-- /.card-body -->--}}

{{--        <div class="card-footer">--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}