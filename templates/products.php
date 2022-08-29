<?php 
    /* @var array $products*/
?>
<html>
	<head>
   		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <style>
            .main h1{
                text-align: center;
                margin-bottom: 40px;
                font-size: 54px;
            }
            .navbar .btn-outline-success{
				border-color: #674399;
				color: #674399;
			}
			.navbar .btn-outline-success:hover{
				background-color: #674399;
				color: white;
			}
        </style>   
	</head>
	<body>
        
        <?php require_once( \Checkout_System\DIR . '/templates/navigation.php' ) ?>

		<div class="container main" style="margin-top:130px">
            <h1><?php _e( 'Products', 'checkout-system' ) ?></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><?php _e( 'ID', 'checkout-system' ) ?></th>
                        <th scope="col"><?php _e( 'Name', 'checkout-system' ) ?></th>
                        <th scope="col"><?php _e( 'SKU', 'checkout-system' ) ?></th>
                        <th scope="col"><?php _e( 'Price', 'checkout-system' ) ?></th>
                        <th scope="col"><?php _e( 'Special Price', 'checkout-system' ) ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $products as $product ) :?>
                        <tr>
                        <th><?php echo $product['id'];?></th>
                        <th><?php echo $product['name'];?></th>
                        <th><?php echo $product['sku'];?></th>
                        <th><?php echo $product['unit_price'];?></th>
                        <th><?php echo $product['special_price'];?></th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
		</div>
	</body>
</html>