@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add Task</h1>
            @if($success)
            <div class="alert alert-success" role="alert">Success</div>
            @endif
            <form class='form' method='POST'>
                <div class="form-group">
                    <label for="name">Task</label>
                    <input type="text" class="form-control" id="task_name" name="task_name" placeholder="Task">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                </div>
                {{csrf_field()}}
            </form>
            <a class="btn btn-default" href="/task">Back to List</a>    
        </div>
    </div>
</div>
@endsection