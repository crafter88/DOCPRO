                    <div class="navbar-header">
                        <button id='expand-sidebar-button' type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                    </div>
					
					<div class='navbar-body'>
						<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
							<i class="fa fa-th icon"></i>
						</button>
						
						<a href="<?php base_url();?><?php echo '/'.$back_button; ?>" class='btn btn-default tooltip-toggle hvr-sweep-to-left' title='Go Back'><i class='fa fa-arrow-left'></i></a>
						<span><?php if(isset($title)){ echo $title; }?></span>
							
						<ul class="nav navbar-nav navbar-right" style='width: 100%;'>
							<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
								<i class="fa fa-times icon"></i>
							</button>
							<li class="dropdown" style='float: right; margin: 10px 20px 0 0px; padding-left: 50px; border-left: 1px solid #D5D5D5;'>
								<button id='navbar-widget-btn' type='button' class='btn btn-primary'>
									<i class='fa fa-angle-down'></i>
								</button>
							</li>
							<li class='dropdown' style='float: right; margin-top: 10px; margin-right: 20px;'>
								<h4 style='font-size: 14px; font-weight: bold; margin-top: 15px;'>Branch 1</h4>
							</li>
							<li class="dropdown" style='float: right; margin-right: 5px; margin-top: 10px;'>
								<button id='navbar-branch-btn' type="button" class="btn btn-default"><span class="caret"></span></button>
							</li>
							<li class='dropdown' style='float: right; margin-top: 10px; margin-right: 20px;'>
								<h4 style='font-size: 14px; font-weight: bold; margin-top: 15px;'>Company 1</h4>
							</li>
							<li class="dropdown" style='float: right; margin-right: 5px; margin-top: 10px;'>
								<button id='navbar-company-btn' type="button" class="btn btn-default"><span class="caret"></span></button>
							</li>
						</ul>
					</div>
					<div id='navbar-widget' style='display: none;'>
						<div class='container' style='width: 20vw; padding-left: 28px; padding-right: 0;'>
							<div class='row' style='width: 100%;'>
								<div class='col-md-6' style='margin: 0; padding: 0;'>
									<button class='btn btn-default' style='font-size: 0.8vw; width: 100%'>
										<span><i class='fa fa-calendar'></i> &nbsp; FEB 25, 2016</span>
									</button>
								</div>
								<div class='col-md-6' style='margin: 0; padding: 0;'>
									<button class='btn btn-default' style='font-size: 0.8vw; width: 100%'>
										<i class='fa fa-clock-o'></i> &nbsp; 04:59 PM
									</button>
								</div>
							</div>
							<div class='row' style='width: 100%;'>
								<div class='col-md-6' style='margin: 0; padding: 0;'>
									<button class='btn btn-default' style='font-size: 0.8vw; width: 100%'>
										<i class='fa fa-credit-card'></i> &nbsp; 33444
									</button>
								</div>
								<div class='col-md-6' style='margin: 0; padding: 0;'>
									<button class='btn btn-default' style='font-size: 0.8vw; width: 100%'>
										<span><i class='fa fa-user'></i> &nbsp;  Username</span>
									</button>
								</div>
							</div>
							<div class='row' style='width: 100%'>
								<div class='col-md-12' style='margin: 0; padding: 0;'>
									<a href='<?php echo base_url(); ?>/logout' class='btn btn-primary' style='font-size: 0.8vw; width: 100%'>
										<span><i class='fa fa-power-off'></i> &nbsp;Logout</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id='navbar-company' style='display: none;'>
						<div>
							<select id="select-company" data-placeholder="Select a company..." style='width: 18vw;'>
								<option value="1">Company 1</option>
								<option value="2">Company 2</option>
								<option value="3">Company 3</option>
								<option value="4">Company 4</option>
							</select>
						</div>
					</div>
					<div id='navbar-branch' style='display: none;'>
						<div>
							<select id="select-branch" data-placeholder="Select a branch..." style='width: 18vw;'>
								<option value="1">Branch 1</option>
								<option value="2">Branch 2</option>
								<option value="3">Branch 3</option>
								<option value="4">Branch 4</option>
							</select>
						</div>
					</div>