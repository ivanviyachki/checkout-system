<?php 

declare( strict_types = 1 );

use Checkout_System\Database;

namespace Checkout_System;

/**
 * Class responsible for orders.
 */
class Orders extends Database {

    /**
     * Method used to return all orders records from database
     *
     * @return array
     */
    public function getAllOrders(): array  {
        global $wpdb;

		// Get all user visitors from the database.
		$orders = $wpdb->get_results(
			'SELECT * FROM `' . $wpdb->prefix . 'cs_orders`;',
			ARRAY_A
		);

        return $orders;
    }
}