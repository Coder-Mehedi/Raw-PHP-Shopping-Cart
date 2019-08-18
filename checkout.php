<?php 
session_start();

	
	if(isset($_SESSION['email'])) {
		$_SESSION['loggedIn'] = true;
	} else {
		header('Location: /shopping_cart/accounts/signup.php');
	}


 ?>
<?php include_once 'templates/header.php'; ?>
 <?php if ($_SESSION['loggedIn'] && $_SESSION['shopping_cart']): ?>
 	<h1 class="center-align">Payment</h1>
 	<div class="row">
 		<div class="input-field col s6 offset-s3">
		    <form method="POST" action="thanks.php?action=completeorder">
	        	<label for="textarea1">Address</label>
				<input class="materialize-textarea" name="address" required="true" value="<?php echo $_GET['address'] ?? '' ?>"></input>
		      	<label>Mobile Number</label>
		      	<input type="text" name="number" required="true" value="<?php echo $_GET['number'] ?? '' ?>">
		      	<?php if($_GET['error'] == 'invalid_number'): ?>
		      		<div class="red-text">Invalid Number!!!</div>
		      	<?php endif ?>
		      	<label>
			        <input type="checkbox" id="cashOnDelivery" />
			        <span>Cash On Delivery</span>
		      	</label>
				<div class="right">
					<button type="submit" name="final_submit" class="btn green darken-2" id="proceed" disabled="true">Proceed</button>
				</div>
		    </form>
		</div>
  	</div>
 	<?php elseif ($_SESSION['loggedIn'] && !$_SESSION['shopping_cart']): ?>
 		<h1 class="center-align">You have nothing in cart</h1>
 <?php endif ?>

 <?php include_once 'templates/footer.php'; ?>


 <script type="text/javascript">
 	const checkbox = document.getElementById('cashOnDelivery');
 	const proceed = document.getElementById('proceed');
 	checkbox.addEventListener('change', () => {
 		if (checkbox.checked !== true) {
	 		proceed.disabled = true;
	 	} else {
	 		proceed.disabled = false;
	 	}
 	})
 </script>