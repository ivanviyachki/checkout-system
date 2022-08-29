<?php
/**
 * Plugin Name:       Checkout System
 * Description:       This plugin implement a solution for a supermarket checkout that calculates the total price of a number of items
 * Text Domain:       checkout-system
 */

// Our namespace.
namespace Checkout_System;

use Checkout_System\Loader;
use Checkout_System\Activator;
use Checkout_System\Deactivator;

// Define root directory.
if ( ! defined( __NAMESPACE__ . '\DIR' ) ) {
	define( __NAMESPACE__ . '\DIR', __DIR__ );
}

require_once( \Checkout_System\DIR . '/vendor/autoload.php' );

register_activation_hook( __FILE__, array( new Activator(), 'activate' ) );

register_deactivation_hook( __FILE__, array( new Deactivator(), 'deactivate' ) );

// Create new instance of class Loader
$checkout_system_loader = new Loader;

