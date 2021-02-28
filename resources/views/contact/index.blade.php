@extends('layouts.admin-layout')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Guest User Messages</h1>
</div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

        <input type="text" id="myInput" class="form-control form-control-sm" onkeyup="myFunction()" style="margin-bottom:5px;" placeholder="Search" title="Type in a name">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sent On</th>
                 <th>Delete</th>
            </tr>
            </thead>
            <tbody id="myTable">
            @if($messages)
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->created_at }}</td>
                        <td>
                                        <a href="{{ route('contact.delete', ['message' => $message->id]) }}"
                                            class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                    </tr>
                @endforeach

            {{ $messages->links() }} 
            @endif
            @if(count($messages)< 1)
            <tr>
            <p class="lead"> No Messages Yet! </p>
            </tr>
            @endif
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