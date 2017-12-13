@extends('layout')

@section('content')

<div class="container">
    <div class="well">
        <a class="btn btn-success" href="/task/edit/{{$to_do->id}}">Edit</a>
        <form method="POST" style="display:inline" action="/task/delete">
        <input type = "hidden" name="task_id" value="{{$to_do->id}}"/>
        <button type ="submit" class="btn btn-danger">Delete</button>
        </form>
        <a class="btn btn-default" href="/task">Back to List</a>
    </div>
    <table>
        <tr>
            <td>id</td>
            <td>: {{ $to_do->id }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>: {{ $to_do->Name }}</td>
        </tr>
            
    </table>
    </div>
@endsection
