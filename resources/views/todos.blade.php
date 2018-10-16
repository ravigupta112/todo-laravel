@extends('layout')

@section('content')

<div class="row">

    <div class="col-lg-6 col-lg-offset-3">

        <form action="{{ url('/create/todo') }}" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo"/>
        </form>
    </div>

</div>

<hr>
@foreach($todos as $todo)
{{ $todo->todo }} <a href="{{ route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">x</a>

 <a href="{{ route('todo.update',['id'=>$todo->id])}}" class="btn btn-info btn-xs ">Update</a>
 
 @if($todo->completed == 0)
    <a href="{{ route('todo.complete',['id' => $todo->id]) }}" class="btn btn-success btn-xs"> Mark as completed </a>
    
 @else
 <span class="text-success" >Completed</span>
 @endif
<hr/>
@endforeach

@stop