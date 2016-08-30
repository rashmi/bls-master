
        <!--    <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph x_panel">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>
                <div class="x_content">
                  <div class="demo-container" style="height:250px">
                    <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
                  </div>
                </div>
              </div>
            </div>-->
	

			
			 <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph x_panel">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h3><?= $this->fetch('title') ?><small></small></h3>
                  </div>
                  
                </div>
				
					<!-- Flash message -->
					<?= $this->Flash->render() ?>
				<!-- Flash message -->
				
                <div class="x_content">
						<?= $this->fetch('content') ?>
                </div>
              </div>
            </div>