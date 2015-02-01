 @extends('layout.main')


 @section('content')
 {{ Form::open(array('action' => 'UserController@search')) }}

<div class="row search" style="margin-top:50px;">
  <div class=" small-12 columns">

    <div class="row collapse">
      <!-- Search field -->
      <div class="small-10 large-10 columns">
        <div>
        @if($errors->first('filter_text'))
          {{ Form::text('filter_text', null, array('data-tooltip', 'aria-haspopup' => 'true', 'class' => 'has-tip error', 'title' => 'Search by teacher first name, last name, or a combination of both. You can use partial names. (ie. John Smith, John, Smith, or J Smith)', 'placeholder' => 'search here', 'autofocus')) }}
          <small class="error">{{$errors->first('filter_text')}}</small>
        @else
          {{ Form::text('filter_text', null, array('data-tooltip', 'aria-haspopup' => 'true', 'class' => 'has-tip', 'title' => 'Search by teacher first name, last name, or a combination of both. You can use partial names. (ie. John Smith, John, Smith, or J Smith)', 'placeholder' => 'search here', 'autofocus')) }}
        @endif
        </div>
      </div>
        <div class="small-2 large-2 columns">
          {{ Form::submit('Search', array('class' => 'button postfix', 'position' => 'right')) }}
        </div>
      </div>
    </div>

</div>

   {{Form::close()}}

@if(!empty($allusers))

  @foreach ($allusers as $value)
  {{$value->first_name}}
  {{$value->last_name}}
  {{$value->office}}
  {{$value->email}}
  @endforeach
@else
  {{"No results match your search."}}
@endif