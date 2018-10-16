@extends('layout')

@section('content')

<div class="row">

    <div class="col-lg-12">

        <form action="{{ route('todo.save',['id'=>$todo->id]) }}" method="post">
            {{csrf_field()}}
            <input type="text" value="{{ $todo->todo }}" class="form-control input-lg" name="todo"/>
            <input type="hidden" name="id" value="{{$todo->id}}" /> 
            <input type="submit" class="btn btn-info" value="Update" />
        </form>
    </div>

</div>

@stop