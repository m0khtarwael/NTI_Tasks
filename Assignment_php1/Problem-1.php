<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Age Check</title>
</head>
<body>

<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Age:</label>
    <input type="number" name="age" required><br><br>

    <input type="submit" name="submit" value="Login">
</form>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $age = $_POST['age'];

    if ($age > 18) {
        echo "Welcome " . $username . ", you can enter the website.";
    } else {
        echo "You cannot enter the website.";
    }
}
?>

</body>
</html>