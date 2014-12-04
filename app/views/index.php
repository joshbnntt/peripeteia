<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html ng-app="peri" lang="en">

   <head>
      <meta http-equiv="Content-Type"  content="charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="<?php echo elixir("css/all.css") ?>">
      <link rel="stylesheet" href="app/vendorItems/angucomplete-alt.css">
      <?php echo HTML::script('js/modernizr.js') ?>
      <style type="text/css"></style>
   </head>

   <body>
   <div peri-topbar></div>
      <!-- Main page content -->
      <div id="main">
         <div ng-view></div>
      </div>

      <?php echo HTML::script('js/jquery-1.11.1.min.js') ?>
      <script src="<?php echo elixir("js/all.js") ?>"></script>
      <?php echo HTML::script('app/vendorItems/angular.min.js') ?>
      <?php echo HTML::script('app/vendorItems/angular-route.js') ?>
      <?php echo HTML::script('app/application.js') ?>
      <?php echo HTML::script('app/components/login/LoginController.js') ?>
      <?php echo HTML::script('app/shared/services/AuthService.js') ?>
      <?php echo HTML::script('app/components/home/HomeController.js') ?>
      <?php echo HTML::script('app/components/home/HomeService.js') ?>
      <?php echo HTML::script('app/components/courseOutlineForm/CourseOutlineController.js') ?>
      <?php echo HTML::script('app/components/courseOutlineForm/CourseOutlineService.js') ?>
      <?php echo HTML::script('app/components/directories/TeacherDirectoryController.js') ?>
      <?php echo HTML::script('app/components/directories/TeacherDirectoryService.js') ?>
      <?php echo HTML::script('app/shared/directives/periTopbar.js') ?>
      <?php echo HTML::script('app/shared/directives/periLogout.js') ?>
      <?php echo HTML::script('app/vendorItems/angucomplete-alt.min.js') ?>
      <?php echo HTML::script('app/vendorItems/spin.js') ?>
      <?php echo HTML::script('app/vendorItems/angular-spinner.min.js') ?>
   </body>
</html>