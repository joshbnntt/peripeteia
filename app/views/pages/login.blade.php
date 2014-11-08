@extends('layout.main')

@section('content')
<div class="row">
   <div class="small-12 large-5 large-centered columns">
      <fieldset>
         <legend>Login</legend>
         {{ Form::open(array('action' => 'AuthController@validate')) }}
            @if($errors->first('username'))
               {{ Form::label('username', 'Username', array('class' => 'error')) }}
               {{ Form::text('username', null, array('placeholder' => 'E.G. joe123', 'class' => 'error')) }}
               <small class="error">Invalid username</small>
            @else
               {{ Form::label('username', 'Username') }}
               {{ Form::text('username', null, array('placeholder' => 'E.G. joe123')) }}
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