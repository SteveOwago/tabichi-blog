@extends('layouts.admin-layout')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

        <!-- Content Row -->
        <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $articlesCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-poll-h fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Categories</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $catsCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                            <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $usersCount }}</div>
                            </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Messages</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $messagesCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-images fa-2x text-gray-300"></i>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
        </div>
        <div class="row">
            <div class="container justify-content-center">
            <div class="col-md-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
            </div>
            <div class="card border-left-warning shadow py-2">

            <div class="card-body">
            <div class="table-responsive">

                    <input type="text" id="myInput" class="form-control form-control-sm" onkeyup="myFunction()" style="margin-bottom:5px;" placeholder="Search" title="Type in a name">
                    <table class="table table-bordered table-stripped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Owner</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td><a href="{{ route('profile', ['user' => $article->owner->id, 'slug' => $article->owner->slug ]) }}">{{ $article->owner->name }}</a></td>
                                    <td>{{ $article->description }}</td>
                                    <td>
                                        <a href="{{ route('article.edit', ['article' => $article->id] ) }}" class="btn btn-info btn-circle">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('article.destroy', ['article' => $article->id] ) }}" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
            </div>
            </div>
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
