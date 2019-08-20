<?php 
include_once '../config/db_connect.php';
session_start();


$sql = "SELECT * FROM ordered_products";
$result = mysqli_query($conn, $sql);
$ordered_products = mysqli_fetch_all($result, MYSQLI_ASSOC);

$_SESSION['ordered_products'] = $ordered_products;
// print_r($ordered_products);
 ?>


<?php include_once 'templates/header.php'; ?>
<?php if($_SESSION['email']): ?>

	<div class="center">
 		<h1>All Orders</h1>
 	</div>
 	
 	<?php if ($ordered_products): ?>
 		<div class="all-order-table">
 			<table style="width:100%" class="all-order">
			<tr>
				<th>Product Name</th>
				<th class="p5">Quantity</th> 
				<th class="quantity">Price</th>
				<th>Total</th>
				<th>Order Time</th>
				<!-- <th>Action</th> -->
			</tr>
	<?php foreach ($ordered_products as $product): ?>
				
			<tr>
				<td class="p10"><?php echo substr($product['name'], 0, 150); ?></td>
				<td class="quantity p5"><?php echo $product['quantity'] ?></td> 
				<td class="p5 center-align"><?php echo number_format($product['price']) ?></td>
				<td class="p5 center-align"><?php echo number_format($product['quantity'] * $product['price']) ?></td>
				<!-- <td><a class="btn red" href="cart.php?action=delete&id=<?php echo $product['id']; ?>">Remove</a></td> -->
				<td class="date center-align">
					<?php echo date_format(date_create($product['ordered_at']), 'd-m-Y H:i:sA'); ?>	
				</td>
				<!-- ref: https://www.php.net/manual/en/datetime.format.php -->
			</tr>
			
			<?php $total += $product['quantity'] * $product['price']; ?>
			<?php $_SESSION['quantity'] += $product['quantity']; ?>
		<?php endforeach; ?>
			<tr>
				<td colspan="3" class="grand-total">Grand Total:</td>
				<td colspan="2" class="center-align"><?php echo number_format($total); ?></td>
			</tr>
		</table>
 		</div>
 	<?php else: ?>
           <h1 class="center-align no-order">You have no active Order</h1>
       <?php endif; ?>
 	<?php else: ?>
 		<h1 class="center-align">You are not logged in</h1>
<?php endif; ?>
<?php include_once 'templates/footer.php'; ?>