<!DOCTYPE html>
<html lang="en">
<?= $this->element('head') ;?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
           <?= $this->element('titlehead') ;?>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <?= $this->element('quickinfo') ;?>
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <?= $this->element('sidemenu') ;?>
          <!-- /sidebar menu -->
          <!-- /menu footer buttons -->
          <?= $this->element('leftfooter') ;?>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
       <?= $this->element('mainmenu') ;?>
      <!-- /top navigation -->
	  
	
	  
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
			<!-- <?= $this->element('toptiles') ;?> -->
			<br />
			
			 <div class="row">
			<?= $this->element('content') ;?>
			</div>
        </div>
        <!-- footer content -->
		 <?= $this->element('rightfooter') ;?>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    </div>
  </div>
  <?= $this->element('custom-notification') ;?>
  <?= $this->element('jsfiles') ;?>
   <?= $this->element('custom-scripts') ;?>

</body>

</html>
