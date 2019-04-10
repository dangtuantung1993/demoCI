<div class="col-md-12">
    <form class="form-horizontal form-row-seperated" action="<?php echo base_url()."$module/";?>category_news/addcat_news/<?php if(isset($id)) echo $id; ?>" id="form_informationbasic" class="form-horizontal" enctype="multipart/form-data" method="POST">
      <div class="portlet">
        <div class="portlet-title">
          <div class="caption">
            <i class="fa fa-cog"></i> Cài đặt danh mục tin tức
          </div>
          <?php 
          $this->load->view("globals/toolbar");
           ?>
        </div>
        <div class="portlet-body">
          <?php 
          $this->load->view("globals/notify_action");
           ?>
          <div class="tabbable">            
            <div class="tab-content no-space" id="information">
              <div class="tab-pane active">
                <div class="form-body">             
                  
                  <div class="form-group">
                    <label class="col-md-2 control-label">Tên danh mục <span class="required">
                    *</span>
                    </label>
                    <div class="col-sm-4 row_input_title">
                      <input required type="text" class="form-control maxlength-handler" maxlength="100" name="title" value="<?php if(isset($cat_news['title'])) echo $cat_news['title'];?>">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Danh mục cha</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="parent_id">
                        <?php if( isset( $cat_news['parent_id']) ) $this->mweb_category_news->adm_create_menu($list, $parent=0, $text='&nbsp;', $cat_news['parent_id']); else $this->mweb_category_news->adm_create_menu($list, $parent=0, $text='&nbsp;', 0); ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sắp xếp</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" name="sort" value="<?php if(isset($cat_news)) echo $cat_news['sort']; ?>" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Trạng thái</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="status" id="status">
                        <option value="1" <?php if(isset($cat_news) && $cat_news['status'] == 1) echo 'selected = selected'; ?>>Hiện</option>            
                        <option value="0" <?php if(isset($cat_news) && $cat_news['status'] == 0) echo 'selected = selected'; ?> >Ẩn</option>                        
                      </select>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>            
          </div>
        </div>
        <div class="portlet-title topline">
          <?php 
          $this->load->view("toolbar");
           ?>
        </div>
      </div>
    </form>
</div>
