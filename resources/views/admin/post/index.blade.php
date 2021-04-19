@extends('admin/layouts/master')
@section('content')

    <section class="content">
        <div class="row">

            <div class="col-12">

                <a href="{{route('post.create')}}" class="btn btn-primary">Add new post</a>

                <div class="card">
                    @if (session()->has('success'))

                        <div class="btn btn-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Post Table</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Short_description</th>
{{--                                <th>description</th>--}}
                                <th>Published_date</th>
{{--                                <th>Is featured</th>--}}
{{--                                <th>Image</th>--}}
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)

                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->short_description}}</td>
{{--                                    <td>{{$post->description}}</td>--}}
                                    <td>{{$post->published_date}}</td>
{{--                                    <td>{{$post->is_featured}}</td>--}}
{{--                                    <td>{{$post->image}}</td>--}}
                                    <td>{{$post->status}}
                                    <th><a href="{{route('post.edit',$post->id)}}">Edit</a>
                                        <form action=" {{route('post.destroy',$post->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">

                                        </form>
                                    </th>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            {{--              another table start--}}
            {{--                another table end--}}
            <!-- /.col -->

            </div>
            <!-- /.row -->
            <script src="../../plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- DataTables -->
            <script src="../../plugins/datatables/jquery.dataTables.js"></script>
            <script src="../../plugins/datatables/dataTables.bootstrap4.js"></script>
            <!-- SlimScroll -->
            <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="../../plugins/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="../../dist/js/adminlte.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../../dist/js/demo.js"></script>
    </section>
@endsection