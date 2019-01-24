<?php
			  if(file_exists('assets/images/'.$userData->profile_pic) && isset($userData->profile_pic)){
			  $profile_pic = $userData->profile_pic;
			  }else{
			  $profile_pic = 'user.png';}
?>
<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info">
				<div class="image">
					<img src="<?php echo base_url().'/assets/images/'.$profile_pic;?>" width="48" height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $userData->name;?></div>
					<div class="email"><?php echo $userData->email;?></div>
					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li><a href="<?php echo site_url('user/profile')?> "><i class="material-icons">person</i>Profile</a></li>
							<li role="separator" class="divider"></li>
							<!-- li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
							<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
							<li role="separator" class="divider"></li -->
							<li><a href="<?php echo site_url('user/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MAIN NAVIGATION</li>
					<li>
						<a href="<?php echo base_url();?>">
							<i class="material-icons">home</i>
							<span>Home</span>
						</a>
					</li>
					<li>
						<a href="../../pages/typography.html">
							<i class="material-icons">text_fields</i>
							<span>Typography</span>
						</a>
					</li>
					<li>
						<a href="../../pages/helper-classes.html">
							<i class="material-icons">layers</i>
							<span>Helper Classes</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);" class="menu-toggle">
							<i class="material-icons">widgets</i>
							<span>Widgets</span>
						</a>
						<ul class="ml-menu">
							<li>
								<a href="javascript:void(0);" class="menu-toggle">
									<span>Cards</span>
								</a>
								<ul class="ml-menu">
									<li>
										<a href="../../pages/widgets/cards/basic.html">Basic</a>
									</li>
									<li>
										<a href="../../pages/widgets/cards/colored.html">Colored</a>
									</li>
									<li>
										<a href="../../pages/widgets/cards/no-header.html">No Header</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" class="menu-toggle">
									<span>Infobox</span>
								</a>
								<ul class="ml-menu">
									<li>
										<a href="../../pages/widgets/infobox/infobox-1.html">Infobox-1</a>
									</li>
									<li>
										<a href="../../pages/widgets/infobox/infobox-2.html">Infobox-2</a>
									</li>
									<li>
										<a href="../../pages/widgets/infobox/infobox-3.html">Infobox-3</a>
									</li>
									<li>
										<a href="../../pages/widgets/infobox/infobox-4.html">Infobox-4</a>
									</li>
									<li>
										<a href="../../pages/widgets/infobox/infobox-5.html">Infobox-5</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
			<!-- #Menu -->
			<!-- Footer -->
			<div class="legal">
				<div class="copyright">
					&copy; 2018 - 2019 <a href="javascript:void(0);">RSS - Bhayandar west</a>.
				</div>
				<div class="version">
					<b>Version: </b> 1.0.0
				</div>
				<div class="fab fab__push">
        <div class="fab__ripple"></div>
        <img class="fab__image" src="<?php echo base_url('/assets/material/images/push-off.png');?>" alt="Push Notification" />
      </div>

      <!-- Toast msg -->
      <div class="toast__msg"></div>
			</div>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		<aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
				<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
					<ul class="demo-choose-skin">
						<li data-theme="red" class="active">
							<div class="red"></div>
							<span>Red</span>
						</li>
						<li data-theme="pink">
							<div class="pink"></div>
							<span>Pink</span>
						</li>
						<li data-theme="purple">
							<div class="purple"></div>
							<span>Purple</span>
						</li>
						<li data-theme="deep-purple">
							<div class="deep-purple"></div>
							<span>Deep Purple</span>
						</li>
						<li data-theme="indigo">
							<div class="indigo"></div>
							<span>Indigo</span>
						</li>
						<li data-theme="blue">
							<div class="blue"></div>
							<span>Blue</span>
						</li>
						<li data-theme="light-blue">
							<div class="light-blue"></div>
							<span>Light Blue</span>
						</li>
						<li data-theme="cyan">
							<div class="cyan"></div>
							<span>Cyan</span>
						</li>
						<li data-theme="teal">
							<div class="teal"></div>
							<span>Teal</span>
						</li>
						<li data-theme="green">
							<div class="green"></div>
							<span>Green</span>
						</li>
						<li data-theme="light-green">
							<div class="light-green"></div>
							<span>Light Green</span>
						</li>
						<li data-theme="lime">
							<div class="lime"></div>
							<span>Lime</span>
						</li>
						<li data-theme="yellow">
							<div class="yellow"></div>
							<span>Yellow</span>
						</li>
						<li data-theme="amber">
							<div class="amber"></div>
							<span>Amber</span>
						</li>
						<li data-theme="orange">
							<div class="orange"></div>
							<span>Orange</span>
						</li>
						<li data-theme="deep-orange">
							<div class="deep-orange"></div>
							<span>Deep Orange</span>
						</li>
						<li data-theme="brown">
							<div class="brown"></div>
							<span>Brown</span>
						</li>
						<li data-theme="grey">
							<div class="grey"></div>
							<span>Grey</span>
						</li>
						<li data-theme="blue-grey">
							<div class="blue-grey"></div>
							<span>Blue Grey</span>
						</li>
						<li data-theme="black">
							<div class="black"></div>
							<span>Black</span>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="settings">
					<div class="demo-settings">
						<p>GENERAL SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Report Panel Usage</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Email Redirect</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>SYSTEM SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Notifications</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Auto Updates</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
						<p>ACCOUNT SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Offline</span>
								<div class="switch">
									<label><input type="checkbox"><span class="lever"></span></label>
								</div>
							</li>
							<li>
								<span>Location Permission</span>
								<div class="switch">
									<label><input type="checkbox" checked><span class="lever"></span></label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<!-- #END# Right Sidebar -->
	</section>
