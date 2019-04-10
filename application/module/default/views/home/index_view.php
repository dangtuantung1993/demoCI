<?php 
	$fuck = 1;
 ?>
<div class="slider col-xs-12 noPadding" id="mainSlider">
	<?php
	foreach ($slider as $k => $v) { ?>
		<div class="item">
			<a href="<?php echo (isset($v['link']) && $v['link']) ? $v['link'] : '#' ?>">
                <div class="slider-item col-xs-12 noPadding" style="background: url(<?php echo (isset($v['images']) && $v['images']!='') ? base_url().$v['images'] : ''; ?>)"></div>
            </a>
		</div>
	<?php
	}

	 ?>
</div><!-- /.slider -->


<div class="col-xs-12 noPadding">
	<div class="container">
		<hr>
	</div>
</div>

<div class="product-list col-xs-12 noPadding block">
	<div class="container">
		<h2 class="text-left">Sản phẩm mới</h2>
	</div>
</div><!-- /.product-list -->

<div class="col-xs-12 noPadding">
	<div class="container">
		<hr>
	</div>
</div>

<div class="product-list col-xs-12 noPadding block">
	<div class="container">
		<h2 class="text-left">Sản phẩm bán chạy</h2>
	</div>
</div><!-- /.product-list -->

