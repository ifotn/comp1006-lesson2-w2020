<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
// connect
$db = new PDO('mysql:host=mysql7.loosefoot.com;dbname=w20', 'comp1006', 'helpme20');

// set up the sql query to fetch the list of names from the db
$sql = "SELECT name FROM persons";

// execute the query
$cmd = $db->prepare($sql);
$cmd->execute();
$persons = $cmd->fetchAll();

// create an HTML dropdown list
echo '<select name="name">';

// inside the dropdown, add each name to the list persons[0]['aples','mangoes]
foreach($persons as $value) {
    echo '<option>' . $value['name'] . '</option>';
}

// close the dropdown tag
echo '</select>';

// disconnect
$db = null;
?>

</body>
</html>
