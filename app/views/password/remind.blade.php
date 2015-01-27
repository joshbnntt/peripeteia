@extends('layout')
@section('content')
      <div class="row"> 
         {{Form::open() }}
         <div class="large-4 columns">
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
         </div>
      </div>     
      <div class="row">      
         <div class="large-4 columns">
              {{ Form::submit('Reset', ['class' => 'small button']) }}
         </div>
         {{ Form::close() }}
      </div>   
      <div class="row">
         <div class="large-4 columns">
            @if(Session::has('error'))
               <p><span class="error">{{ Session::get('error') }}</span></p>
            @elseif (Session::has('status'))
               <p>{{ Session::get('status') }}</p>
            @endif
         </div>
      </div>
@stop