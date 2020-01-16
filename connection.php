<!DOCTYPE html>
<html>
<head>
    <title>Database Connection</title>
</head>
<body>
<?php
//$db = new PDO('mysql:host=172.31.22.43;dbname=RICH100', 'RICH100', 'ypLmSZ1Fj2');
//$db = new PDO('mysql:host=localhost;dbname=w20', 'root', '');
$db = new PDO('mysql:host=mysql7.loosefoot.com;dbname=w20', 'comp1006', 'helpme20');
if (!$db)  {
    echo 'could not connect';
}
else {
    echo 'connected to the database';
}
$db = null;
?>
</body>
</html>


