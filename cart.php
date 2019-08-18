<?php 
session_start();
$total = 0;


if($_GET['action'] == 'delete'){
	foreach ($_SESSION['shopping_cart'] as $key => $product) {
		if($product['id'] == $_GET['id']) {
			unset($_SESSION['shopping_cart'][$key]);
		}
	}
}


?>




<?php include_once 'templates/header.php' ?>
 	<div class="container">
 		<div class="center">
 			<h2>Products In Cart</h2>
 		</div>
 		<?php if ($_SESSION['shopping_cart']): ?>
 			<table style="width:100%">
			<tr>
				<th>Product Name</th>
				<th>Quantity</th> 
				<th>Price</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
			<?php foreach ($_SESSION['shopping_cart'] as $key => $product): ?>
				
			<tr>
				<td><?php echo substr($product['name'], 0, 150); ?></td>
				<td><?php echo $product['quantity'] ?></td> 
				<td><?php echo number_format($product['price']) ?></td>
				<td><?php echo number_format($product['quantity'] * $product['price']) ?></td>
				<td><a class="btn red" href="cart.php?action=delete&id=<?php echo $product['id']; ?>">Remove</a></td>
			</tr>
			
			<?php $total += $product['quantity'] * $product['price']; ?>
			<?php $_SESSION['quantity'] += $product['quantity']; ?>
		<?php endforeach; ?>
			<tr>
				<td colspan="3" style="text-align: right;">Grand Total:</td>
				<td><?php echo number_format($total); ?></td>
			</tr>
		</table>
		<div class="checkout-btn center">
			<a href="/shopping_cart/checkout.php" class="btn btn-large green">Checkout</a>
		</div>
		
		<?php else: ?>
			<h4 class="center-align nothing">Nothing In Cart</h4>
 		<?php endif ?>
 		
 	</div>

<?php include_once 'templates/footer.php' ?>