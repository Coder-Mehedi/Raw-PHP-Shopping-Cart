<?php include_once 'templates/header.php'; ?>
<?php 
include_once '../config/db_connect.php';

$sql = "SELECT * FROM account_info";
$result = mysqli_query($conn, $sql);
$all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

 ?>

<table style="width:100%" class="all-user">
	<tr>
		<th>Email</th>
	</tr>
<?php foreach ($all_users as $user): ?>
	<tr>
		<td><?php echo $user['email']; ?></td>
	</tr>
<?php endforeach; ?>
</table>



<?php include_once 'templates/footer.php'; ?>