@extends('layout.main')

@section('content')
    <div class="row">
        <div class="small-12 medium-7 large-centered columns">
        <h1>Sign In!</h1>
        @if (Session::has('errors'))
          <span class="error">Username or password incorrect.</span>
        @endif
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-7 large-centered columns">
            {{ Form::open(['route' => 'login_path']) }}
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Sign In', ['class' => 'button success radius']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop
