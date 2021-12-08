<?php 


define('SERVER', 'us-cdbr-east-04.cleardb.com');
define('USER', 'be4a3c5be39402');
define('DATABASE', 'heroku_7cf8a6d4a1a68ef');
define('PASSWORD', '7b98e4e1');


$conn= new mysqli('SERVER','USER','PASSWORD','DATABASE')or die("Could not connect to mysql".mysqli_error($con));

