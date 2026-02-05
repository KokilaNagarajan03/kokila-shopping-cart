<?php include "config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Your Cart</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1 class="title">Your Cart</h1>

<?php
$total = 0;

if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $id => $qty){
$res = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($res);

$sub = $row['price'] * $qty;
$total += $sub;
?>
<div class="cart-item">
    <img src="assets/images/<?php echo $row['image']; ?>">
    <h4><?php echo $row['name']; ?></h4>
    <p>₹<?php echo $row['price']; ?> × <?php echo $qty; ?></p>
    <strong>₹<?php echo $sub; ?></strong>
    <a href="cart/remove.php?id=<?php echo $id; ?>">Remove</a>
</div>
<?php }} else { echo "<p>Cart is empty</p>"; } ?>

<h2>Total: ₹<?php echo $total; ?></h2>
<a href="checkout.php" class="checkout">Checkout</a>

</body>
</html>
