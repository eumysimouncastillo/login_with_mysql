<?php 
session_start();

if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Welcome! <?php echo $_SESSION['username'];?></h1>
	<a href="logout.php">Logout</a>

    <h1>Welcome to Tindahan ni Tutuy!</h1>
    <p>Below are the prices:</p>
    <ul>
        <li>fishball - 20 pesos</li>
        <li>kikiam - 30 pesos</li>
        <li>squidball - 40 pesos</li>
    </ul>
    
    <form method="post" action="order.php">
        <label for="item">Choose your order:</label>
        <select name="item" id="item">
            <option value="fishball">Fishball</option>
            <option value="kikiam">Kikiam</option>
            <option value="squidball">Squidball</option>
        </select><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        
        <label for="cash">Cash:</label>
        <input type="number" name="cash" id="cash" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>