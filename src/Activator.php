<?php

declare( strict_types = 1 ) ;

namespace Checkout_System;

use Checkout_System\Database;

/**
 * Class responsible for plugin activation.
 */
class Activator extends Database {

	/**
	 * Run on plugin activation.
	 *
	 * @return void
    */
	public function activate(): void {
        $this->create_tables();
        $this->insert();
	}

}
