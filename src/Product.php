<?php

declare( strict_types = 1 );

use Checkout_System\Database;

namespace Checkout_System;

/**
 * Class responsible orders.
 */
class Product {
    /**
     * SKU
     * 
     * @var string
     */
    protected string $sku;

    /**
     * Price
     * 
     * @var int
     */
    protected int $price;

    /**
     * Price
     * 
     * @var array
     */
    protected array $discount;

    public function __construct( string $sku ) {
        $this->sku = $sku;
        $this->setPrice();
        $this->setDiscount();
    }

    /**
     * Get prodcut SKU
     * 
     * @return string
     */
    public function getSku(): string {
        return $this->sku;
    }

    /**
     * Get prodcut price
     * 
     * @return int
     */
    public function getPrice(): int {
        return $this->price;
    }

    /**
     * Get product price
     * 
     * @return array
     */
    public function getDiscount(): array {
        return $this->discount;
    }

    /**
     * Set product price
     * 
     * @return void
     */
    private function setPrice(): void {
        global $wpdb;

        $product_price = $wpdb->get_var( $wpdb->prepare( "
                SELECT `unit_price`
                FROM `{$wpdb->prefix}cs_products` 
                WHERE `sku` = %s LIMIT 1
            ", $this->sku ) 
        );
    
        $this->price = intval( $product_price ) ?? 0;
    }

    /**
     * Set product discount
     * 
     * @return void
     */
    private function setDiscount(): void {
        
        global $wpdb;

        $product_discount = $wpdb->get_var( $wpdb->prepare( "
                SELECT `special_price`
                FROM `{$wpdb->prefix}cs_products` 
                WHERE `sku` = %s LIMIT 1
            ", $this->sku ) 
        );

        if ( $product_discount ) {
            $this->discount = explode( '/', strval( $product_discount ) );
        } else {
            $this->discount = array();
        }
    }

}