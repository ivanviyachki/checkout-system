<?php 
 /* @var array $data*/
?>
<html>
	<head>
   		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    	<script
			  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
			  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<style>
			.entry:not(:first-of-type)
			{
				margin-top: 10px;
			}
			.glyphicon
			{
				font-size: 15px;
			}
			.input-group button {
				margin-left:10px
			}
			.navbar .btn-outline-success{
				border-color: #674399;
				color: #674399;
			}
			.navbar .btn-outline-success:hover{
				background-color: #674399;
				color: white;
			}
			.main h1{
				text-align:center;
				margin-bottom: 40px;
    			font-size: 54px;
			}
		</style>
	</head>
	<body>
		
		<?php require_once( \Checkout_System\DIR . '/templates/navigation.php' ) ?>
 
		<div class="container main" style="max-width:800px; margin-top:130px">
			<div class="row">
				
				<h1 class=""><?php _e( 'Receipt', 'checkout-system' ) ?></h1>
				<div class="col-md-6">
					<div class="billed"><span class="font-weight-bold text-uppercase"><?php _e( 'Order ID: ', 'checkout-system' ) ?></span><span class="ml-1"><?php echo !empty($data[0]['id']) ? $data[0]['id'] : ''; ?></span></div>
				</div>
			</div>
			<div class="mt-3">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th><?php _e( 'Product', 'checkout-system' ) ?></th>
								<th><?php _e( 'Unit', 'checkout-system' ) ?></th>
								<th><?php _e( 'Total', 'checkout-system' ) ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $unitInformation) : ?>
							<tr>
								<td><?php echo !empty($unitInformation['item_sku']) ? $unitInformation['item_sku'] : '' ?></td>
								<td><?php echo !empty($unitInformation['quantity']) ? $unitInformation['quantity'] : '' ?></td>
								<td><?php echo !empty($unitInformation['total_price']) ? $unitInformation['total_price'] : '' ?></td>
							</tr>
							<?php endforeach ?>
							<tr>
								<td></td>
								<td><?php _e( 'Total', 'checkout-system' ) ?></td>
								<td><?php echo !empty($data[0]['order_total']) ? $data[0]['order_total'] : '' ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>