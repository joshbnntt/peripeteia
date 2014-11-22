@extends('layout.main')

@section('content')
<div class="row">
   <div class="small-12 large-5 large-centered columns">
      <fieldset>
         <legend>Login</legend>
         {{ Form::open(array('action' => 'AuthController@validate')) }}
            @if($errors->first('email'))
               {{ Form::label('email', 'Email', array('class' => 'error')) }}
               {{ Form::email('Email', null, array('placeholder' => 'E.G. joe123', 'class' => 'error')) }}
               <small class="error">Invalid email</small>
            @else
               {{ Form::label('email', 'Email') }}
               {{ Form::email('email', null, array('placeholder' => 'E.G. jdbnc93@aol.com')) }}
            @endif

            @if($errors->first('password'))
               {{ Form::label('password', 'Password', array('class' => 'error')) }}
               {{ Form::password('password', array('class' => 'error')) }}
               <small class="error">Password is a required field</small>
            @else
               {{ Form::label('password', 'Password') }}
               {{ Form::password('password') }}
            @endif

            <div class="row">
               <div class="small-12 large-12 large-centered columns">
                  {{ Form::submit('Submit!', array('class' => 'button expand')) }}
               </div>
            </div>
         {{ Form::close() }}
      </fieldset>
   </div>
</div>
@stop