@extends('templates.main')

@section('content')
   <div class="outline" style="display:hidden;">
      {{ $outline['name'] }}
   </div>

   <script>
      $(document).ready(function(){
         var data = '/courseoutlines/' + $('.outline').innerHtml() + '.pdf';
         console.log(data);
         window.open(data, '_blank');
         window.location.href = '/courseoutline/create';
      });
   </script>
@stop