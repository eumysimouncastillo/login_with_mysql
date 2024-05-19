<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <?php

    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    
    $prices = array(
        'fishball' => 20,
        'kikiam' => 30,
        'squidball' => 40
    );
    
    
    $total_cost = $prices[$item] * $quantity;
    
    
    $change = $cash - $total_cost;
    
    
    echo "<h2>Order Summary</h2>";
    echo "<p>Item: $item</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Total Cost: $total_cost pesos</p>";
    echo "<p>Money: $cash pesos</p>";
    echo "<p>Change: $change pesos</p>";
    echo "<p>Thank you for your order!</p>";
    ?>

<a href="index.php">back to tindahan</a>
</body>
</html>
