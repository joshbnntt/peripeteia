@extends('templates.main')

@section('page-title')
  <title>Search for People | Project Peri</title>
@endsection

@section('content')

@if( ! empty($allusers) )
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                   <th style="width: 25%">First Name</th>
                   <th style="width: 25%">Last Name</th>
                   <th style="width: 10%">Office</th>
                   <th style="width: 40%">Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($allusers as $value)
                   <tr>
                      <td>{{$value->first_name}}</td>
                      <td>{{$value->last_name}}</td>
                      <td>{{$value->office}}</td>
                      <td>{{$value->email}}</td>
                   </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@else
  <div class="col-md-10 col-md-offset-1">
    <div class="row">
      <p>No results match your search.</p>
    </div>
  </div>
@endif

@endsection