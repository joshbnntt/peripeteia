@extends('layout.main')

@section('content')
   <div class="outline" style="display:hidden;">{{$outline['name']}}</div>
@stop

@section('extra-js')
<script>
      $(document).ready(function(){
         var data = '/courseoutlines/' + $('.outline').html() + '.pdf';
         console.log(data);
         window.open(data, '_blank');
         window.location.href = '/courseoutline/create';
      });
   </script>
@stop