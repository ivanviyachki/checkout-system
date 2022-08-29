Description
----------------

WordPress Plugin of solution for a supermarket checkout that calculates the total price of a number of items. Calculate priced individually, some items are multi-priced: buy `n` of them, and they'll cost you `y` cents.

Setup
----------------

First you will need WordPress installation.

Clone the repository to 

```gradle
wp-content/plugins/

```

After that activated the plugin from Dashboard->Plugins->Installed Plugins

Now you can reach Checkout page from : ```www.example.com/checkout-system```
and Products page from : ```www.example.com/checkout-system-products```

To import product from Checkout System to WooComemrce, first you have to install and activate plugin on the same WordPress installation.

After that you should <a href="https://woocommerce.com/document/woocommerce-rest-api//">Generate API.</a> and <a href="<a href="https://woocommerce.com/document/woocommerce-rest-api//">"> Enable legacy REST API </a>

Then copy Consumer Key and Consumer Secret and add them in
```gradle
wp-content/plugins/checkout-system/src/Rest.php

line :37 $this->consumer_key = 'ck_****';
line :38 $this->consumer_secret = 'cs_****';

```
Now you can import Checkout System Products by navigate to ```www.example.com/checkout-system-products``` in the navigation bar have a button named 
```Import to WooCommerce```