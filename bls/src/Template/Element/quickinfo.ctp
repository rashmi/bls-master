<div class="profile">
            <div class="profile_pic">
	<?php  echo $this->Html->image('files/Admins/image/'.$this->request->session()->read('Auth.User.image'), ['height'=>'57px' ,'alt' => '...', 'class'=>'img-circle profile_img']); ?>
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo ucfirst($this->request->session()->read('Auth.User.firstname')).' '.ucfirst($this->request->session()->read('Auth.User.lastname')); ?></h2>
            </div>
          </div>
		 