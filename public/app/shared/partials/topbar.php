<div class="fixed">
   <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
          <li class="name">
            <h1><a href="/">Project Peri</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

     <section class="top-bar-section">
        <!-- Left Nav Section -->
            <ul class="left" ng-show=" userInfo ">
               <li class="divider"></li>
               <li><a ng-href="createoutline">Create an Outline</a></li>
               <li class="divider"></li>
               <li><a ng-href="teacherdirectorysearch">Search for a Teacher</a></li>
               <li class="divider"></li>
            </ul>
        <!-- Right Nav Section -->
        <ul class="right">
          <li ng-show=" userInfo "> <a>{{ userInfo.user }}</a></li>
          <li class="divider"></li>
          <li class="active" ng-show=" !userInfo.user "><a ng-href="/">Login</a></li>
          <li class="active" ng-show=" userInfo.user " peri-logout></li>
        </ul>
      </section>
   </nav>
</div>