@extends('layout')
@section('content')
      {{Form::open(['route' => 'session.store']) }}
      <div class="large-4 columns">
         {{ Form::label('email', 'Email:') }}
         {{ Form::email('email') }}
      </div>
      </div>      
      <div class="row">      
         <div class="large-4 columns">
            {{ $errors->first('password') }}
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
         </div>
      </div>      
      <div class="row">      
         <div class="large-4 columns">
              {{ Form::submit('Login', ['class' => 'small button']) }}
         </div>
         {{ Form::close() }}
      </div>   
      <div class="row">
         <div class="large-4 columns">
            @if(Session::has('errors'))
               <p class="error">{{ Session::get('error') }}</p>
            @elseif (Session::has('status'))
               <p>{{ Session::get('status') }}</p>
            @endif
         </div>
      </div>
@stop