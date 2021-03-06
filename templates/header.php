
<?php $_SESSION['quantity'] = 0; ?>
<?php 
if(isset($_SESSION['shopping_cart'])) {
    foreach ($_SESSION['shopping_cart'] as $product):
      $_SESSION['quantity'] += $product['quantity'];
    endforeach;
}
require('config/db_connect.php');
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $sql = "SELECT id, email FROM account_info WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  while($info = mysqli_fetch_assoc($result)) {
    $_SESSION['user_info'][] = $info; 
  }

  // $_SESSION['user_info'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $_SESSION['user_id'] = $_SESSION['user_info'][0]['id'];

  $user_id = $_SESSION['user_id'];

  $sql = "SELECT * FROM ordered_products WHERE user_id='$user_id'";
  $result = mysqli_query($conn, $sql);

  while($order = mysqli_fetch_assoc($result)) {
    $ordered_products[] = $order; 
  }

  // $ordered_products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Welcome</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/shopping_cart/style.css">
 </head>
 <body>
 	 <nav>
    <div class="nav-wrapper">
      <a href="/shopping_cart" class="brand-logo site-name">Shopping Cart</a>
      <ul class="right">
        <?php if(!isset($_SESSION['email'])): ?>

          <li>
            <a href="/shopping_cart/accounts/signup.php">Sign Up</a>
          <li>
            <a href="/shopping_cart/accounts/login.php">Login</a>
          </li>
        <?php else: ?>
          <li>
            <a href="/shopping_cart/accounts/profile.php">My Profile</a>
          </li>
          <li>
            <a href="/shopping_cart/accounts/ordered_product.php">Orders</a>
          </li>
          <li>
            <a href="/shopping_cart/accounts/logout.php">Logout</a>
          </li>
        <?php endif ?>
        <li>
        	<a href="/shopping_cart/cart.php" class="waves-effect waves-light btn">Go to Cart <i class="material-icons right">shopping_cart</i><span class="item-count"><?php echo $_SESSION['quantity']; ?></span></a></li>
      </ul>
    </div>
  </nav>