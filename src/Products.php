<?php 

declare( strict_types = 1 );

namespace Checkout_System;

/**
 * Class responsible for products.
 */
class Products {
    /**
     * Method used to return all products records from database
     *
     * @return array
     */
    public function getAllProducts(): array {
        
        global $wpdb;

		// Get all user visitors from the database.
		$products = $wpdb->get_results(
			'SELECT * FROM `' . $wpdb->prefix . 'cs_products`;',
			ARRAY_A
		);

        return $products;
    }

    /**
     * Method used to render products page
     *
     * @return void
     */
    public function render(): void {
        $products = $this->getAllProducts();
        
        require_once ( \Checkout_System\DIR . '/templates/products.php' );
    }
}