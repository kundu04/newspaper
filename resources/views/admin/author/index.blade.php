@extends('admin/layouts/master')
@section('content')



    {{--   table start--}}
    <section class="content">
        <div class="row">

            <div class="col-12">

                <a href="{{route('author.create')}}" class="btn btn-primary">Add new Author</a>

                <div class="card">
                    @if (session()->has('success'))

                        <div class="btn btn-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Author Details</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Author id</th>
                                <th>Author name</th>
                                <th>Author Phone</th>
                                <th>Description</th>
                                <th>status</th>
                                <th>action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($authors as $author)

                                <tr>
                                    <td>{{$author->id}}</td>
                                    <td>{{$author->name}}</td>
                                    <td>{{$author->phone}}</td>
                                    <td>{{$author->description}}</td>
                                    <td>{{$author->status}}</td>
                                    <th><a href="{{route('author.edit',$author->id)}}">Edit</a>
                                        <form action=" {{route('author.destroy',$author->id)}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">

                                        </form>
                                    </th>
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

    {{--        table end--}}
@endsection