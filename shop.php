<?php require_once('header.php'); ?>
<body>
<?php require_once('nav.php') ?>
<div class="main">
    <div id="catalog-view-section" class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12 sidebar">
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
                  <div class="panel panel-default panel-sidebar">
                    <div id="filter-manufacturer" role="tab" class="panel-heading">
                      <h4 class="panel-title">
                        <a aria-controls="filter-1" aria-expanded="true" href="#filter-1" data-parent="#accordion" data-toggle="collapse">
                          Filter By Manufacturer
                        </a>
                      </h4>
                    </div>
                    <div aria-labelledby="filter-manufacturer" role="tabpanel" class="panel-collapse collapse in" id="filter-1">
                      <div class="panel-body">
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> Apple</div> 
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> Asus</div> 
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> AT&amp;T</div>
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> BlackBerry</div>
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> HTC</div>
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> LG</div>
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> Motorola</div> 
                          <div class="checkbox"><label><input type="checkbox" value="" /></label> Samsung</div>                     
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-sidebar">
                    <div id="filter-contract" role="tab" class="panel-heading">
                      <h4 class="panel-title">
                        <a aria-controls="filter-2" aria-expanded="false" href="#filter-2" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Filter By Contract Length
                        </a>
                      </h4>
                    </div>
                    <div aria-labelledby="filter-contract" role="tabpanel" class="panel-collapse collapse in" id="filter-2">
                      <div class="panel-body">
                        <div class="form-group">
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> All</div>  
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> AT&amp;T Next 12</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> AT&amp;T Next 18</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> 2 year commitment</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> No annual contract</div>
                        </div>    
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-sidebar">
                    <div id="filter-price" role="tab" class="panel-heading">
                      <h4 class="panel-title">
                        <a aria-controls="filter-3" aria-expanded="false" href="#filter-3" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Filter By Price
                        </a>
                      </h4>
                    </div>
                    <div aria-labelledby="filter-price" role="tabpanel" class="panel-collapse collapse in" id="filter-3">
                      <div class="panel-body">
                        <!-- Price Range Slider -->
                        <div class="price-range">      
                            <div class="data-slider-label">
                                <span class="data-slider-min pull-left">$150</span>
                                <span class="data-slider-max pull-right">$2000</span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <input id="price_range" type="text" class="span2" value="" data-slider-min="150" data-slider-max="2000" data-slider-step="5" data-slider-value="[750,1500]"/> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-sidebar">
                    <div id="filter-os" role="tab" class="panel-heading">
                      <h4 class="panel-title">
                        <a aria-controls="filter-4" aria-expanded="false" href="#filter-4" data-parent="#accordion" data-toggle="collapse" class="collapsed">
                          Filter By Operating System
                        </a>
                      </h4>
                    </div>
                    <div aria-labelledby="filter-os" role="tabpanel" class="panel-collapse collapse in" id="filter-4">
                      <div class="panel-body">
                        <div class="form-group">
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> All</div>  
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> Android</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> iOS</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> BlackBerry</div>
                            <div class="checkbox"><label><input type="checkbox" value="" /></label> Windows Phone</div>
                        </div>    
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <section class="banner-ads-sidebar"><a href="#"><img src="images/banner-sidebar-1.png" class="img-responsive" alt="Harmony" title="Harmony" /></a></section>
            </div>
            <div id="product-group" class="col-lg-9 col-md-9 col-xs-12 pull-right">
                <div id="main-slider-promotions" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active"><a href="product_samsung_galaxys4.php"><img src="images/img-shop-banner.jpg" alt="Samsung Galaxy S4"/></a></div>
                    <div class="item"><a href="product_samsung_galaxys4.php"><img src="images/img-shop-banner.jpg" alt="Samsung Galaxy S4"/></a></div>
                  </div>
                </div>
                <div class="product-list">
                    <div class="product-list-detail">
                        <div class="row">
                        <div class="col-md-4 pull-left-extreme">
                            <div class="product-counter">
                                <span><strong>Showing</strong>&nbsp;&nbsp;<strong>1 - 36</strong> of 60 devices</span>
                            </div>
                        </div>
                        <div class="col-md-8 pull-right pull-right-extreme">
                            <div class="product-sort">
                                <div class="row">
                                    <label for="inputname" class="col-md-4 control-label text-right">Sort by</label>
                                        <div class="col-md-4">
                                          <div class="customized-arrow">
                                            <select>
                                                <option>Featured</option>
                                            </select>
                                            </div>
                                        </div>                      
                                    <div class="col-md-2 text-right"><strong>View as</strong></div>
                                    <div class="col-md-2 pull-right">
                                        <button class="grid-view active"></button>
                                        <button class="list-view"></button>                                                                           
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product-list-tumbnails">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8 product-grid best-buy">
                                <div class="product-wrapper large-col">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="ribbon-bestbuy"></div>
                                            <div class="product-preview">  
                                                <div class="product-title">Samsung Galaxy S4 Active</div>                                                                                     
                                                <div class="row">                                                    
                                                    <div class="col-md-4">                                                        
                                                        <div class="product-rating">
                                                        <span class="rating">
                                                			<span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                		</span>
                                                        </div>         
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-image">                                                        
                                                        <a href="product_samsung_galaxys4mini.php"><img src="images/img-product-bestbuy.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div></a>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Samsung Galaxy S4 Active</div>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                			<span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                              		</span>
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><a href="product_samsung_galaxys4.php"><img src="images/img-shop-product-1.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></a></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>                            
                        </div>
                        <!-- Sample Product on row 2 -->
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Motorola RAZR i</div>
                                                <div class="product-rating">
                                                <span class="rating">
                                         			<span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                          		</span>
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><a href="product_motorola_motox.php"><img src="images/img-shop-product-1.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></a></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>     
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Nokia Lumia 928</div>
                                                <div class="product-rating">
                                                <span class="rating">
                                         			<span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                          		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><img src="images/img-shop-product-2.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>     
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Samsung Galaxy Note</div>
                                                <div class="product-rating">
                                                    <span class="rating">
                                             			<span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                              		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><a href="product_samsung_galaxynote3.php"><img src="images/img-shop-product-3.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></a></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>                            
                        </div>
                        <!-- end of row -->
                        <!-- Sample Product on row 3 -->
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">BlackBerry Z10</div>
                                                <div class="product-rating">
                                                    <span class="rating">
                                             			<span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                              		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><img src="images/img-shop-product-1.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 product-grid best-buy">
                                <div class="product-wrapper large-col">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="ribbon-bestbuy"></div>
                                            <div class="product-preview">  
                                                <div class="product-title">HTC 8XT</div>                                                                                     
                                                <div class="row">                                                    
                                                    <div class="col-md-4">                                                        
                                                        <div class="product-rating">
                                                            <span class="rating">
                                                     			<span class="star"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                                <span class="star"></span>
                                                      		</span>                                                        
                                                        </div>         
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-image">                                                        
                                                        <img src="images/img-product-bestbuy.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>                                                        
                        </div><!-- end of row -->
                        <!-- Sample Product on row 4 -->
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Motorola RAZR i</div>
                                                <div class="product-rating">
                                                    <span class="rating">
                                             			<span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                              		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><img src="images/img-shop-product-1.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>     
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Nokia Lumia 928</div>
                                                <div class="product-rating">
                                                        <span class="rating">
                                                			<span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                            <span class="star"></span>
                                                		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><img src="images/img-shop-product-2.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>     
                            <div class="col-sm-4 col-md-4 col-lg-4 product-grid">
                                <div class="product-wrapper">
                                    <a href="#" class="single-product">
                                        <div class="product-detail">
                                            <div class="product-preview">
                                                <div class="product-title">Samsung Galaxy Note</div>
                                                <div class="product-rating">
                                                    <span class="rating">
                                             			<span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                              		</span>                                                
                                                </div>                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="product-price">
                                                            <span class="start-from-text">Start From</span>
                                                            <div class="new-price"><span class="new-price-text">$199.99</span></div>
                                                        </div>
                                                        <div class="product-capacity"><span>16 to 64 GB</span></div>
                                                        <div class="product-shipping">Free Express Shipping</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product-image"><img src="images/img-shop-product-3.png" title="Samsung Galaxy S4 Active" alt="Samsung Galaxy S4 Active" /></div>
                                                        <div class="product-color">
                                                            <span class="grey"></span>
                                                            <span class="gold"></span>
                                                            <span class="brown"></span>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="product-view">
                                                <button class="compare">Add to Compare</button>
                                                <a href="product_samsung_galaxys4mini.php" class="view">View</a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>                            
                        </div>
                        <!-- end of row -->
                    </div>
                </div>    
            </div>            
            <div class="clearfix"></div>
        </div>    
    </div>
    <!-- Comparison Product -->
    <div class="comparision-product-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 pull-left-extreme">
                    <div class="description-compare">
                        <p>you can compare maximum 5 devices. click <strong>Compare Now</strong> below to proceed</p>
                        <button class="btn btn-compare no-radius">Compare Now &nbsp; <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 pull-right pull-right-extreme box-product-compare"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>