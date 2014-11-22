@extends('layout.main')

@section('content')
{{ Form::open(array('action' => 'CourseOutlineController@store')) }}
   <div class="row">
      <div class="small-12 large-6 columns">
         <fieldset>
            <legend>General Information</legend>
               {{ Form::label('course_name', 'Course Name') }}
               {{ Form::text('course_name', null, array('placeholder' => 'E.G. Life of David')) }}

               {{ Form::label('credit_hours', 'Credit Hours') }}
               {{ Form::text('credit_hours', null, array('placeholder' => 'E.G. 3')) }}

               {{ Form::label('instructor_name', 'Instructor') }}
               {{ Form::text('instructor_name', null, array('placeholder' => 'E.G. Mr. Stew Foster')) }}

               {{ Form::label('office_location', 'Office Location') }}
               {{ Form::text('office_location', null, array('placeholder' => 'E.G. AC 501')) }}

               {{ Form::label('office_hours', 'Office Hours') }}
               {{ Form::text('office_hours', null, array('placeholder' => 'E.G. Th. II')) }}

               {{ Form::label('email', 'Email') }}
               {{ Form::text('email', null, array('placeholder' => 'E.G. sfoster@faculty.pcci.edu')) }}
         </fieldset>
      </div>
      <div class="small-12 large-6 columns">
         <fieldset>
            <legend>Course Information</legend>
            {{ Form::label('course_description', 'Course Description') }}
            {{ Form::textarea('course_description', null, array('placeholder' => 'Give the catalog description of the course here')) }}

            {{ Form::label('course_prerequisites', 'Prerequisites') }}
            {{ Form::text('course_prerequisites', null, array('placeholder' => 'E.G. None')) }}

            {{ Form::label('course_texts', 'Required Texts') }}
            {{ Form::text('course_texts', null, array('placeholder' => 'E.G. The Bible...')) }}
            
            {{ Form::label('course_outcomes', 'Learning Outcomes') }}
            {{ Form::textarea('course_outcomes', null, array('placeholder' => 'Upon completing this course, students will be able to... Please remember, learning outcomes should reflect course and program outcomes.')) }}
         </fieldset>
      </div>
   </div>
   <div class="row">
      <div class="large-12">
         {{ Form::submit('Submit!', array('class' => 'button right')) }}
      </div>
   </div>
{{ Form::close() }}
@stop