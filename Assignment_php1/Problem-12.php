<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount</title>
</head>
<body>

<form method="post">
    <label>Choose Product:</label>
    <select name="product">
        <option value="laptop">Laptop - 1500</option>
        <option value="phone">Phone - 800</option>
    </select>
    <br><br>

    <label>Quantity:</label>
    <input type="text" name="quantity">
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php

if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    if ($product == "laptop") {
        $price = 1500;
    } elseif ($product == "phone") {
        $price = 800;
    }

    if (!is_numeric($quantity)) {
        echo "Error: Please enter numbers only.";
    } elseif ($quantity < 0) {
        echo "Error: Negative numbers are not allowed.";
    } else {
        $totalBeforeDiscount = $price * $quantity;

        if ($totalBeforeDiscount < 1000) {
            $discount = $totalBeforeDiscount * 0.10;
        } else {
            $discount = $totalBeforeDiscount * 0.15;
        }

        $totalAfterDiscount = $totalBeforeDiscount - $discount;

        echo "Product: " . $product . "<br>";
        echo "Price: " . $price . "<br>";
        echo "Quantity: " . $quantity . "<br>";
        echo "Total before discount: " . $totalBeforeDiscount . "<br>";
        echo "Discount: " . $discount . "<br>";
        echo "Total after discount: " . $totalAfterDiscount;
    }
}

?>

</body>
</html>