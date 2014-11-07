@extends('layout')

@section('content')
<div class="row">
   {{Form::open(['route' => 'session.store']) }}
      <div class="large-4 columns">
         {{Form::label('email', 'Email:')}}
         {{Form::email('email')}}
      </div>
</div>      
<div class="row">      
      <div class="large-4 columns">
         {{Form::label('password', 'Password:')}}
         {{Form::password('password')}}
      </div>
</div>      
<div class="row">      
      <div class="large-4 columns">
           {{Form::submit('Login', ['class' => 'small button'])}}
      </div>
   {{Form::close()}}
</div>   
@stop