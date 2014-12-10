<style type="text/css">
#content_product {
    height: auto;
    float: left;
    width: 960px;
}
</style>
<div id="slider">
    <div id="wowslider-container1">
        <div class="ws_images">
        <?php
            if (isset($data['list_slide']) && $data['list_slide'] != NULL) {
                foreach ($data['list_slide'] as $items) {
                    echo "<a href='javascript:void(0)' title='".$items['slide_title']."'><img alt='".$items['slide_title']."' src='".base_url."public/images/slider/".$items['slide_image']."' height='454' width='960' /></a>";
                }
            } else {
                echo "Chưa cập nhật !";
            }
        ?>
        </div>
        <div class="ws_bullets">
            <div>&nbsp;</div>
        </div>
    </div>
</div>
<div id="content">
    <div id="content_product">
    </div>
</div>
<!--End content_mid-->
