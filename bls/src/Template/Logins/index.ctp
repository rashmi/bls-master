<?php echo $this->Flash->render('auth'); ?>		
<?php echo $this->Form->create(); ?>
            <div>
				<?php echo $this->Form->input('email', [ 'required'=> true, 'label' => false, 'class'=>'form-control', 'placeholder'=>'Email']);?>
				<!--<input type="text" class="form-control" placeholder="Username" required="" />-->
            </div>
            <div>
				<?php  echo $this->Form->input('password',['required'=> true, 'label' => false , 'class'=>'form-control', 'placeholder'=>'Password']); ?>
				<!--<input type="password" class="form-control" placeholder="Password" required="" />-->
            </div>
            <div>
			  <?= $this->Form->button(__('Log in'), ['class'=>'btn btn-default submit']) ?>
              <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->
             <a class="reset_pass" href="<?= $this->Url->build(['controller'=>'Logins', 'action'=> 'forget']); ?>">Lost your password?</a>
			  <?php //echo $this->Html->link('url' =>["controller" => "LoginsController","action" =>'forgot_password']); ?>
			  <?php //echo $this->HTML->link(array("controller" => "LoginsController", "action" =>'forget'))?>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h2><?php echo $this->Html->image('files/Configrations/logo/'.LOGO, ['alt'=>'Logo', 'class'=>'logo_admin']); echo STORE_NAME;  ?> </h2>
               <p>©<?php echo date("Y"); ?> All Rights Reserved. <?php echo STORE_NAME;  ?>. Privacy and Terms</p
              </div>
            </div>
<?php echo $this->Form->end(); ?>
          <!-- form -->



