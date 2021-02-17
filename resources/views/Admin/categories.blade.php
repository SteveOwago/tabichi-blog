@extends('layouts.admin-layout')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <a href="{{ route('category.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Create Category</a>
            </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <input type="text" id="myInput" class="form-control form-control-sm" onkeyup="myFunction()" style="margin-bottom:5px;" placeholder="Search" title="Type in a name">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Articles Count</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->articles->count() }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['categories' => $cat->id] ) }}" class="btn btn-info btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        @if($cat->articles->count()>0)
                        <td>
                            <a href="#"  data-toggle="modal" data-target="#staticBackdrop" class="btn btn-warning btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                                                        <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h5 class="modal-title" id="staticBackdropLabel">Deletion Unsuccessful</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <p class="lead text-danger">The Category Has One or More Articles</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Understood</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        @else
                        <td>
                            <a href="#" data-toggle="modal" data-target="#staticBackdrop1"  class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                                                <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Delete Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <p class="lead text-danger">Delete <strong>{{$cat->name}}</strong></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href=" {{ route('category.destroy', ['categories' => $cat->id] ) }}"><button type="button" class="btn btn-danger">Delete Category</button></a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        @endif

                    </tr>
                @endforeach

            </tbody>
        </table>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
        });
    </script>
@endsection
