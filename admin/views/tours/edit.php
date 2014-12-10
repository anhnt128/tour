<div class="section">
<script type="text/javascript">
    function checkpro(){
        var form = document.sac;
        if(form.tour_name.value == ""){
            alert("Vui lòng nhập tên sản phẩm");
            form.tour_name.focus();
            return false;
        }
        if(form.costs.value == ""){
            alert("Vui lòng nhập giá tiền");
            form.costs.focus();
            return false;
        }   }
</script>
    <!--[if !IE]>start title wrapper<![endif]-->
    <div class="title_wrapper">
        <span class="title_wrapper_top"></span>
        <div class="title_wrapper_inner">
            <span class="title_wrapper_middle"></span>
            <div class="title_wrapper_content">
                <h2 class="menu_title">Thêm mới sản phẩm</h2>
            </div>
        </div>
        <span class="title_wrapper_bottom"></span>
    </div>
    <!--[if !IE]>end title wrapper<![endif]-->

    <!--[if !IE]>start section content<![endif]-->
    <div class="section_content">
        <span class="section_content_top"></span>
        <div class="section_content_inner">
            <div class="table_tabs_menu">
            </div>
            <div class="table_wrapper" style="background:none;">
                <div class="table_wrapper_inner">
                    <div class="error_red"><?php //if(isset($error)) { echo "<p>".$error."</p>"; } ?>
                        <?php //echo validation_errors();?>
                    </div>
                    <form action="<?php echo base_url."admin/index.php?mod=tours&act=edit&pid=".$data['info']['pro_id'].""; ?>" method="post" name="sac" onsubmit="return checkpro()" enctype="multipart/form-data">
                    <div class="form_items">
                        <div class="form_items_left">Tên tours</div>
                        <div class="form_items_right"><input name="tour_name" type="text" id="tour_name" size="30" value="<?php echo $data['info']['name'] ?>" /></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Giá tiền</div>
                        <div class="form_items_right"><input name="costs" type="text" id="costs" size="30" value="<?php echo $data['info']['costs'] ?>" /></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Tổng thời gian</div>
                        <div class="form_items_right"><input name="sum_time" type="text" id="sum_time" size="30" value="<?php echo $data['info']['sum_time'] ?>" /></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Thời gian bắt đầu</div>
                        <div class="form_items_right"><input name="time_start" type="text" id="time_start" size="30" placeholder="2014-12-12 12:12:12" value="<?php echo $data['info']['time_start'] ?>"/></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Thời gian kết thúc</div>
                        <div class="form_items_right"><input name="time_end" type="text" id="time_end" size="30" placeholder="2014-12-12 12:12:12"  value="<?php echo $data['info']['time_end'] ?>"/></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Địa điểm bắt đầu</div>
                        <div class="form_items_right"><input name="schedule_start" type="text" id="schedule_start" size="30" value="<?php echo $data['info']['schedule_start'] ?>" /></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Địa điểm kết thúc</div>
                        <div class="form_items_right"><input name="schedule_end" type="text" id="schedule_end" size="30" value="<?php echo $data['info']['schedule_end'] ?>" /></div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Trạng thái</div>
                        <div class="form_items_right">
                            <input type="checkbox" value="1" name="status" <?php if ($data['info']['status'] == 1) { echo "checked=checked"; } ?> />Active<br />
                        </div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Chi tiết tours</div>
                        <div class="form_items_right">
                            <textarea name="full" id="full" cols="40" rows="4"><?php echo $data['info']['content'] ?></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'full' );
                            </script>
                        </div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">Hình ảnh</div>
                        <div class="form_items_right">
                          <input type="file" name="upload" size="30" />
                        </div>
                    </div>
                    <div class="form_items">
                        <div class="form_items_left">&nbsp;</div>
                        <div class="form_items_right">
                        <input type="submit" name="ok" value="Update Tour" class="magin"/>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!--[if !IE]>end table_wrapper<![endif]-->
        </div>
        <span class="section_content_bottom"></span>
    </div>
    <!--[if !IE]>end section content<![endif]-->
</div>