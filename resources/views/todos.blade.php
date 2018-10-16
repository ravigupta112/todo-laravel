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
{{ $todo->todo }}
<hr/>
@endforeach

@stop