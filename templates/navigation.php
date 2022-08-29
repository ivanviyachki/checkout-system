<?php 

?>

<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 25px 15%;">
        <a class="navbar-brand" href="<?php echo home_url() ?>"><?php echo get_bloginfo( 'name' ) ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo home_url( '/checkout-system' ) ?>"><?php _e( 'Checkout', 'checkout-system' ) ?></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo home_url( '/checkout-system-products' ) ?>"><?php _e( 'Products', 'checkout-system' ) ?></a>
            </li>
        </ul>
        <form class="form-inline align-items-end my-2 my-lg-0 woo" style="margin-left: 60%;" action="/import" method="post">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php _e( 'Import to WooCommerce', 'checkout-system' ) ?></button>
        </form>
        </div>
    </nav> 
</div> 