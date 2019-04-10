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
				<h1 class="category-post-title text-center">
				<?php 
				echo (isset($keywords)) ? 'Kết quả tìm kiếm cho từ khóa : " '.$keywords.' "' : 'Tin tức';
				 ?>
				</h1>
			</div>
			<div class="category-wrapper col-xs-12 noPadding">

				<?php 

				if (isset($data) && !empty($data)) {
					foreach ($data as $key => $value) { ?>
						<div class="category-post-item col-xs-12 noPadding">
							<a href="<?php if(isset($value['alias'])) echo base_url().'news/detail/'.$value['id'].'-'.$value['alias'].'.html'; ?>"><h2><?php if(isset($value['title'])) echo $value['title']; ?></h2></a>
							<span><i class="fa fa-calendar-o"></i> <?php if(isset($value['create_time'])) echo date('d-m-Y',$value['create_time']); ?></span>
							<div class="category-description col-xs-12 noPadding">
								<?php if(isset($value['description'])) echo $value['description']; ?>
								<a href="<?php if(isset($value['alias'])) echo base_url().'news/detail/'.$value['id'].'-'.$value['alias'].'.html'; ?>" class="category-readmore">Xem thêm</a>
							</div>
						</div>

				<?php
					}
				}else{
					echo '<div class="alert alert-warning">
					          <center> Không có bản tin nào được tìm thấy ! </center>
					        </div>';
				}
				 ?>
				
			</div><!-- /.category-wrapper -->
			<div class="col-xs-12 text-right category-post-pagination">
				<?php if(isset($page_link)) echo $page_link; ?>
			</div>
		</div><!-- /.product-content-wrapper -->
	</div>