@extends('layout.main')

@section('content')
   <div class="row">
      <div class="small-12 large-centered columns">
        @if(Auth::check())
            <table style="width: 100%; margin-top: 20px;">
                <caption class="title">Available Outlines</caption>
               <thead>
                  <tr>
                     <th style="width: 70%">Course Name</th>
                     <th style="width: 30%">Link</th>
                  </tr>
               </thead>
               <tbody>
                  @for($iterator = 0; $iterator < count($course_names); $iterator++)
                     <tr>
                        <td>{{ $course_names[$iterator] }}</td>
                        <td>{{ HTML::link('courseoutlines/'
                                          .$course_outlines[$iterator], 'Open') }}</td>
                     </tr>
                  @endfor
               </tbody>
            </table>
        @endif
      </div>
   </div>
@stop