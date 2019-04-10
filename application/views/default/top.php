<header id="header" class="header col-xs-12 noPadding">
		<div class="top-navigation hidden-xs col-sm-12 noPadding">
			<div class="container">
				<div class="row">
					<ul class="nav pull-right">
						<li><a href="<?php if(isset($info['link_facebook'])) echo $info['link_facebook']; ?>"><i class="fa fa-facebook"></i> </a></li>
						<li><a href="<?php if(isset($info['link_google'])) echo $info['link_google']; ?>"><i class="fa fa-google"></i> </a></li>
						<li><a href="<?php if(isset($info['link_youtube'])) echo $info['link_youtube']; ?>"><i class="fa fa-youtube"></i> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- /.top-navigation -->
		<div class="main-navigation col-xs-12 noPadding">
			<div class="container">
				<nav class="navbar main-navbar" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target=".responsive-navbar">
								<span class="sr-only">Toggle navigation</span>
								<span>
		                          	<span class="icon-bar"></span>
		                          	<span class="icon-bar"></span>
		                          	<span class="icon-bar"></span>
		                        </span>
							</button>
							<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php if(isset($info['logo'])) echo base_url().$info['logo']; ?>" style="max-width: 30%;" alt="" class="img-responsive"></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="navbar-offcanvas navbar-offcanvas-touch responsive-navbar">
							<form action="<?php echo base_url(); ?>san-pham/tim-kiem.html" method="GET" role="form" class="navbar-form navbar-right">
								<div class="form-group">
									<input type="text" class="form-control" name="input_search" placeholder="Nhập từ khóa tìm kiếm...">
								</div>
								<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
								<a href="<?php echo base_url(); ?>product/showCart" class="btn btn-primary fixed-cart-button-fuck"><i class="fa fa-shopping-cart"></i></a>

							</form>


						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</div>
		</div><!-- /.main-navigation -->
	</header>

<style>
	.navbar-brand>img{
		max-width: 350px !important;
	}
	.navbar-brand-fixed>img{
		max-width: 111px !important;
	}
</style>