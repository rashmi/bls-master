<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
				
				  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
					 <?= $this->Html->link(__('Dashboard'), ['controller'=>'Dashboards', 'action' => 'index']) ?>
                    </li>
                  </ul>
                </li>
				
			  
			  
                <li><a><i class="fa fa-users"></i> User Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
					<?= $this->Html->link(__('Customers list'), ['controller'=>'Users', 'action' => 'index']) ?>
                    </li>
                    <li>
					 <?= $this->Html->link(__('Add customer'), ['controller'=>'Users','action' => 'add']) ?>
                    </li>
                  </ul>
                </li>
				<li><a><i class="fa fa-user-secret"></i> Admin Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><?= $this->Html->link(__('List Admins'), ['controller'=>'Admins', 'action' => 'index']) ?>
                    </li>
                    <li>
					 <?= $this->Html->link(__('New Admin'), ['controller'=>'Admins','action' => 'add']) ?>
                    </li>
					<li>
					 <?= $this->Html->link(__('Admin Groups'), ['controller'=>'Groups','action' => 'index']) ?>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-list"></i>Category Management  <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				   <li><?= $this->Html->link(__('List Categories'), ['controller'=>'Categories', 'action' => 'index']) ?>
                   
                    </li>
                    <li><?= $this->Html->link(__('Add Category'), ['controller'=>'Categories', 'action' => 'add']) ?>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-barcode"></i> Brand Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                  <li><?= $this->Html->link(__('List Brands'), ['controller'=>'Brands', 'action' => 'index']) ?>
                    </li>
					   <li><?= $this->Html->link(__('Add Brand'), ['controller'=>'Brands', 'action' => 'add']) ?>
                    </li>
                  </ul>
                </li>
				<li><a><i class="fa fa-flag-checkered"></i> Colors <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                  <li><?= $this->Html->link(__('List Colors'), ['controller'=>'Colors', 'action' => 'index']) ?>
                    </li>
					   <li><?= $this->Html->link(__('Add Color'), ['controller'=>'Colors', 'action' => 'add']) ?>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-shopping-bag"></i> Product Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                     <li><?= $this->Html->link(__('List Products'), ['controller'=>'Products', 'action' => 'index']) ?>
                    </li>
                     <li><?= $this->Html->link(__('Add Product'), ['controller'=>'Products', 'action' => 'add']) ?>
                    </li>
					 <li><?= $this->Html->link(__('Bulk Add'), ['controller'=>'Products', 'action' => 'bulkadd']) ?>
                    </li>
                  </ul>
                </li>
				  <li><a><i class="fa fa-certificate"></i> Promotions <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                     <li><?= $this->Html->link(__('List Promotions'), ['controller'=>'Promotions', 'action' => 'index']) ?>
                    </li>
                     <li><?= $this->Html->link(__('Add Promotions'), ['controller'=>'Promotions', 'action' => 'add']) ?>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart"></i>Orders Management<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
						<?= $this->Html->link(__('Orders'), ['controller'=>'Orders','action' => 'index']) ?>
                    </li>
                  </ul>
                </li>
				
				
				
              </ul>
            </div>
            <div class="menu_section">
              <h3>My Store</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Configrations <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li>
						<?= $this->Html->link(__('Site Configs'), ['controller'=>'Configrations','action' => 'index']) ?>
                    </li>
                    <li><?= $this->Html->link(__('Countries List'), ['controller'=>'Countries','action' => 'index']) ?>
					 <li><?= $this->Html->link(__('Store Slider'), ['controller'=>'SliderImages','action' => 'index']) ?>
                    </li>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
			 <!--<div class="menu_section">
              <h3>Pages</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Nav Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">Terms and Conditions</a>
                    </li>
					  <li><a href="e_commerce.html">Private Policy</a>
                    </li>
                    <li><a href="projects.html">About Us</a>
                    </li>
                    <li><a href="project_detail.html">Contact Us</a>
                    </li>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>-->
			<!--<div class="menu_section">
              <h3>My Account</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Profile <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">Profile details</a>
                    </li>
					 <li><a href="e_commerce.html">Change password </a>
                    </li>
                   <li><a href="e_commerce.html">Log Out </a>
                    </li>
                </li>
                  </ul>
                </li>
              </ul>
            </div>-->
			
			

          </div>