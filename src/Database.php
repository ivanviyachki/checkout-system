<?php 

declare( strict_types = 1 );

namespace Checkout_System;

/**
 * Class responsible for database calls.
 */
class Database {

    /**
     * Method used to create database tables
     *
     * @return void 
     */
    protected function create_tables(): void {
        global $wpdb;

		$products_sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}cs_products` (
                    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    `name` VARCHAR(30) NOT NULL,
                    `sku` VARCHAR(30) NOT NULL,
                    `unit_price` INT(6) NOT NULL,
                    `special_price` VARCHAR(50)
                )ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $products_sql );

		$orders_sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}cs_orders` (
                    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    `total_price` INT(10) NOT NULL
                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;";
		dbDelta( $orders_sql );

        $order_meta_sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}cs_order_meta` (
                    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    `order_id` INT(6) NOT NULL,
                    `item_sku` VARCHAR(30) NOT NULL,
                    `quantity` INT(10) NOT NULL,
                    `total_price` INT(6) NOT NULL
                ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;";
        dbDelta( $order_meta_sql );
    }

    /**
     * Method used to insert database content
     *
     * @return void 
     */
    protected function insert(): void {
        global $wpdb;

        $wpdb->insert(
			$wpdb->prefix.'cs_products',
			array(
				'name'              => 'Product A',
				'sku'               => 'A',
				'unit_price'        => 50,
				'special_price'     => '3/130',
			),
			array( '%s', '%s', '%d', '%s' )
		);

        $wpdb->insert(
			$wpdb->prefix.'cs_products',
			array(
				'name'              => 'Product B',
				'sku'               => 'B',
				'unit_price'        => 30,
				'special_price'     => '2/45',
			),
			array( '%s', '%s', '%d', '%s' )
		);

        $wpdb->insert(
			$wpdb->prefix.'cs_products',
			array(
				'name'              => 'Product C',
				'sku'               => 'C',
				'unit_price'        => 20,
			),
			array( '%s', '%s', '%d' )
		);

        $wpdb->insert(
			$wpdb->prefix.'cs_products',
			array(
				'name'              => 'Product D',
				'sku'               => 'D',
				'unit_price'        => 10,
			),
			array( '%s', '%s', '%d' )
		);
    }

    /**
     * Method used to delete plugin tables 
     *
     * @return void 
     */
    protected function delete_tables(): void {
        global $wpdb;

        // The plugin tables.
        $tables = array(
            'cs_products',
            'cs_orders',
            'cs_order_meta',
        );

        // Loop through all tables and delete them.
        foreach ( $tables as $table ) {
            $wpdb->query(
                'DROP TABLE IF EXISTS ' . $wpdb->dbname . '.' . $wpdb->prefix . $table
            );
        }
    }

}