<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html ng-app="peri" lang="en">

   <head>
      <meta http-equiv="Content-Type"  content="charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="<?php echo elixir("css/all.css") ?>">
      <?php echo HTML::script('js/modernizr.js') ?>
   </head>

   <body ng-controller="HomeController">
   <div peri-topbar></div>
      <!-- Main page content -->
      <div id="main">
         <div ng-view></div>
      </div>

      <?php echo HTML::script('app/vendor/angular.min.js') ?>
      <?php echo HTML::script('app/vendor/angular-route.js') ?>
      <?php echo HTML::script('app/application.js') ?>
      <?php echo HTML::script('app/components/home/HomeController.js') ?>
      <?php echo HTML::script('app/components/home/HomeService.js') ?>
      <?php echo HTML::script('app/components/courseOutlineForm/CourseOutlineController.js') ?>
      <?php echo HTML::script('app/components/courseOutlineForm/CourseOutlineService.js') ?>
      <?php echo HTML::script('app/shared/directives/periTopbar.js') ?>
   </body>
</html>