<div class="container">
	<div class="breadcrumb-wrapper col-xs-12 noPadding">
		<ol class="breadcrumb">
			<?php 
				if (isset($page_breadcrumb) && !empty($page_breadcrumb)) { 
					foreach ($page_breadcrumb as $key => $value) { ?>
						<li <?php if(isset($value['href'])&& $value['href']=='') echo 'class="active"'; ?>>
							<?php if(isset($value['href'])&& $value['href']!=''){ ?>
								<a href="<?php if(isset($value['href'])&& $value['href']!='') echo $value['href']; ?>"><?php if(isset($value['name'])&& $value['name']!='') echo $value['name']; ?></a>
							<?php
							}else{ ?>
							<?php if(isset($value['name'])&& $value['name']!='') echo $value['name']; ?>
							<?php
							} ?>
							
						</li>
					<?php
					}
				}
				 ?>
		</ol>
	</div><!-- /.breadcrumb-wrapper -->

	<div class="product-content-wrapper col-xs-12 noPadding">
		<div class="category-post col-xs-12 noPadding">
			<h1 class="category-post-title text-center"><?php if(isset($data['title'])) echo $data['title']; ?></h1>
		</div>
		<div class="category-wrapper col-xs-12 noPadding">
			<div class="category-post-item single-post-content col-xs-12 noPadding">
				<?php if(isset($data['content'])) echo $data['content']; ?>
			</div><!-- /.category-post-item -->
		</div><!-- /.category-wrapper -->
		<div class="col-xs-12 related-single-post noPadding">
			<h2 class="related-single-post-title">Tin liên quan</h2>
			<?php 
			if (isset($related) && !empty($related)) {
				foreach ($related as $key => $value) { ?>
					<div class="category-post-item col-xs-12 col-md-6 noPadding">
						<a href="<?php if(isset($value['alias'])) echo base_url().'news/detail/'.$value['id'].'-'.$value['alias'].'.html'; ?>"><h2><?php if(isset($value['title'])) echo $value['title']; ?></h2></a>
						<div class="category-description col-xs-12 noPadding">
							<?php if(isset($value['description'])) echo $value['description']; ?>
						</div>
					</div>
				<?php
				}
			}
			 ?>
		</div>
	</div><!-- /.product-content-wrapper -->
</div>