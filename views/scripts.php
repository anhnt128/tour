<link rel="stylesheet" href="<?php echo "/tour/public/styles/inc/bootstrap/css/bootstrap.min.css";?>" />
<link rel="stylesheet" href="<?php echo "/tour/public/styles/stylesheet.css";?>"/>
<!-- Flexslider -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/flexslider.css";?>" />
<!-- fontawesome -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/fontawesome/font-awesome.min.csss";?>"/>
<!-- Datepicker UI -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/jquery-ui-1.10.3.custom.min.css";?>"/>
<!-- MI slider -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/mi-slider.css";?>"/>   
<!-- Chozen UI -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/chosen.css";?>"/>  
<!-- Range Slider UI #2 -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/rangeslider-classic.css";?>"/>
<!-- Elegant Font -->
<link rel="stylesheet" href="<?php echo "/tour/public/styles/inc/elegant-font/style.css";?>"/>

<link rel="shortcut icon" href="<?php echo "/tour/public/images/favicon.ico" ;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo "/tour/public/styles/style.css";?>" />
<link rel="stylesheet" type="text/css" href="<?php echo "/tour/public/styles/popup.css";?>" />
<link rel="stylesheet" type="text/css" href="<?php echo "/tour/public/styles/magiczoom.css";?>" />
<!--
<script type="text/javascript" src="<?php echo "/tour/public/js/jquery1.10.2.min.js";?>"></script>
<script type="text/javascript" src="<?php echo "/tour/public/js/tabs.js";?>"></script>
<script type="text/javascript" src="<?php echo "/tour/public/js/tooltip.js";?>"></script>
<script type="text/javascript" src="<?php echo "/tour/public/js/popup.js";?>"></script>
<script type="text/javascript" src="<?php echo "/tour/public/js/jqueryEasing.js";?>"></script>
<script type="text/javascript" src="<?php echo "/tour/public/js/ajax.js";?>"></script>
-->
<link rel="shortcut icon" href="<?php echo base_url."public/images/favicon.ico" ;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url."public/styles/style.css";?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url."public/styles/magiczoom.css";?>" />
<script type="text/javascript" src="<?php echo base_url."public/js/jquery1.10.2.min.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/tabs.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/tooltip.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/jqueryEasing.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/ajax.js";?>"></script>

<script src="<?php echo base_url."public/js/magiczoom.js";?>" type="text/javascript"></script>
<script type="text/javascript">
    MagicZoom.options = {
    'disable-zoom' : false,
    'selectors-change' : 'mouseover'
    }
</script>
<script type="text/javascript">
    var links = "<?php echo base_url ;?>";
</script>
<script type="text/javascript">
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
    $('#bttop').fadeIn();
    } else {
    $('#bttop').fadeOut();
    }
});

$('#bttop').click(function() {
    $('body,html').animate({scrollTop:0},300);
});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#menu_top .list_menutop li a").each(function(){
url = location.href.toLowerCase();
if (this.href.toLowerCase() == url) {
    $("#menu_top .list_menutop li a").removeClass("active");
    $(this).addClass("active");
  }
 });
});
</script>
