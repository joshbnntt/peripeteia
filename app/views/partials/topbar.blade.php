<div class="fixed">
   <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
          <li class="name">
            <h1><a href="{{ URL::to('/') }}">Project Peri</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

     <section class="top-bar-section">
        <!-- Left Nav Section -->
         @if(Auth::check())
            <ul class="left">
               <li class="divider"></li>
               <li><a href="{{ URL::to('courseoutline/create') }}">Create an Outline</a></li>
               <li class="divider"></li>
            </ul>
         @endif
        <!-- Right Nav Section -->
        <ul class="right">
        @if(!Auth::check())
          <li class="active"><a href="{{ URL::to('login') }}">Login</a></li>
        @else
          <li class="active"><a href="{{ URL::to('logout') }}">Logout</a></li>
        @endif
        </ul>
      </section>
   </nav>
</div>