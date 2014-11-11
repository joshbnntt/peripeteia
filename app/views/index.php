<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html ng-app="peri" lang="en">

   <head>
      <meta http-equiv="Content-Type"  content="charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <?php echo HTML::script('js/modernizr.js') ?>
   </head>

   <body ng-controller="HomeController">
      <!-- Main page content -->
      <div id="main">
         <div ng-view></div>
      </div>

      <?php echo HTML::script('app/vender/angular.min.js') ?>
      <?php echo HTML::script('app/vender/angular-route.js') ?>
      <?php echo HTML::script('app/application.js') ?>
      <?php echo HTML::script('app/components/home/HomeController.js') ?>
   </body>
</html>