<?php

declare( strict_types = 1 );

namespace Checkout_System;

use Checkout_System\Database;

/**
 * Class responsible for plugin deactivation.
 */
class Deactivator extends Database {

	/**
	 * Run on plugin deactivation.
	 *
	 * @return void
    */
	public function deactivate(): void {
        $this->delete_tables();
	}

}
