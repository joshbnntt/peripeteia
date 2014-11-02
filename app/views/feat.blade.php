@extends('layout')

@section('content')
<div class="row">
   <div class="large columns">
      <h1>My Feature</h1>
   </div>
</div>
<div class="row">
   {{Form::open() }}
      {{Form::label('username', 'Username:')}}
      {{Form::username('username')}}
   {{Form::close()}}
</div>
@stop