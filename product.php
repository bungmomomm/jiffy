<?php require_once('header.php'); ?>
<body class="product-scroll">
<?php require_once('nav.php') ?>
            <div class="main">
                <div class="container product pillbox">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 product-slider-inner">
                            <h2 class="header2a text-blue">iPhone 5c</h2>
                            <p class="lead-summary">Color makes a statement and reveals your personality</p>
                            <div class="device-sliders">
                                <div class="image-preview"><img id="mainProductImage" src='images/products/apple_iphone5c.jpg' data-zoom-image="images/products/apple_iphone5c_single.jpg" /></div>
                                <div id="productImageGallery" class="owl-carousel">
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone5c.jpg" data-zoom-image="images/products/apple_iphone5c_single.jpg"><img src="images/products/thumb_iphone5c_1.jpg" alt="iPhone 5c" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone5c.jpg" data-zoom-image="images/products/apple_iphone5c_single.jpg"><img src="images/products/thumb_iphone5c_2.jpg" alt="iPhone 5c" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone5c.jpg" data-zoom-image="images/products/apple_iphone5c_single.jpg"><img src="images/products/thumb_iphone5c_3.jpg" alt="iPhone 5c" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone5c.jpg" data-zoom-image="images/products/apple_iphone5c_single.jpg"><img src="images/products/thumb_iphone5c_1.jpg" alt="iPhone 5c" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 details product-card">
                            <div class="product-selection-area">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Select Color</label>
                                            <div class="customized-arrow">
                                                <select id="color-option" onchange="this.className=this.options[this.selectedIndex].className" class="pinkColPick">
                                                    <option class="pinkColPick" value="pink">Pink</option>
                                                    <option class="blueColPick" value="blue">Blue</option>                                            
                                                    <option class="yellowColPick" value="yellow">Yellow</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Capacity</label>
                                            <div class="customized-arrow">
                                            <select id="capacity-option">
                                                <option>16 GB</option>
                                                <option>32 GB</option>                                            
                                                <option>64 GB</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Quantity</label>
                                            <div class="customized-arrow">
                                            <select id="qty-option">
                                                <option>1</option>
                                                <option>2</option>                                            
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group select-payment">
                                    <h5>Select Payment</h5>
                                    <div class="radio">
                                        <label><input type="radio" value="1" /> <strong>Jiffy Early Upgrade</strong></label>
                                        <div class="label-box row">
                                            <div class="col-md-7 label-jiffy-upgrade"><span>I want to get a new device in : </span></div>
                                            <div class="col-md-4 select-month-upgrade">
                                                <div class="customized-arrow">
                                                    <select id="qty-option">
                                                        <option>9 Months</option>
                                                        <option>18 Months</option>
                                                        <option>36 Months</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>  
                                        </div>                                          
                                    </div>
                                    <div class="radio"><label><input type="radio" value="0" /> Buy Full Price</label></div>
                                </div>
                                <div class="form-group description-product">
                                    <div class="row">
                                        <div class="col-md-7"><label>Due Monthly for 18 Months</label></div>
                                        <div class="col-md-5 price text-right">$24.25</div>
                                        <div class="clearfix"></div>                                       
                                    </div>
                                    <a href="#compareserviceplanModal" data-toggle="modal" data-target="#compareserviceplanModal" class="compare-service-plan">Compare with other Service Plan</a>
                                    <p class="text-summary">*Tax due at sale. If you cancel your wireless service before your 20-month plan is completed, you agree to pay the full balance remaining on your device. Req. 20 mo. 0% APR Installment Agreement, new activation and qualifying monthly data and voice plan...<a href="#" class="readmore">read more</a></p>
                                </div>
                                <button class="btn btn-addtocart">Add to cart<i class="arrow-right">&nbsp;</i></button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Poduct Tab Specification, Overview, In The Box -->
                        <ul id="productTab" class="product-tabs" role="tablist">
                            <li role="overview" class="active col-md-4 col-xs-4"><a href="#overview" aria-controls="home" role="tab" data-toggle="tab">Overview</a></li>
                            <li role="specification" class="col-md-4 col-xs-4"><a href="#specification" aria-controls="profile" role="tab" data-toggle="tab">Specification</a></li>
                            <li role="inthebox" class="col-md-4 col-xs-4"><a href="#inthebox" aria-controls="messages" role="tab" data-toggle="tab">In the Box</a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="overview">
                                <h4 class="sub-heading">Meet the phone that's built for your life</h4>
                                <div class="apple iphone-5c overview">
                                    <div class="row">
                                        <div class="col-md-5"><img src="images/products/spec_iphone5c_1.jpg" alt="Apple iPhone 5c" /></div>
                                        <div class="col-md-7">
                                            <h5 class="featurette-heading">For the colorful.</h5>
                                            <p>Color makes a statement and reveals your personality. And iPhone 5c comes in five unlike-anything-else colors. Add one of the six Apple-designed cases (sold separately), and it quickly goes from colorfully cool to impossible to ignore.</p>
                                            <br/>
                                            <h5 class="featurette-heading">Specification</h5>
                                            <ul class="specification-lists">
                                                <li>4 inch retina display</li>
                                                <li>A6 Chip</li>
                                                <li>8 megapixel camera</li>
                                                <li>1080p HD video recording</li>
                                            </ul>
                                            <br/>
                                            <br/>                                            
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-4 col-md-offset-4"><hr/><br/><br/></div>
                                        <div class="clearfix"></div>                                        
                                        <div class="col-md-5">
                                            <h5 class="featurette-heading">Engineered to the brightest specifications.</h5>
                                            <p>A6 chip. 8MP iSight camera. 4-inch Retina display. Ultrafast LTE wireless. iPhone 5c has the things that made iPhone 5 an amazing phone — and more, including iOS 7. As a result, it’s as powerful as it is expressive.</p>
                                            <br/>
                                        </div>
                                        <div class="col-md-7"><img src="images/products/spec_iphone5c_2.jpg" alt="Apple iPhone 5c" /></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="specification"></div>
                            <div role="tabpanel" class="tab-pane" id="inthebox"></div>
                        </div>
                        
                    </div>
                </div>    
            </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jPushMenu.js"></script>
<script src="js/v2p.js"></script>
<script src='js/jquery.elevatezoom.js' type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();
      });
      //]]>
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#productTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        }),
        $("#mainProductImage").elevateZoom({gallery:'productImageGallery', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}),
        $("#mainProductImage").bind("click", function(e) { var ez = $('#mainProductImage').data('elevateZoom');	$.fancybox(ez.getGalleryList()); return false; }),
        $("#productImageGallery").owlCarousel({
            navigation : true, // Show next and prev buttons
            pagination : false,
            autoPlay: false,
             navigationText: false,
            items : 3
        });; 
    });
</script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
</body>
</html>