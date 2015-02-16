@extends('templates.main')

@section('page-title')
  <title>Create an Outline | Project Peri</title>
@endsection

@section('content')

@if (Session::has('errors'))
  <span class="error">
    Oops! Almost. Fix these:
    <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
  </span>
@endif
<form action="courseoutline/store" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="row">
    <div class="col-md-5 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">General Information</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="course_name">Course Name</label>
            <input placeholder="E.G. Life of David" name="course_name" type="text" class="form-control" id="course_name">
          </div>
          <div class="form-group">
            <label for="credit_hours">Credit Hours</label>
            <input placeholder="E.G. 3" name="credit_hours" type="text" class="form-control" id="credit_hours">
          </div>
          <div class="form-group">
            <label for="instructor">Instructor</label>
            <input placeholder="E.G. Mr. Stew Foster" name="instructor_name" type="text" class="form-control" id="instructor_name">
          </div>
          <div class="form-group">
            <label for="office_location">Office Location</label>
            <input placeholder="E.G. AC 501" name="office_location" type="text" class="form-control" id="office_location">
          </div>
          <div class="form-group">
            <label for="office_hours">Office Hours</label>
            <input placeholder="E.G. Th. II" name="office_hours" type="text" class="form-control" id="office_hours">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input placeholder="E.G. sfoster@faculty.pcci.edu" name="email" type="text" class="form-control" id="email">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Course Information</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="course_description">Course Description</label>
            <textarea placeholder="Give the catalog description of the course here" name="course_description" class="form-control" cols="50" rows="10" id="course_description"></textarea>
          </div>

          <div class="form-group">
            <label for="course_prerequisites">Prerequisites</label>
            <input placeholder="E.G. None" name="course_prerequisites" type="text" class="form-control" id="course_prerequisites">
          </div>

          <div class="form-group">
            <label for="course_texts">Required Texts</label>
            <input placeholder="E.G. The Bible..." name="course_texts" type="text" class="form-control" id="course_texts">
          </div>

          <div class="form-group">
            <label for="course_outcomes">Learning Outcomes</label>
            <textarea placeholder="Upon completing this course, students will be able to... Please remember, learning outcomes should reflect course and program outcomes." name="course_outcomes" class="form-control" cols="50" rows="10" id="course_outcomes"></textarea>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <input class="btn btn-lg btn-success" type="submit" value="Submit!">
    </div>
  </div>
</form>

@endsection

@section('extra-js')

@stop