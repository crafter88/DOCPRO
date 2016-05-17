						<div class="navbar-header">
							<button id='expand-sidebar-button' type="button" class="navbar-expand-toggle">
								<i class="fa fa-bars icon"></i>
							</button>
						</div>
						
						<div class='navbar-body'>
							<button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
								<i class="fa fa-th icon"></i>
							</button>
								
							<div id='btn-company' class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class='hint--bottom-right' data-hint='Choose Company'><span class="caret"></span></span></button>
								<ul class="dropdown-menu" role="menu">
									<li><span>Company 1</span></li>
									<li class="divider"></li>
									<li><a href="#">Company 2</a></li>
									<li><a href="#">Comapny 3</a></li>
									<li><a href="#">Comapny 4</a></li>
								</ul>
							</div>
								
							<span id='label-company'>Company 1</span>
								
							<div id='btn-branch' class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class='hint--bottom-right' data-hint='Choose Branch'><span class="caret"></span></span></button>
								<ul class="dropdown-menu" role="menu">  
								   <li><span>Branch 4</span></li>
								   <li class="divider"></li>
								   <li><a href="#">Branch 1</a></li>
								   <li><a href="#">Branch 2</a></li>
								   <li><a href="#">Branch 3</a></li>
								</ul>
							</div>
								
							<span id='label-branch'>Branch 4</span>
							
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