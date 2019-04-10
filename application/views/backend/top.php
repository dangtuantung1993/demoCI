<header class="main-header">

	<!-- Logo -->
	<a href="" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-mini"></span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg"><b>Admin Control Panel</b></span>
	</a>

	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
	  <!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	    <span class="sr-only">Toggle navigation</span>
	  </a>
	  <!-- Navbar Right Menu -->
	  <div class="navbar-custom-menu">
	    <ul class="nav navbar-nav">
	      <li class="dropdown user user-menu">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	          <img src="<?php echo base_url() ?>public/<?php echo $module;?>/images/avatar5.png" class="user-image" alt="User Image" />
	          <span class="hidden-xs"><?php if ($this->session->userdata('username')) {
	          								echo $this->session->userdata('username');
	          							} 
	          						?></span>
	        </a>
	        <ul class="dropdown-menu">
	          <!-- User image -->
	          <li class="user-header">
	            <img src="<?php echo base_url() ?>public/<?php echo $module;?>/images/avatar5.png" class="img-circle" alt="User Image" />
	            <p>
	              Đặng Tuấn Tùng - Web Developer
	              <small>dangtuantung150993@gmail.com</small>
	            </p>
	          </li>
	          <!-- Menu Footer-->
	          <li class="user-footer">
	            <div class="pull-left">
	              <a href="#" class="btn btn-default btn-flat">Profile</a>
	            </div>
	            <div class="pull-right">
	              <a href="<?php echo base_url()."$module/verify/logout"; ?>" class="btn btn-default btn-flat">Sign out</a>
	            </div>
	          </li>
	        </ul>
	      </li>
	      <!-- Control Sidebar Toggle Button -->
	      <li>
	        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
	      </li>
	    </ul>
	  </div>

	</nav>
	</header>