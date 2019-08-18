<?php include_once 'templates/header.php'; ?>
<?php include_once 'config/db_connect.php'; ?>
<?php session_start(); ?>


<?php if(isset($_POST['final_submit'])): ?>
	<?php if($_GET['action'] == 'completeorder'): ?>
		<h2 class="center-align">Successfully Order Placed</h2>
		<p class="center-align">You will redirect in Homepage In <span id="time">5</span> Seconds</p>

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

			$sql = "INSERT INTO ordered_products(product_id, user_id, name, price, quantity) VALUES('$id', '$user_id', '$name', '$price', '$quantity')";
			mysqli_query($conn, $sql);
		} 

		?>

		<?php unset($_SESSION['shopping_cart']) ?>
	<?php endif ?>
<?php endif ?>


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