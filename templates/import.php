<?php
/* @var bool $failed*/
?>
<html>
	<head>
   		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
		<style>
			.main h1{
				text-align:center;
				margin-bottom: 40px;
    			font-size: 30px;
			}
		</style>
	</head>
	<body>
		
		<?php require_once( \Checkout_System\DIR . '/templates/navigation.php' ) ?>

		<div class="container main" style="max-width:800px; margin-top:130px">
			<div class="row">
                <?php if ($failed) : ?>
				    <h1><?php _e( 'Failed to import products', 'checkout-system' ) ?></h1>
                <?php else :?>
                    <h1><?php _e( 'Products was imported successfully', 'checkout-system' ) ?></h1>
                <?php endif; ?>        
			</div>
		</div>
	</body>
</html>