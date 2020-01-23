<?php

// 1. Connect to the db - Host – mysql7.loosefoot.com / Database – w20 / Username – comp1006 / Password – helpme20
$servername = "mysql7.loosefoot.com";
$username = "comp1006";
$password = "helpme20";

$db = new PDO("mysql:host=$servername;dbname=w20", $username, $password);

// 2. Write the SQL Query to read all the records from the persons table
$sql = "SELECT * FROM persons";

// 3. Create a Command variable $cmd then use it to run the SQL Query
$cmd = $db->prepare($sql);
$cmd->execute();

// 4. Use the fetch() method of the PDO Command variable to store the data into a variable called $persons.  See https://www.php.net/manual/en/pdostatement.fetchall.php for details.
$persons = $cmd->fetchAll();

// 5. Use a foreach loop to iterate (cycle) through all the values in the $persons variable.  Inside this loop, use an echo command to display the name of each person.  See https://www.php.net/manual/en/control-structures.foreach.php for details.
foreach ($persons as $value) {
    echo $value['name'] . " " . $value['email'] . "<br />";
}

// 6. Disconnect from the database
$db = null;
?>
