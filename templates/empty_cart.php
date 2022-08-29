<?php 
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

		<div class="container main" style="max-width:800px; margin-top:130px">
			<div class="row">
				<h1><?php _e( 'The cart is empty or have empty input. Please make sure all fields are filled correctly.', 'checkout-system' ) ?></h1>
			</div>
		</div>
	</body>
</html>