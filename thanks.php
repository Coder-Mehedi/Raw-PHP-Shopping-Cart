<?php include_once 'templates/header.php'; ?>
<?php include_once 'config/db_connect.php'; ?>
<?php session_start(); ?>


<?php 
function validate_phone_number($phone) {
	     // Allow +, - and . in phone number
	     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
	     // Remove "-" from number
	     $phone_to_check = str_replace("-", "", $filtered_phone_number);
	     // Check the lenght of number
	     if (strlen($phone_to_check) < 11 || strlen($phone_to_check) > 14) {
	        return false;
	     } else {
	       return true;
	     }
	}
	?>

<?php if(isset($_POST['final_submit'])): ?>
		<?php $number = $_POST['number']; ?>
		<?php $address = $_POST['address']; ?>
		<?php if(validate_phone_number($number)):  ?>
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
			<h2 class="center-align">Successfully Order Placed</h2>
			<p class="center-align">You will redirect in Homepage In <span id="time">5</span> Seconds</p>
			<?php unset($_SESSION['shopping_cart']) ?>
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