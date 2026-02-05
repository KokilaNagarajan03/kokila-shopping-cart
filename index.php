<?php include "config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Kokila Shopping Cart</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1 class="title">🛒 Kokila Shopping Cart</h1>

<div class="products">
<?php
$res = mysqli_query($conn,"SELECT * FROM products");
while($row = mysqli_fetch_assoc($res)){
?>
<div class="card">
    <img src="assets/images/<?php echo $row['image']; ?>">
    <h3><?php echo $row['name']; ?></h3>
    <p>₹<?php echo $row['price']; ?></p>

    <form action="cart/add_to_cart.php" method="post">
        <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
        <input type="number" name="qty" value="1" min="1">
        <button>Add to Cart</button>
    </form>
</div>
<?php } ?>
</div>

<a href="cart.php" class="view-cart">View Cart</a>

</body>
</html>
