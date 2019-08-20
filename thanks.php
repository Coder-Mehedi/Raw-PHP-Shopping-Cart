<?php include_once 'templates/header.php'; ?>
<?php include_once 'config/db_connect.php'; ?>
<?php session_start(); ?>


<?php 
function validate_mobile($number) {
    return preg_match('/^[0-9]{11}+$/', $number);
}

?>

<?php if(isset($_POST['final_submit'])): ?>
		<?php $mobile_number = $_POST['mobile_number']; ?>
		<?php $address = $_POST['address']; ?>
		<?php if(validate_mobile($mobile_number)):  ?>
			<?php 
			$email = $_SESSION['email'];
			$sql = "SELECT id from account_info WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			$user_id = mysqli_fetch_assoc($result)['id'];

			foreach ($_SESSION['shopping_cart'] as $product) {
				$id = $product['id'];
				$name = $product['name'];
				$price = $product['price'];
				$quantity = $product['quantity'];

				$sql = "INSERT INTO ordered_products(product_id, user_id, name, price, quantity, address, mobile_number) VALUES('$id', '$user_id', '$name', '$price', '$quantity', '$address', '$mobile_number')";
				mysqli_query($conn, $sql);
			}
			 ?>
			<h2 class="center-align">Successfully Order Placed</h2>
			<?php unset($_SESSION['shopping_cart']) ?>
			<p class="center-align">You will redirect in Homepage In <span id="time">3</span> Seconds</p>
			
		<?php else: ?>
			<?php 
			header("Location: checkout.php?error=invalid_number&number=$number&address=$address"); 
			?>

	<?php endif; ?>
<?php endif; ?>


<?php include_once 'templates/footer.php'; ?>



<script type="text/javascript">
	let time = parseInt(document.getElementById('time').innerHTML);
	setInterval(() => {
		document.getElementById('time').innerHTML = time;
		time--;
		if (time == -1) {
		document.location = '/shopping_cart';
	}
	},1000)
</script>