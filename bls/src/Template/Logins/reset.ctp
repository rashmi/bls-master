<?php echo $this->Flash->render('auth'); ?>		
<?php echo $this->Form->create(); ?>
            <div>
				<?php echo $this->Form->input('password', [ 'required'=> true, 'label' => false, 'class'=>'form-control', 'placeholder'=>'Please Enter your password']);?>
				<!--<input type="text" class="form-control" placeholder="Username" required="" />-->
            </div>
            <div>
				<?php  echo $this->Form->input('password1', ['type' => 'password','required'=> true, 'label' => false , 'class'=>'form-control', 'placeholder'=>'Please re-enter your password']); ?>
				<!--<input type="password" class="form-control" placeholder="Password" required="" />-->
            </div>
            <div>
			  <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-default submit']) ?>
              <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
               <h2><?php echo $this->Html->image('files/Configrations/logo/'.LOGO, ['alt'=>'Logo', 'class'=>'logo_admin']); echo STORE_NAME;  ?></h2>
               <p>©<?php echo date("Y"); ?> All Rights Reserved. <?php echo STORE_NAME;  ?>. Privacy and Terms</p
              </div>
            </div>
<?php echo $this->Form->end(); ?>
          <!-- form -->



