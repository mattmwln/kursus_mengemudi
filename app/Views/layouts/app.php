<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <?= $this->include('components/style'); ?>
  </head>
  <body>
    
	 <!-- nav -->
     <?= $this->include('components/navbar'); ?>
    <!-- END nav -->
    
    <!-- Content   -->
    <?= $this->renderSection('content'); ?>
    <!-- footer -->
    <?= $this->include('components/footer'); ?>
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->

    <!-- include sciprt -->
    <?= $this->include('components/script'); ?>
    
  </body>
</html>