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
							<li class="dropdown" id='logout-btn' style='float: right;'>
								<a href='<?php echo base_url(); ?>/logout' id='label-logout'>
									<span class="hint--bottom" data-hint="Logout"><i class='fa fa-power-off'></i></span>
								</a>
							</li>
							<li class="dropdown profile" style='float: right;'>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<span class="hint--bottom" data-hint="Profile"><i class='fa fa-user'></i> &nbsp;  Username</span>
								</a>
							</li>
							<li class="dropdown" style='float: right;'>
								<a>
									<i class='fa fa-credit-card'></i> &nbsp; 33444
								</a>
							</li>
							<li class="dropdown" style='float: right;'>
								<a id='label-time'>
									<i class='fa fa-clock-o'></i> &nbsp; 04:59 PM
								</a>
							</li>
							<li class="dropdown" style='float: right;'>
								<a>
									<i class='fa fa-calendar'></i> &nbsp; FEB 25, 2016
								</a>
							</li>
						</ul>
					</div>