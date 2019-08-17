<?php session_start(); ?>


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
        <?php if (!$_SESSION['email']): ?>
          <li>
            <a href="/shopping_cart/accounts/signup.php">Sign Up</a>
          <li>
            <a href="/shopping_cart/accounts/login.php">Login</a>
          </li>
        <?php else: ?>
          <li>
            <a href="/shopping_cart/accounts/logout.php">Logout</a>
          </li>
        <?php endif ?>
        <li>
        	<a href="/shopping_cart/cart.php" class="waves-effect waves-light btn">Go to Cart <i class="material-icons right">shopping_cart</i></a></li>
      </ul>
    </div>
  </nav>