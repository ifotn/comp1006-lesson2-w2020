<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// store the form inputs in variables
$name = $_POST['name'];
$email = $_POST['email'];

// display the inputs back to the screen
//echo "Name: $name<br />Email: $email";
echo '<h4 class="someclass">Name: ' . $name . '</h4><h4 class="someclass">Email: ' . $email . '</h4>';

// connect to the db
$db = new PDO('mysql:host=mysql7.loosefoot.com;dbname=w20', 'comp1006', 'helpme20');

// set up the SQL INSERT with placeholders (or "parameters") for the name & email inputs
$sql = "INSERT INTO persons (name, email) VALUES (:name, :email)";

// create a command variable to populate the parameter values
$cmd = $db->prepare($sql);
$cmd->bindParam(':name', $name, PDO::PARAM_STR, 50);
$cmd->bindParam(':email', $email, PDO::PARAM_STR, 50);

// execute the save method
$cmd->execute();

// disconnect
$conn = null;
?>

</body>
</html>
