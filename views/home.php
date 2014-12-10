<script type="text/javascript">
    $('#btnSearch').click(function(){
        if ($(this).attr("disabled") != "disabled" && $(this).attr("disabled") != true) {
            if ($("#formSearch").valid()){
                var url=appRoot+"controller/home.php";
                $("#formSearch").attr('action',url);
                $("#formSearch").submit();
                setDisabled();
            }
        }
    });
</script>
<div id="preloader">
<div id="status">&nbsp;</div>
<noscript>JavaScript is off. Please enable to view full site.</noscript>
</div>
    <div id="site">
        <header id="header" class="wide-fat">
            <div class="container">
                <div class="col-xs-12 col-sm-2 no-margin">
                    <div class="branding">
                        <h1 class="site-title">
                           <!-- <a href="#"><img src="images/site-logo.png" alt="Traveline" /> <span>Travel<span class="higlight">ine</span></span></a>-->
                        </h1>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 no-margin">
                    <div id="main-menu">
                        <nav class="navigation">
                            <ul class="hidden-xs hidden-sm hidden-md">
                                <li class="menu-item about-us active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_group"></i> Home</a>
                                    <!--<ul class="dropdown-menu" role="menu">
                                        <li class="active" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="index-2.html">Homepage-1</a>
                                            <a role="menuitem" tabindex="-1" href="index-3.html">Homepage-2</a>
                                            <a role="menuitem" tabindex="-1" href="index-mini.html">Homepage-3</a>
                                        </li>
                                    </ul>-->
                                </li>
                               <!-- <li class="menu-item destinations">
                                    <a href="destinations.html"><i class="icon_pin"></i> Destinations</a>
                                </li>
                                <li class="menu-item our-travel">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_globe_alt"></i> Our Travel</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="our-travel.html">our travel</a>
                                            <a role="menuitem" tabindex="-1" href="our-travel-sidebar.html">our travel-sidebar</a>
                                            <a role="menuitem" tabindex="-1" href="our-travel-right-sidebar.html">our travel-right sidebar</a>
                                            <a role="menuitem" tabindex="-1" href="our-travel-detail.html">our travel-detail</a>
                                        </li>



                                    </ul>
                                </li>
                                <li class="menu-item special-offers">
                                    <a href="special-offers.html"><i class="icon_ribbon"></i> Special Offers</a>
                                </li>
                                <li class="menu-item hotel ">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_building_alt"></i> List</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="hotel-list.html">hotel list</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-list-wide.html">hotel list-wide</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-list-right-sidebar.html">hotel list-sidebar</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-list-fullwidth.html">hotel list-fullwidth</a>
                                        </li>



                                    </ul>
                                </li>
                                <li class="menu-item shortcodes">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_map"></i> Hotels</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="active" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="hotel-detail.html">hotel detail</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-detail-travel-info.html">hotel detail-travel info</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-detail-payment.html">hotel detail-payment</a>
                                            <a role="menuitem" tabindex="-1" href="hotel-detail-confirm.html">hotel detail-confirm</a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li class="menu-item contact ">
                                    <a href="contact.html"><i class="icon_contacts"></i> Contact</a>
                                </li>

                            </ul>

                            <select class="top-drop-menu nav visible-sm visible-xs visible-md">
                                <optgroup label="Homepage">
                                </optgroup>
                                <optgroup label="Contact">
                                    <option value="contact.html">
                                        Contact
                                    </option>
                                </optgroup>
                            </select>
                        </nav>

                    </div><!-- /#main-menu -->
                </div>

            </div>
        </header><!-- /#header -->
        <section id="featured" class="wide-fat">
                <div class="head-image-texts">
                    <div class="texts">
                    <h1>Enjoy Wonderful Feelings</h1>
                    <p>Proin faucibus malesuada dui, ut porta arcu pretium consequat. Ut iaculis dui at gravida vehicula. Donec malesuada suscipit sem sit amet pulvinar....</p>
                    </div>
                    </div>
            <div class="featured-inner">
                <div class="slider">
                    <div id="top-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="tour/public/images/content/slider02.jpg" alt="Featured Image" />
                            </li>
                            <li>
                                <img src="tour/public/images/content/slider02.jpg" alt="Featured Image" />
                            </li>
                            <li>
                                 <img src="tour/public/images/content/slider02.jpg" alt="Featured Image" />
                            </li>
                        </ul><!-- /.slides -->
                        <div class="opener-area">

                            <a  href="#" class="open-btn open-close-btn"><i class="fa fa-chevron-circle-right"></i></a>
                            <ul class="social-icons vertical">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                                <li><a href="#" class="fa fa-vimeo-square"></a></li>
                            </ul>
                        </div>
                        <div class="featured-overlay">

                            <a id="close-form" href="#" class="button close open-close-btn"><i class="icon_close_alt2"></i></a>

                            <div class="featured-overlay-inner">


                                <form class="location-search" id="formSearch"  method="post">

                                    <div class="search-field">
                                        <div class="col-field-left">
                                            <label for="from-search">From</label><br />
<!--Lấy giá trị điểm bắt đầu-->                                        
                                        <select class="select" id="from-search" name="data[Search][from]" type="text" >
                                            <option></option>
                                            <?php if ($data['schedules']) {
                                                foreach ($data['schedules'] as $schedules) {
                                                    echo "<option value = ".$schedules['id'].">".$schedules['name']."</option>";
                                                }
                                            }?>
                                        </select>
                                        </div>
                                          <div class="col-field-right">
                                            <label for="to-search">To</label><br />                       
                                            <select class="select" name="data[Search][to]" id="to-search" type="text" >                                                 
                                                <option></option>
                                                <?php if ($data['schedules']) {
                                                    foreach ($data['schedules'] as $schedules) {
                                                        echo "<option value = ".$schedules['id'].">".$schedules['name']."</option>";
                                                    }
                                                }?>
                                            </select>
                                        </div>
                                    </div><!-- /.search-field -->
                                    

                                    <div class="search-field">

                                        <div class="col-field-left">
                                            <label for="check-in-date">Check in date</label>
                                            <br />
<!--Lấy giá tri ngày bắt đầu đi-->                                              
                                            <input id="check-in-date" class="traveline_date_input" type="text" value="" name="data[Search][time_start]" />
                                        </div>

                                        <div class="col-field-right">
                                            <label for="check-out-date">Check out date</label>
                                            <br />
<!--Lấy giá tri ngày kết thúc-->                                                
                                            <input id="check-out-date" class="traveline_date_input" type="text" value="" name="data[Search][time_end]" />
                                        </div>                                  

                                    </div><!-- /.search-field -->

                                    <div class="search-field">  

                                        <div class="col-field-left">

                                            <div class="money-field">
                                                <label for="money">Money</label>
                                                <br />
<!--Lấy giá trị giá tiền-->                                                 
                                                <input id="moneyfiled" type="text" name="data[Search][costs]" />
                                            </div>      

                                        </div>
                                    </div><!-- /.search-field -->   

                                    <div class="search-field">

<!--sumit get dữ liệu -->             <input id="btnSearch" type="submit" class="button wide-fat" value="Search" />

                                    </div><!-- /.search-field -->                           

                                </form><!-- /form.location-search -->
                                <div class="social-networks">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="social_facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="social_twitter"></i></a></li>
                                        <li class="vimeo"><a href="#"><i class="social_vimeo"></i></a></li>
                                        <li class="rss"><a href="#"><i class="social_rss"></i></a></li>
                                    </ul>
                                </div><!-- /.social-networks -->
                            </div><!-- /.featured-overlay-inner -->

                        </div><!-- /.featured-overlay -->

                    </div>
                </div><!-- /.slider -->                 


            </div><!-- /.featured-inner -->

        </section><!-- /#featured -->

        <br/><br/>
    </div> <!-- end site -->


            </section><!-- /#awesome-destinations.section -->


          <section id="amazing-tours" class="section section-amazing-tours wide-fat">
                <div class="container"> 
                    <div class="row">
                        <?php if (isset($data['search_out'])) {
                            foreach ($data['search_out'] as $tours) { ?>
                                <div class="col-xs-12 col-md-4">
                                    <div class="mix col-xs-12 tour-category-item amazing-tours-item" >
                                        <div class="inner">
                                            <h3 class="category-heading"><?php echo $tours['name']; ?></h3>
                                            <div class="featured-tour">
                                                <div class="image" >
                                                    <div class="hover">
                                                        <a href="#" class="readmore-link ">
                                                            <span class="fa-stack fa-lg">
                                                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                                                <i class="fa fa-chevron-right fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="permanent-link ">
                                                            <span class="fa-stack fa-lg">
                                                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                                                <i class="fa fa-link fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <img src="images/content/featured-tour-4.png" alt="Siam Paragon, Bangkok" class="responsive-image">
                                                </div>
                                                <div class="entry"> 
                                                    <article class="entry-content">
                                                        <h1><a href="#" title="Siam Paragon, Bangkok"><?php echo $tours['name']; ?></a></h1>
                                                        <p>
                                                            <?php echo $tours['content']; ?>
                                                        </p>
                                                    </article>
                                                    <div class="entry-meta">
                                                        <div class="star-holder"><div class="star" data-score="3"></div></div>
                                                        <span class="review"><a href="#">24 Reviews</a></span>
                                                        <span class="go-detail"><a href="#">More</a></span>
                                                    </div>                          
                                                </div><!--/.entry -->
                                            </div><!-- /.featured-tour -->
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            <?php }
                        } else if ($data['tours']) {
                            foreach ($data['tours'] as $tours) { ?>
                                <div class="col-xs-12 col-md-4">
                                    <div class="mix col-xs-12 tour-category-item amazing-tours-item" >
                                        <div class="inner">
                                            <h3 class="category-heading"><?php echo $tours['name']; ?></h3>
                                            <div class="featured-tour">
                                                <div class="image" >
                                                    <div class="hover">
                                                        <a href="#" class="readmore-link ">
                                                            <span class="fa-stack fa-lg">
                                                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                                                <i class="fa fa-chevron-right fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="permanent-link ">
                                                            <span class="fa-stack fa-lg">
                                                                <i class="fa fa-circle-o fa-stack-2x"></i>
                                                                <i class="fa fa-link fa-stack-1x"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <img src="images/content/featured-tour-4.png" alt="Siam Paragon, Bangkok" class="responsive-image">
                                                </div>
                                                <div class="entry"> 
                                                    <article class="entry-content">
                                                        <h1><a href="#" title="Siam Paragon, Bangkok"><?php echo $tours['name']; ?></a></h1>
                                                        <p>
                                                            <?php echo $tours['content']; ?>
                                                        </p>
                                                    </article>
                                                    <div class="entry-meta">
                                                        <div class="star-holder"><div class="star" data-score="3"></div></div>
                                                        <span class="review"><a href="#">24 Reviews</a></span>
                                                        <span class="go-detail"><a href="#">More</a></span>
                                                    </div>                          
                                                </div><!--/.entry -->
                                            </div><!-- /.featured-tour -->
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                    </div>

                    <button class="load-more button wide-fat" >Load More</button>
                </div>



            </section>
            <footer id="footer-2" class="widefat ">



                <div class="container">


                    <div class="col-xs-12 ">
                        <ul class="footer-social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                            <li><a href="#" class="fa fa-tumblr"></a></li>
                            <li><a href="#" class="fa fa-vimeo-square"></a></li>
                        </ul>
                      <!--  <p>
                            Traveline - Copyright 2014. Designed by jThemes<br>
                            Email: info@example.com<br>
                            Address: Lorem Ipsuum, Manchester M12 345, UK<br>
                            +44 123 456 7890
                        </p> -->
                    </div>







                </div>



            </footer><!-- /#footer -->




        </div><!-- /#site -->



        <!-- Scripts -->

        <!-- jQuery -->


        <script src="tour/public/styles/inc/js/jquery-1.10.2.min.js"></script>
        <script src="tour/public/styles/inc/js/jquery-migrate-1.2.1.js"></script>

        <!-- modernizer -->


        <script src="tour/public/styles/inc/js/modernizr.custom.63321.js"></script>

        <!-- FlexSlider -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.flexslider-min.js"></script>  


        <!-- CatSlider -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.catslider.js"></script>   


        <!-- Datepicker -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.ui.datepicker.min.js"></script>   


        <!-- Masonry -->
        <script type="text/javascript" src="tour/public/styles/inc/js/masonry.min.js"></script>    



        <!-- Increase/decrease quantity -->
        <script type="text/javascript" src="tour/public/styles/inc/js/increase-decrease-qty.js"></script>  

        <!-- Mixitup (filterable item) -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.mixitup.min.js"></script> 


        <!-- Google Map JS -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script type="text/javascript" src="tour/public/styles/inc/js/google-map-infobox.js"></script>     


        <!-- Responsive Google Map (Fitmaps) JS -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.fitmaps.js"></script> 

        <!-- Chozen UI JS -->
        <script type="text/javascript" src="tour/public/styles/inc/js/chosen.jquery.js"></script>  


        <!-- Checkbox/Radio UI JS -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.screwdefaultbuttonsV2.js"></script>   

        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <!-- Range Slider UI JS #2 -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.mousewheel.min.js"></script>  
        <script type="text/javascript" src="tour/public/styles/inc/js/jQRangeSlider-min.js"></script>  
        <!-- bootstrap JS -->
        <script type="text/javascript" src="tour/public/styles/inc/bootstrap/js/bootstrap.min.js"></script>        
        <!-- raty JS -->
        <script type="text/javascript" src="tour/public/styles/inc/js/jquery.raty.min.js"></script>    
        <!-- Custom JS -->
        <script type="text/javascript" src="tour/public/styles/inc/js/custom.js"></script> 
