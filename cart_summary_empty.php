<?php require_once('header.php'); ?>
<body class="cart-scroll">
<?php require_once('nav.php') ?>
<div class="main">
    <div class="container cart-process cart-summary-empty pillbox">
        <div id="checkout">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <h2 class="text-blue pull-left">Shopping Cart</h2>
                    <ul class="account-cart">
                        <li><a href="#">Save cart</a></li>
                        <li><a href="#">Retrieve cart</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Jiffy Mobile -->
            <div class="panel panel-default panel-checkout-payment">
                <div class="panel-heading">Wireless</div>
                <div class="panel-body">
                    <div class="cart-summary-status">
                        <h2>There are no items in your cart</h2>  
                        <div class="col-md-4 col-md-offset-4 margin-top-30"><button class="btn btn-checkout">Continue Shopping</button></div> 
                        <div class="clearfix"></div> 
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>