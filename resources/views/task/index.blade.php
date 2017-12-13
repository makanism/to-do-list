@extends('layout')


@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="well">
                <a href="/task/add" class="btn btn-small btn-success">Add New</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>Nav</th>
                </tr>
                </thead>
                @foreach($to_do as $tasks)
                <tr>
                    <td>{{$tasks->id}}</td>
                    <td>{{$tasks->Name}}</td>
                    <td><a href="/task/details/{{$tasks->id}}" class="btn btn-default btn-xs">Details</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection