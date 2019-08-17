<?php include_once 'templates/header.php'; ?>
<?php session_start(); ?>
<?php if ($_GET['action'] == 'completeorder'): ?>
	<h2 class="center-align">Successfully Order Placed</h2>
	<p class="center-align">You will redirect in Homepage In <span id="time">5</span> Seconds</p>
	<?php unset($_SESSION['shopping_cart']) ?>
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