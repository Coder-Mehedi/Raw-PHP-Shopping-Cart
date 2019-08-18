<?php 

include_once 'config/create_db.php';
include_once 'config/db_connect.php';
include_once 'config/create_table.php';
include_once 'config/demo_data.php';


$sql = "SELECT * FROM product_info";

$result = mysqli_query($conn, $sql);

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($products);

session_start();
$product_ids = [];

if(isset($_POST['add_to_cart'])){
  if(!isset($_SESSION['shopping_cart'])) {
    $_SESSION['shopping_cart'][0] = [
      'id' => $_GET['id'],
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'quantity' => $_POST['quantity']
    ];
  }else {
    $count = count($_SESSION['shopping_cart']);
    $product_ids = array_column($_SESSION['shopping_cart'], 'id');
    if(!in_array($_GET['id'], $product_ids)) {
      $_SESSION['shopping_cart'][$count] = [
      'id' => $_GET['id'],
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'quantity' => $_POST['quantity'],
    ];
    } else {
      for ($i=0; $i < count($product_ids); $i++) { 
        if ($product_ids[$i] == $_GET['id']){
          $_SESSION['shopping_cart'][$i]['quantity'] += $_POST['quantity'];
        }
      }
    }
  }
}

 ?>

<?php include_once 'templates/header.php' ?>

 	<h1 style="text-align: center;">Products</h1>
	
  <div class="row">
  	<?php foreach($products as $product): ?>
    <div class="col s12 m3">
      <form method="POST" action="index.php?action=add&id=<?php echo $product['id']; ?>">
        <div class="card hoverable">
          <div class="card-image">
            <img src="<?php echo $product['image']; ?>">
            <span class="card-title"></span>
            <div class="btn-floating halfway-fab">৳<?php echo $product['price']; ?></div>
          </div>
          <div class="card-content">
            <h6><?php echo substr($product['name'], 0, 100) . " ..."; ?></h6>
          </div>
          <div class="action">
            <div class="quantity">
              <label>Quantity:</label>
              <input type="number" name="quantity" value="1" />
            </div>
            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
            <button type="submit" name="add_to_cart" class="flex btn orange"><i class="material-icons">add_shopping_cart</i>Add to Cart</button>
          </div>
        </div>
      </form>
    </div>
<?php endforeach ?>

  </div>
        
<?php include_once 'templates/footer.php' ?>