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
                        <div class="col-md-10 col-md-offset-1"><button class="btn btn-continue" data-toggle="modal" data-target="#loginModal">Continue</button></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="or">or</div>
              </div>
            </div>
          </div><!-- /.modal-dialog -->
    </div>
    <!-- Login -->    
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" data-replace="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <h1 class="heading-modal">Login</h1>
                <form id="login-form" role="form">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Email Address</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" value="" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Password</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" value="" />
                                <a href="#" class="forget-password">Forget your Password</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-5">
                                <button class="btn btn-login btn-continue">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
                <a href="#" data-dismiss="modal" class="back">&#171; Back</a>
              </div>
            </div>
          </div><!-- /.modal-dialog -->
    </div>

    <!-- Contact Info -->    
    <div class="modal fade" id="contactinfoModal" tabindex="-1" role="dialog" aria-labelledby="contactinfoModalLabel" aria-hidden="true" data-replace="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal"></button>
              <div class="modal-body">
                <div class="cart-process">
                    <div class="tab-cart-process-sm">
                        <ul>
                            <li class="active col-md-4"><a href="#">Contact Information</a></li>
                            <li class="col-md-4"><a href="#">Shipment Address</a></li>
                            <li class="col-md-4"><a href="#">Payment Info</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                <div id="contact-information">
                <h4 class="text-blue">Contact Information</h4>
                <p>Please provide  all the required contact information below.<br/>First and last names should match government-issued ID (e.g. driver's license)</p>
                <div class="register-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">First Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Last Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Primary Contact Number</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div> 
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Contact Type</label>
                        <div class="col-sm-7">
                            <div class="customized-arrow">
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>   
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Email Address</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Re-enter Email Address</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-7">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Send me special offers from Jiffy Mobile via email (you can unsubscribe at any time)
                            </label>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputname" class="col-sm-5 control-label">Preferred contact method</label>
                        <div class="col-sm-5">
                            <div class="customized-arrow">
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>   
                    <div class="clearfix"></div>   
                </div> 
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-5"><button class="btn btn-continue" data-toggle="modal" data-target="#shipmentModal">Next Step</button></div>
                </div>
                </div>
                </div>
              </div>
            </div>
        </div><!-- /.modal-dialog --> 
        
        <!-- Shipment -->
        <div class="modal fade" id="shipmentModal" tabindex="-1" role="dialog" aria-labelledby="shipmentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal"></button>
              <div class="modal-body">
                <div class="cart-process">
                    <div class="tab-cart-process-sm">
                        <ul>
                            <li class="col-md-4"><a href="#">Contact Information</a></li>
                            <li class="active col-md-4"><a href="#">Shipment Address</a></li>
                            <li class="col-md-4"><a href="#">Payment Info</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div id="contact-information">
                        <!-- Ship To Address -->
                        <h4 class="text-blue">Ship to Address</h4>
                        <p>By default, your Ship To Address is the same as your Bill to Address.</p>   
                        <p><strong>Note:</strong> Changing your Ship To Address may effect your total due today, as sales tax is based
                        on the shipping address provided. Also, by choosing an alternate address, your shipment 
                        maybe delayed due to an additional review needed to validate it.</p>   
                        <div class="payment-form">
                        <a href="#">Enter a different address</a>
                        <hr />
                        </div>
                        <!-- Wireless Place -->
                        <h4>Wireless Place of Primary Use Address</h4>
                        <p>By default, your Bill to Address is considered your place of primar use, which <br/>
                        is used to calculate taxes on your monthly service.</p>   
                        <div class="payment-form">
                        <a href="#">Enter a different address</a>
                        <hr />
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4 pull-right"><button class="btn btn-continue" data-toggle="modal" data-target="#paymentModal">Next Step &nbsp; <i class="fa fa-angle-right"></i></button></div>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>  
          <!-- Payment --> 
          <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal"></button>
              <div class="modal-body">
                <div class="cart-process">
                    <div class="tab-cart-process-sm">
                        <ul>
                            <li class="col-md-4"><a href="#">Contact Information</a></li>
                            <li class="col-md-4"><a href="#">Shipment Address</a></li>
                            <li class="active col-md-4"><a href="#">Payment Info</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                <div id="contact-information">
                <!-- Payment Information -->
                <h4 class="text-blue">Bill to Address</h4>
                <div class="register-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card Type</label>
                        <div class="col-sm-6">
                            <div class="customized-arrow">
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>   
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Name on card</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="name_cc" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card Number</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="card_number" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card Security Code</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="card_security_code" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>                     
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Expiration Date</label>
                        <div class="col-sm-4">
                            <div class="customized-arrow">
                                <select>
                                    <option>Select Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="customized-arrow">
                                <select>
                                    <option>Select Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card's billing Address</label>
                        <div class="col-sm-5">
                            <div class="radio">
                                <label>
                                  <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                                  Same as Bill to Address
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                  <input type="radio" checked="" value="option2" id="optionsRadios2" name="optionsRadios">
                                  Use a new Address
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="clearfix"></div>   
                </div> 
                </div>
                <br/><br/>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4"><button class="btn btn-continue" data-toggle="modal" data-target="#zipcodeModalLabel">Register</button></div>
                </div>
                </div>
                </div>
              </div>
            </div>
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
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Enter your Zip Code</label>
                        <div class="col-sm-7"><input type="text" value="" class="form-control" /></div>
                        <div class="clearfix"></div>  
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4"><button class="btn btn-continue">Next Step</button></div>
                        <div class="clearfix"></div>
                    </div>
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
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/jquery.nouislider.all.min.js" type="text/javascript"></script> 
<script src="js/jquery.nouislider.min.js" type="text/javascript"></script> 
<script src="js/wNumb.js" type="text/javascript"></script> 
<script src="js/jquery.liblink.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
<script src="js/bootstrap-slider.js" type="text/javascript"></script> 
<script src='js/jquery.elevatezoom.js' type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn-enter-zipcode").click(function() {
        $("#accountModal").modal('hide');
        $("#zipcodeModal").modal('show');
    }),
    $("#btn-already-customer").click(function() {
        $("#accountModal").modal('hide');
        $("#loginModal").modal('show');
    })
    ;
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
$('#amount-data').noUiSlider({
	start: [ 0, 70 ],
	step: 10,
	margin: 20,
	connect: true,
	direction: 'ltr',
	orientation: 'horizontal',
	
	// Configure tapping, or make the selected range dragable.
	behaviour: 'tap-drag',
	
	// Full number format support.
	format: wNumb({
        prefix: '$'
	}),
	
	// Support for non-linear ranges by adding intervals.
	range: {
		'min': 0,
		'max': 100
	}
});

// Reading/writing + validation from an input? One line.
$('#amount-data').Link('lower').to($('#value-input'));

// Write to a span? One line.
$('#amount-data').Link('upper').to($('#value-span'), 'html');

// Optional addon: creating Pips (Percentage In Point);
$('#amount-data').noUiSlider_pips({
	mode: 'positions',
	values: [10, 20, 30, 50, 70, 100],
	density: 3,
    format: wNumb({
		postfix: ' GB',
	}),
});

</script>

<script type="text/javascript">
$(document).ready(function(){
    $('.popoverData').popover();
    $('.popoverOption').popover({ trigger: "hover" });
    $('#cart-bubble-container').popover({ trigger: "hover" });
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields = 5;
        var wrapper = $(".box-product-compare");
        var add_button = $(".compare");
        
        var x= 0;
            if (x == 0){
                $("div.comparision-product-wrapper").hide();
            } else {
                $("div.comparision-product-wrapper").show();
            }                
            $(add_button).click(function(e) {
                e.preventDefault();
                if(x < max_fields) {
                    x++;
                    $(wrapper).append('<div class="product-compare-' + x + '"><button class="btn-close remove_field removeProductCompare' + x + '"></button><a href="#" class="product-image-compare"><img class="img-responsive" src="images/img-compare-product-2.png" alt="Nexus 5" title="Product Compare" /></a></div>').fadeIn(300); //add input box                
                    
                }
                });
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div.product-compare').remove(); x--;
            }),        
        
        $('#productTab a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        }),
                    
        /* Price Range Slider */
        $("#price_range").slider({}),
        $("#mainProductImage").elevateZoom({gallery:'productImageGallery', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}),
        $("#mainProductImage").bind("click", function(e) { var ez = $('#mainProductImage').data('elevateZoom');	$.fancybox(ez.getGalleryList()); return false; }),
        $(".plans-carousel").owlCarousel({
            navigation : true, // Show next and prev buttons
            pagination : false,
            autoPlay: false,
             navigationText: false,
            items : 6,
            itemsDesktop : [1199,6],
            itemsDesktopSmall : [979,1]
        }),
        $("#productImageGallery").owlCarousel({
            navigation : true, // Show next and prev buttons
            pagination : false,
            autoPlay: false,
             navigationText: false,
            items : 3,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        }); 
    });
</script>

</body>
</html>