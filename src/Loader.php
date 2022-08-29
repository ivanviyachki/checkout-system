<?php

declare( strict_types = 1 );

use Checkout_System\Rest;
use Checkout_System\Products;
use Checkout_System\Checkout;

namespace Checkout_System;

/**
 * Main initialization class
 */
class Loader {

    public function __construct()  {  
        add_filter( 'template_include', array( $this, 'render_template' ) );
    }

    /**
	 * Render templates
	 *	
	 * @param  string $template The path of the template to include..
	 *
	 */
    public function render_template( $template ) {
        global $wp_query;

        if ( $wp_query->query_vars['name'] === 'products' && isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] === 'GET' ) {
            $prod = new Products();
            $prod->render();
            
            exit;
        }

        if ( $wp_query->query_vars['name'] === 'import' && isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] === 'POST' ) {
            $rest = new Rest();
            $rest->import();
            
            exit;
        }

        if ( $wp_query->query_vars['name'] === 'checkout' && isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] === 'GET' ) {
            require_once( \Checkout_System\DIR . '/templates/checkout.php' );
            
            exit;
        }

        if ( $wp_query->query_vars['name'] === 'checkout' && isset( $_SERVER['REQUEST_METHOD'] ) && $_SERVER['REQUEST_METHOD'] === 'POST' ) {
            if ( isset( $_POST ) ) {
                $rest = new Checkout();
                $rest->checkout( $_POST );

                exit;
            }            
        }

        return $template;
    }

}