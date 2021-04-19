@extends('admin/layouts/master')
@section('content')



{{--   table start--}}
<section class="content">
    <div class="row">

        <div class="col-12">

            <a href="{{route('category.create')}}" class="btn btn-primary">Add new category</a>

            <div class="card">
                @if (session()->has('success'))

                    <div class="btn btn-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">Category Table</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>category id</th>
                            <th>category name</th>
                            <th>status</th>
                            <th>action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)

                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td> 
                            <td>{{$category->status}}</td>
                            <td><a href="{{route('category.edit',$category->id)}}">Edit</a>
                                <form action=" {{route('category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?')">

                                </form>
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

{{--        table end--}}
@endsection