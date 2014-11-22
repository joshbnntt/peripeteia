@extends('layout')

@section('content')
<div class="row">
@if (Session::has('login_errors'))
  <span class="error">Username or password incorrect.</span>
@endif
   {{Form::open() }}
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="large-4 columns">
         {{ Form::label('email', 'Email:') }}
         {{ Form::email('email') }}
      </div>
</div>      
<div class="row">      
      <div class="large-4 columns">
         {{ Form::label('password', 'Password:') }}
         {{ Form::password('password') }}
      </div>
</div>      
<div class="row">      
      <div class="large-4 columns">
         {{ Form::label('password_confirmation', 'Password Confirmation:') }}
         {{ Form::password('password_confirmation') }}
      </div>
</div> 
<div class="row">      
      <div class="large-4 columns">
           {{ Form::submit('Submit', ['class' => 'small button']) }}
      </div>
   {{ Form::close() }}
</div> 
<div class="row">
   <div class="large-4 columns">
      @if(Session::has('error'))
         <p><span class="error">{{ Session::get('error') }}</span></p>
      @endif
   </div>
</div>  
@stop