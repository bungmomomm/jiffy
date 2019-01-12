<?php require_once('header.php'); ?>
<body class="cart-scroll">
<?php require_once('nav.php') ?>
<div class="main">
    <div class="container cart-process cart-summary pillbox">
        <div id="checkout">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <h2 class="text-blue pull-left">Shopping Cart</h2>
                    <ul class="account-cart">
                        <li><a href="#" data-toggle="modal" data-target="#savecartModal">Save cart</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#retrieveModal">Retrieve cart</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#emptycartModal">Empty cart</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-3"><a href="cart_process5.php" class="btn btn-checkout">Proceed Checkout</a></div>
                <div class="clearfix"></div>
            </div>
            <!-- Jiffy Mobile -->
            <div class="panel panel-default panel-checkout-payment">
                <div class="panel-heading">Your Jiffy&trade; Mobile</div>
                <div class="panel-body">
                    <h2 class="transfer-number">Transfer Your Number &nbsp;<a href="#" data-toggle="modal" data-target="#eligibilityModal">How does this work?</a></h2>
                    <div class="check-current-number">Want to see if you can keep current number &nbsp;<a href="#" data-toggle="modal" data-target="#eligibilityModal">Check eligibility <i class="fa fa-angle-right"></i></a></div>
                    <hr/>
                    <table class="table table-checkout-payment">
                      <tbody>
                        <tr>
                          <td rowspan="8"><a href="#" class="img-product"><img src="images/product-thumbnail.png" alt="Jiffy Mobile" /></a></td>
                          <td class="lead"><h2 class="heading-device">Device 1 :</h2></td>
                          <td><a href="#"  data-toggle="modal" data-target="#removecartModal" class="remove-device">Remove Device 1</a></td>
                          <td>&nbsp;</td>
                          <td class="text-center">Monthly</td>
                          <td class="text-center">Added to 1 Bill</td>
                          <td class="text-center">Due Today</td>
                        </tr>
                        <tr>
                          <td class="lead">Device :</td>
                          <td><a href="product_apple_iphone5s.php" class="product">Apple iPhone 5S - 16GB - White</a><span class="contract">with 2-year contract</span></td>
                          <td><a href="cart_process3.php" class="change">Change</a></td>                          
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>$199,99</td>
                        </tr>
                        <tr>
                          <td class="lead">Plan :</td>
                          <td><a href="#" class="service">Jiffy&trade; Mobile Protection Plan</a></td>
                          <td><a href="cart_process.php" class="change">Change</a></td>
                          <td>$23,99</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="lead">Services :</td>
                          <td><a href="cart_process2.php" class="service">Jiffy&trade; Mobile Protection Plan</a></td>
                          <td><a href="#" class="remove">Remove</a></td>
                          <td>$9,99</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><a href="#" class="service">Detailed Billing</a></td>
                          <td><a href="#" class="remove">Remove</a></td>
                          <td>$1,99</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><a href="#" class="service">Jiffy&trade; Mobile Navigator</a></td>
                          <td><a href="#" class="remove">Remove</a></td>
                          <td>$9,99</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>One-Time Activation Fee</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>$23,00</td>
                          <td>&nbsp;</td>
                        </tr>
                      </tbody>
                      <!-- Subtotal -->
                      <tfoot class="subtotal">
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">Monthly</td>
                          <td class="text-center">Added to 1 Bill</td>
                          <td class="text-center">Due Today</td>
                        </tr>
                        <tr>
                          <td colspan="4" class="subtotal-heading">Jiffy&trade; Mobile Subtotal*</td>
                          <td>$44,97</td>
                          <td>$23,00</td>
                          <td>$199,99</td>
                        </tr>
                      </tfoot>
                    </table>
                    <hr/>
                    <table class="table table-addmore-device">
                      <tbody>
                        <tr>                          
                          <td class="lead"><h2 class="heading-device">Add More Device</h2><p>Add more devices to your Harmony&trade;</p></td>
                          <td class="text-center"><a href="shop.php" class="add-device">Add Devices &nbsp; <i class="fa fa-angle-right"></i></a></td>
                        </tr> 
                        <tr>                          
                          <td class="lead"><h2 class="heading-device">Add More Services</h2><p>Add more devices to your Harmony&trade;</p></td>
                          <td class="text-center"><a href="cart_process2.php" class="add-device">Add Services &nbsp; <i class="fa fa-angle-right"></i></a></td>
                        </tr> 
                        <tr>                          
                          <td class="lead"><h2 class="heading-device">Add More Accessories</h2><p>Add more devices to your Harmony&trade;</p></td>
                          <td class="text-center"><a href="cart_process3.php" class="add-device">Add Accesories &nbsp; <i class="fa fa-angle-right"></i></a></td>
                        </tr>
                      </tbody>
                    </table>                  
                    
                </div>
            </div>
            <!-- Summary -->
            <div class="panel panel-default panel-checkout-payment">
                <div class="panel-heading">Your Summary</div>
                <div class="panel-body">
                    <table class="table table-summary-checkout">
                        <tbody>                        
                        <tr>
                          <td>&nbsp;</td>  
                          <td>&nbsp;</td>
                          <td class="text-center">Monthly</td>
                          <td class="text-center">Added to 1 Bill</td>
                          <td class="text-center">Due Today</td>
                        </tr>
                        <tr>
                          <td rowspan="2" class="lead">Shipping or In-Store Pick Up</td>
                          <td>
                              <div class="radio">
                                <label>
                                    <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"/>Express - Next business day, when device is available for shipping(FREE)
                                </label>
                              </div>
                          </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="free text-center">Free</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="radio">
                                <label>
                                    <input type="radio" checked="" value="option2" id="optionsRadios2" name="optionsRadios"/>In-store Pick Up (FREE)
                                </label>
                              </div>
                          </td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="lead">Estimated Sales Tax**</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>   
                          <td>&nbsp;</td>                       
                          <td class="text-center">$5,99</td>                          
                        </tr>
                        <tr>
                          <td class="lead">Coupon Code</td>
                          <td><a href="#">Add Coupon Code</a></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td class="lead">Employee Refferral ID</td>
                          <td><a href="#">Add Coupon Code</a></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td class="text-center">&nbsp;</td>
                        </tr>
                        <tr class="proceed">
                          <td rowspan="3" colspan="3">&nbsp;</td>  
                          <td>Due Today*</td>
                          <td class="total">$258,47</td>
                        </tr>
                        <tr class="proceed">
                          <td>Due Monthly*</td>
                          <td class="subtotal">$69,99</td>
                        </tr>
                        <tr class="proceed">
                          <td>Added to 1<sup>st</sup> Bill</td>
                          <td class="subtotal">$23,00</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="row"><div class="col-md-3 pull-right"><button class="btn btn-checkout">Proceed Checkout</button></div></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <br/>
            <div class="process-information">
                <p><small>* "Subtotal/Due Monthly/Added to 1st Bill" do not include applicable taxes, Pay-Per-Use charges, State and Federal Universal Service Charges, Regulatory Cost Recovery Fee, Administrative Fee and other surcharges. "Due Today" payments for devices/accessories will be charged to your debit/credit card when items are shipped. Please visit Additional Charges to view the estimates of the discretionary charges for your area. Your first month's statement will include a one-time activation fee, prorated monthly charge, as well as one month's charge in advance. If you are keeping an existing plan, the monthly fees you already pay will not be reflected in the shopping cart.</small></p>
                <p><small>** Estimated sales tax is based on the ZIP Code you provided to us. Actual sales tax may vary and is based on your shipping ZIP Code.</small></p>
                <p><small>Postpaid orders will be processed and shipped subject to credit approval, inventory availability, and validation of a proper shipping address and other information. Orders received after 4 p.m. CT will be processed the next business day. Inventory, credit, or other issues may delay shipment. No holiday, Saturday, or Sunday delivery. Shipping policy is subject to change. Please note: It may take up to 24 hours to process your order if there are any issues with the credit approval process and/or the shipping address validation process. This 24-hour period is not included in the delivery time and should be taken into account in your order placement timing. Delivery signatures may be required. Priority shipments to Puerto Rico and the U.S. Virgin Islands may take more than 2 business days. Actual delivery date may also be affected by government processing.</small></p>
            </div>
        </div>
    </div>
</div>
    
    <!-- Check Eligibility -->    
          <div class="modal fade" id="eligibilityModal" tabindex="-1" role="dialog" aria-labelledby="eligibilityModalLabel" aria-hidden="true">
              <div class="modal-dialog col-md-8 col-md-2 center-block">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Transfer Your Number to Jiffy Mobile</h1>
                    <div role="tabpanel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#check-eligibility" aria-controls="check-eligibility" role="tab" data-toggle="tab">Check Eligibility</a></li>
                        <li role="presentation"><a href="#learn-faq" aria-controls="learn-faq" role="tab" data-toggle="tab">Learn More FAQs</a></li>
                      </ul>
                    
                      <!-- Tab panes -->
                      <div class="tab-content tab-content-eligibility">
                        <div role="tabpanel" class="tab-pane active" id="check-eligibility">
                            <h3 class="margin-top-0">Check Eligibility</h3>
                            <p>Keep your current phone number - it's easy! Switch today and become part of the nation's fastest mobile broadband network.</p>
                            <hr />
                            <p>To check eligibility, enter your phone number.</p>
                            <p>To complete the transfer, you'll need to provide additional information about your current account during checkout after you finish shopping for a new phone and plan.</p>
                            <div class="row margin-top-20 margin-bottom-20">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="col-md-3 no-padding">
                                        <label>Phone Number</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" placeholder="NPA" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" placeholder="NXX" />
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" placeholder="XXXX" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                            <div class="col-md-9"><p>To check the status of a transfer in progress, visit jiffymobile.com/port</p></div>
                            <div class="col-md-3 pull-right"><button class="btn btn-continue btn-sm">Check Eligibility</button></div>
                            <div class="clearfix"></div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="learn-faq"></div>
                      </div>
                    
                    </div>
                    
                    
                    <div class="row">
                            <div class="col-md-4"><a href="#" data-dismiss="modal" class="back margin-top-10">Cancel</a></div>
                            <div class="col-md-4 pull-right"><button class="btn btn-continue">Save Cart</button></div>
                            <div class="clearfix"></div>
                    </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-dialog -->
         </div>
         <!-- Save Cart -->    
         <div class="modal fade" id="savecartModal" tabindex="-1" role="dialog" aria-labelledby="zipcodeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Save Cart</h1>
                    <p>Provide your email address, and we'll save your cart for 30 days.</p>
                    <p>Please note, we may also use your email address to send you information about other special offers and deals from AT&amp;T.</p>
                    <p>We can't guarantee the availability or pricing of equipment or services when you return to retrieve your cart.</p>
                    <div class="register-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Email address</label>
                        <div class="col-sm-7"><input type="text" value="" class="form-control" require placeholder="Email Address" /></div>
                        <div class="clearfix"></div>  
                    </div>
                    <hr />
                    <div class="row">
                            <div class="col-md-4"><a href="#" data-dismiss="modal" class="back margin-top-10">Cancel</a></div>
                            <div class="col-md-4 pull-right"><button class="btn btn-continue">Save Cart</button></div>
                            <div class="clearfix"></div>
                    </div>
                    <br/>
                    <p>We have the highest respect for your privacy; the information you provide will be kept secure and not used for any other purpose. For further details, review our <a href="privacy">Privacy Policy</a>.</p>
                    </div>
                  </div>
                </div>
            </div><!-- /.modal-dialog -->
         </div>
         <!-- Retrieve Cart -->    
         <div class="modal fade" id="retrieveModal" tabindex="-1" role="dialog" aria-labelledby="retrieveModalLabel" aria-hidden="true">
            <div class="modal-dialog col-md-8 col-md-offset-2 center-block">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Retrieve Cart</h1>
                    <div role="alert" class="alert alert-danger alert-dismissible fade in">
                      <p>You currently have an active shopping cart with items in it. If you retrieve a saved cart, those items will replace the items in your active cart. Select <strong>Cancel</strong> below if you want to keep the items in your active cart.</p>
                      <p>To retrieve your cart, enter the email you provided at the time you saved your cart online or the email address on your account.</p>
                      <p>If an Jiffy Mobile Sales Representative saved a cart for you, provide your email address OR telephone number and first name</p>  
                      <br />
                      <p><strong>Existing customer?</strong> Please <strong>log in</strong> to retrieve your cart.</p>  
                    </div>
                    <p>Provide your email address, and we'll save your cart for 30 days.</p>
                    <p>Please note, we may also use your email address to send you information about other special offers and deals from Jiffy Mobile.</p>
                    <p>We can't guarantee the availability or pricing of equipment or services when you return to retrieve your cart.</p>
                    <div class="register-form">
                    <div class="form-group">
                        <a data-toggle="collapse" href="#useemail" aria-expanded="false" aria-controls="useemail">
                            <div class="radio"><label><input id="optionsuse1" type="radio" value="option1" name="optionsRadios" checked="" /> <h4 class="margin-bottom-0 margin-top-0">Use email address</h4></label></div>
                        </a>
                        <div class="row">
                        <div id="useemail" class="collapse padding-20">
                            <div class="col-sm-3">
                                <label for="inputname" class="control-label">Email address</label>
                            </div>
                            <div class="col-sm-6"><input type="text" value="" class="form-control" require placeholder="Email Address" /></div>
                        </div>
                        <div class="clearfix"></div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <a data-toggle="collapse" href="#usetelephone" aria-expanded="false" aria-controls="usetelephone">
                            <div class="radio"><label><input id="optionsuse2" type="radio" value="option2" name="optionsRadios" checked="" /> <h4 class="margin-bottom-0 margin-top-0">Use telephone number + first name</h4></label></div>
                        </a>
                        <div class="row">
                        <div id="usetelephone" class="collapse padding-20">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="inputname" class="control-label">Telephone number</label>
                                </div>
                                <div class="col-sm-6"><input type="text" value="" class="form-control" require placeholder="Telephone number" /></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="inputname" class="control-label">First name</label>
                                </div>
                                <div class="col-sm-6"><input type="text" value="" class="form-control" require placeholder="First name" /></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                            <div class="col-md-4"><a href="#" data-dismiss="modal" class="back margin-top-10">Cancel</a></div>
                            <div class="col-md-4 pull-right"><button class="btn btn-continue">Retrieve Cart</button></div>
                            <div class="clearfix"></div>
                    </div>
                    <br/>
                    <p>We have the highest respect for your privacy; the information you provide will be kept secure and not used for any other purpose. For further details, review our <a href="privacy">Privacy Policy</a>.</p>
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-dialog -->
         </div>
        <!-- Empty Cart -->    
          <div class="modal fade" id="emptycartModal" tabindex="-1" role="dialog" aria-labelledby="emptycartModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Empty Cart</h1>
                    <p>Are you sure you want to empty your cart?</p>
                    <br/>
                    <hr />
                    <div class="row">
                            <div class="col-md-4"><a href="#" data-dismiss="modal" class="back margin-top-10">Cancel</a></div>
                            <div class="col-md-4 pull-right"><button class="btn btn-continue">Save Cart</button></div>
                            <div class="clearfix"></div>
                    </div></div>
                  </div>
                </div>
          </div><!-- /.modal-dialog -->
          <!-- Remove Cart -->    
          <div class="modal fade" id="removecartModal" tabindex="-1" role="dialog" aria-labelledby="removecartModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <h1 class="heading-modal">Remove from Cart</h1>
                    <p>Are you sure you want to remove this item from your cart?  </p>
                    <br/>
                    <hr />
                    <div class="row">
                            <div class="col-md-4"><a href="#" data-dismiss="modal" class="back margin-top-10">Cancel</a></div>
                            <div class="col-md-4 pull-right"><button class="btn btn-continue">Save Cart</button></div>
                            <div class="clearfix"></div>
                    </div></div>
                  </div>
                </div>
          </div><!-- /.modal-dialog -->
<?php require_once('footer.php'); ?>