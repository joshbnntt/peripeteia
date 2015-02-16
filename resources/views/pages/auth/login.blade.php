@extends('templates.main')

@section('page-title')
    <title>Login to Peri | Project Peri</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="panel panel-info login-panel">
                    <div class="panel-heading">
                        <h4>Login to Project Peri</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if (Session::has('errors'))
                            <span class="error">Username or password incorrect.</span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email address</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="submit" class="btn btn-block btn-lg btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
