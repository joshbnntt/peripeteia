<div class="fixed">
  <nav class="navbar navbar-default navbar-static">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" style="padding-left: 40px;">Project Peri</a></h1>
          </div>
        </div>

          <!-- Right Nav Section -->
          @if( Auth::check() )
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="col-sm-8">
                <form class="navbar-search" action="/directory/search" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group has-feedback">
                    <span class="form-control-feedback" aria-hidden="true">
                      <i class="mdi-action-search"></i>
                    </span>
                    <span id="inputSearchStatus" class="sr-only">(search)</span>
                    <input type="search" class="form-control" name="filter_text" placeholder="Search for teachers" autocomplete="off">
                  </div>
                </form>
              </div>
              
              <div class="col-sm-2">
                <ul class="nav navbar-nav navbar-right">
                  <li style="margin-right: 10px;">
                    
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="/logout">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          @endif
      </div>
   </nav>
</div>
