<!DOCTYPE html>
<html lang="en">

<?= $this->element('head') ;?>

<body style="background:#F7F7F7;">
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
			<?= $this->element('login-content') ;?>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
	<?= $this->element('custom-notification') ;?>
  <?= $this->element('jsfiles') ;?>
   <?= $this->element('custom-scripts') ;?>
	
</body>
</html>


