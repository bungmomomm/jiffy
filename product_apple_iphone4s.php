<?php require_once('header.php'); ?>
<body class="product-scroll">
<?php require_once('nav.php') ?>   
            <div class="main">
                <div class="container product pillbox">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 product-slider-inner">
                            <h2 class="header2a text-blue">iPhone 4S</h2>
                            <p class="lead-summary">Elegant and sophisticated device for your</p>
                            <div class="device-sliders">
                                <div class="image-preview"><img id="mainProductImage" src='images/products/apple_iphone4s.jpg' data-zoom-image="images/products/apple_iphone4s.jpg" /></div>
                                <div id="productImageGallery" class="owl-carousel">
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone4s.jpg" data-zoom-image="images/products/apple_iphone4s.jpg"><img src="images/products/thumb_iphone4s_1.jpg" alt="iPhone 4s" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone4s.jpg" data-zoom-image="images/products/apple_iphone4s.jpg"><img src="images/products/thumb_iphone4s_2.jpg" alt="iPhone 4s" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone4s.jpg" data-zoom-image="images/products/apple_iphone4s.jpg"><img src="images/products/thumb_iphone4s_3.jpg" alt="iPhone 4s" /></a></div>
                                    <div class="item"><a href="#" data-image="images/products/apple_iphone4s.jpg" data-zoom-image="images/products/apple_iphone4s.jpg"><img src="images/products/thumb_iphone4s_1.jpg" alt="iPhone 4s" /></a></div>
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
                                                    <option class="goldColPick" value="pink">Gold</option>
                                                    <option class="blackColPick" value="pink">Black</option>
                                                    <option class="whiteColPick" value="pink">White</option>
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
                                        <div class="col-md-7 col-xs-6"><label>Due Monthly for 18 Months</label></div>
                                        <div class="col-md-5 col-xs-6 price text-right">$24.25</div>
                                        <div class="clearfix"></div>                                       
                                    </div>
                                    <a href="#compareserviceplanModal" data-toggle="modal" data-target="#compareserviceplanModal" class="compare-service-plan">Compare with other Service Plan</a>
                                    <p class="text-summary">*Tax due at sale. If you cancel your wireless service before your 20-month plan is completed, you agree to pay the full balance remaining on your device. Req. 20 mo. 0% APR Installment Agreement, new activation and qualifying monthly data and voice plan...<a href="#" class="readmore">read more</a></p>
                                </div>
                                <a data-target="#accountModal" data-toggle="modal" href="#accountModal" class="btn btn-addtocart">Add to cart<i class="arrow-right">&nbsp;</i></a>
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
                                        <div class="col-md-6 col-xs-6">
                                            <h5 class="featurette-heading">Retina Display Experience</h5>
                                            <p>Everything you see and do on iPhone 4s looks amazing. That’s because the Retina display’s pixel density is so high, your eye is unable to distinguish individual pixels.</p>
                                            <br/>
                                            <h5 class="featurette-heading">Specification</h5>
                                            <ul class="specification-lists">
                                                <li>3.5" retina display</li>
                                                <li>A5 chip</li>
                                                <li>Touch ID fingerprint sensor</li>
                                                <li>8 megapixel camera</li>
                                            </ul>
                                            <br/>
                                            <br/>                                                                                        
                                        </div>
                                        <div class="col-md-6 col-xs-6 pull-right-extreme text-right"><img class="img-responsive" src="images/products/spec_iphone4s_1.jpg" alt="Apple iPhone 5S" /><br/><br/><br/></div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-4 col-md-offset-4"><hr/><br/><br/><br/></div>
                                        <div class="clearfix"></div>   
                                        <div class="col-md-6 col-xs-6"><img class="img-responsive" src="images/products/spec_iphone4s_2.jpg" alt="Apple iPhone 5c" /></div>
                                        <div class="col-md-6 col-xs-6 pull-right">
                                            <h5 class="featurette-heading text-right">8MP iSight camera with HD video recording.</h5>
                                            <p class="text-right">Advanced optics, a custom lens, and an 8-megapixel sensor let you capture high-quality photos. And you can shoot beautiful movies in full 1080p HD.</p>
                                            <br/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="specification"></div>
                            <div role="tabpanel" class="tab-pane" id="inthebox"></div>
                        </div>
                        
                    </div>
                </div>    
                <!-- Modal -->
    <!-- Add to Cart -->    
    <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <h1 class="heading-modal">Add to Cart</h1>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>New Jiffy&trade; Mobile Customer? </h3>
                        <p>If you’re not already an Jiffy Mobile customer, continue shopping here.</p><br/><br/>
                        <div class="col-md-10 col-md-offset-1"><button class="btn btn-continue" id="btn-enter-zipcode">Continue</button></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Already a Customer ?</h3>
                        <p>Already an Jiffy Mobile customer? Click here to continue</p><br/><br/>
                        <div class="col-md-10 col-md-offset-1"><button class="btn btn-continue" id="btn-already-customer">Continue</button></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="or">or</div>
              </div>
            </div>
          </div><!-- /.modal-dialog -->
    </div>
    <!-- Confirm Add to Cart -->    
          <div class="modal fade" id="zipcodeModal" tabindex="-1" role="dialog" aria-labelledby="zipcodeModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Enter Your Zip Code</h1>
                    <p>Zip Code is used to check availibility product on your location. so you will not see the products that not in your area or it is out of stock in your area.</p>
                    <div class="register-form">
                    <form id="enter-zip" action="cart_process.php">
                        <div class="form-group">
                            <label for="inputname" class="col-sm-4 control-label">Enter your Zip Code</label>
                            <div class="col-sm-7"><input type="text" value="" class="form-control" /></div>
                            <div class="clearfix"></div>  
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"><button class="btn btn-continue">Next Step</button></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-dialog -->
         </div>
        <!-- Compare With Other Service Plan -->    
    <div class="modal fade" id="compareserviceplanModal" tabindex="-1" role="dialog" aria-labelledby="compareserviceplanModalLabel" aria-hidden="true" data-replace="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal"></button>              
              <div class="modal-body">                     
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-service-plan">
                            <h1 class="heading-modal">Compare With Other Service Plan</h1>   
                            <form role="form" id="form-compare">
                                <div class="form-group">    
                                    <h4>choose carrier</h4>                                   
                                    <div class="radio">
                                        <input id="atnt" type="radio" value="atnt" name="carrier">
                                        <label for="atnt"><span>AT&amp;T</span></label>
                                        <input id="verizon" type="radio" value="female" name="carrier">
                                        <label for="verizon"><span>Verizon</span></label>
                                        <input id="tmobile" type="radio" value="tmobile" name="carrier">
                                        <label for="tmobile"><span>T-Mobile</span></label>
                                        <input id="other" type="radio" value="other" name="carrier">
                                        <label for="other"><span>Other</span></label>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <h4>Number of lines you have :</h4>                                      
                                    <div class="radio">
                                        <input id="1" type="radio" value="1" name="lines">
                                        <label for="1"><span>1</span></label>
                                        <input id="2" type="radio" value="2" name="lines">
                                        <label for="2"><span>2</span></label>
                                        <input id="3" type="radio" value="3" name="lines">
                                        <label for="3"><span>3</span></label>
                                        <input id="4" type="radio" value="4" name="lines">
                                        <label for="4"><span>4</span></label>
                                        <input id="5" type="radio" value="5" name="lines">
                                        <label for="5"><span>5</span></label>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <h4>Data for each line :</h4>                                      
                                    <div class="radio">
                                        <input id="1gb" type="radio" value="1gb" name="data">
                                        <label for="1gb"><span>1GB</span></label>
                                        <input id="2gb" type="radio" value="2gb" name="data">
                                        <label for="2gb"><span>2GB - 3GB</span></label>
                                        <input id="3gb" type="radio" value="3gb" name="data">
                                        <label for="3gb"><span>4GB - 5GB</span></label>
                                        <input id="4gb" type="radio" value="4gb" name="data">
                                        <label for="4gb"><span>Unlimited</span></label>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <h4>Your current monthly bill (without taxes or fees) : </h4>   
                                    <div class="clearfix"></div>                             
                                    <div class="input-group">
                                        <div class="input-group-addon"><strong>$ &nbsp;</strong></div>
                                        <input type="text" placeholder="250" id="fee" class="form-control"/>
                                        <div class="input-group-addon">per month</div>
                                    </div>
                                </div><br/>
                                <button class="btn btn-continue">Estimate Your Savings  &nbsp;<i class="fa fa-angle-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sidebar">
                            <h3>What you could save switching from Verizon</h3>
                            <h1><small>$170 per month</small> $4,080 in 3 yrs</h1>
                            <p>Estimate based on info you provided. 
                            Does not include taxes, fees, or device 
                            pricing. Savings amounts may vary 
                            depending on usage and other 
                            factors. Plan features and limitations 
                            vary. Fastest nationwide 4G LTE 
                            network based on download speeds.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div><!-- /.modal-dialog -->
            </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jPushMenu.js"></script>
<script src="js/v2p.js"></script>
<script src='js/jquery.elevatezoom.js' type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn-enter-zipcode").click(function() {
        $("#accountModal").modal('hide');
        $("#zipcodeModal").modal('show');
    });
    
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn-already-customer").click(function() {
        $("#accountModal").modal('hide');
        $("#loginModal").modal('show');
    });
    
});
</script>
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