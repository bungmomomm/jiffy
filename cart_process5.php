<?php require_once('header.php'); ?>
<body class="cart-scroll">
<?php require_once('nav.php') ?>
<div class="main">
    <div class="container cart-process pillbox">
        <div class="tab-cart-process">
            <ul>
                <li class="active col-md-4"><a href="#">1. Personal &amp; Payment Info</a></li>
                <li class="col-md-4"><a href="#">2. Phone Number Details</a></li>
                <li class="col-md-4"><a href="#">3. Review &amp; Submit Order</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="device-cart">
                    <div class="product-thumbnail"><img src="images/product-thumbnail.png" alt="iPhone 5s - Jiffy Mobile" title="Jiffy Mobile" /></div>
                    <dl class="price">
                        <dt>iPhone 5S 16 GB</dt>
                        <dd>$784.00</dd>
                    </dl>
                    <dl class="jiffy-package-price">
                        <dt>Jiffy Mobile 1GB</dt>
                        <dd>$23.00<span class="per-month">/month</span></dd>
                    </dl>
                    <dl class="jiffy-package-price">
                        <dt>Jiffy Mobile Protection Pack</dt>
                        <dd>$9.99<span class="per-month">/month</span></dd>
                        <div class="clearfix"></div>
                    </dl>
                    <dl class="jiffy-package-price">
                        <dt>Car Charger with iPhone Lightning</dt>
                        <dd>$15.00<span class="per-month">/month</span></dd>
                        <div class="clearfix"></div>
                    </dl>
                    <dl class="sub-total">
                        <dt>Total</dt>
                        <dd>$831.99</dd>
                    </dl>
                </div>
                <div class="panel panel-default panel-summary-charges">
                  <div class="panel-heading">Summary of Charges</div>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Due Today</td>
                        <td class="charges">$831.99</td>
                      </tr>
                      <tr>
                        <td>Address to First Bill</td>
                        <td class="charges">$40.00</td>
                      </tr>
                      <tr>
                        <td>Due Monthly</td>
                        <td class="charges">$60.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 pull-right">
                <div id="payment">
                <h2 class="text-blue">Step 1 : Personal &amp; Payment Info</h2>
                <h4>Contact Information</h4>
                <p>Please provide  all the required contact information below.<br/>First and last names should match government-issued ID (e.g. driver's license)</p>
                <div class="payment-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">First Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Primary Contact Number</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div> 
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Contact Type</label>
                        <div class="col-sm-5">
                            <div class="customized-arrow">
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>   
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Email Address</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Re-enter Email Address</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="inputname" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Send me special offers from Jiffy Mobile via email (you can unsubscribe at any time)
                            </label>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Preferred contact method</label>
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
                    <hr/>
                </div> 
                <!-- Bill to Address -->
                <h4>Bill to Address</h4>
                <p>Please enter and verify your primary billing address. Missing or incorrect information requires additional identity review which may delay your order.</p>      
                <div class="payment-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Attention</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="attention" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Street Line 1</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="street_line1" />
                        </div>
                        Can't be a P.O. Box
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Street Line 2</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="street_line1" />
                        </div>
                        <div class="clearfix"></div>  
                    </div> 
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">City</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="city" />
                        </div>
                        <div class="clearfix"></div>  
                    </div> 
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">State</label>
                        <div class="col-sm-3">
                            <div class="customized-arrow">
                                <select>
                                    <option>Please Select</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>  
                    </div>    
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Zip Code</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="zip_code" />
                        </div>
                        <div class="clearfix"></div>  
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5"><button class="btn btn-verify">Verify Address</button></div>
                    </div>
                    <div class="clearfix"></div>   
                    <hr/>
                </div>
                <!-- Ship To Address -->
                <h4>Ship to Address</h4>
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
                <!-- Payment Information -->
                <h4>Bill to Address</h4>
                <div class="payment-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card Type</label>
                        <div class="col-sm-5">
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
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="name_cc" />
                        </div>
                        <div class="clearfix"></div>  
                    </div>  
                    <div class="form-group">
                        <label for="inputname" class="col-sm-4 control-label">Card Number</label>
                        <div class="col-sm-5">
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
                        <div class="col-sm-3">
                            <div class="customized-arrow">
                                <select>
                                    <option>Select Date</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
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
                        <div class="col-sm-4">
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
                    <hr/>
                </div>
                <div class="row">
                    <div class="col-md-4"><button class="btn btn-continue">Continue <i class="fa fa-angle-right"></i></button></div>
                </div>
                </div><!-- end of Payment -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>