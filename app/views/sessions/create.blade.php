@extends('layout')

@section('content')
<div class="row">      
    <div class="large-8 large-centered columns">
    @if (Session::has('login_errors'))
      <span class="error">Username or password incorrect.</span>
    @endif
    </div>
</div>    
<div class="row">    
   {{Form::open(['route' => 'session.store']) }}
      <div class="large-4 large-centered columns">
         {{ Form::label('email', 'Email:') }}
         {{ Form::email('email') }}
      </div>
</div>      
<div class="row">      
      <div class="large-4 large-centered columns">
         {{ Form::label('password', 'Password:') }}
         {{ Form::password('password') }}
      </div>
</div>      
<div class="row">      
      <div class="large-4 large-centered columns">
           {{ Form::submit('Login', ['class' => 'small button']) }}
      </div>
   {{ Form::close() }}
</div>   
@stop