<!DOCTYPE html>
<html>
<head>
    <title>Database Connection</title>
</head>
<body>
<?php
$db = new PDO('mysql:host=172.31.22.43;dbname=RICH100', 'RICH100', 'ypLmSZ1Fj2');
//$db = new PDO('mysql:host=lamp.computerstudi.es;dbname=RICH100', 'RICH100', 'ypLmSZ1Fj2');
//$db = new PDO('mysql:host=localhost;dbname=w20', 'root', '');
//$db = new PDO('mysql:host=mysql7.loosefoot.com;dbname=w20', 'comp1006', 'helpme20');
//$db = new PDO('mysql:host=52.60.209.3;dbname=gcc200409537', 'gcc200409537', 'Cux1iFxKPy');
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


