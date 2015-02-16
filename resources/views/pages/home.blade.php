@extends('templates.main')

@section('page-title')
  <title>Welcome to Peri | Project Peri</title>
@endsection

@section('content')
   <div class="row">
      <div class="col-md-10 col-md-offset-1">
        @if( Auth::check() )
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-hover">
                     <thead>
                        <tr>
                           <th style="width: 70%"><h4>Course</h4></th>
                           <th style="width: 30%"></th>
                        </tr>
                     </thead>
                     <tbody>
                        @for($iterator = 0; $iterator < count($course_names); $iterator++)
                           <tr>
                              <td>{{ $course_names[$iterator] }}</td>
                              <td>
                                <a href="courseoutlines/{{ $course_outlines[$iterator] }}" class="pull-right">View Outline</a>
                              </td>
                           </tr>
                        @endfor
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        @endif
      </div>
   </div>

   <div class="fixed-action-btn" data-toggle="tooltip" data-placement="left" title="Create a new outline">
      <a href="/courseoutline/create" class="btn-floating btn-large new-btn orange darken-2">
        <i class="mdi-content-add"></i>
        <i class="mdi-editor-mode-edit"></i>
      </a>
   </div>
@endsection

@section('extra-js')
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
@endsection