<?php 

//use PDO or MySQLi to connect to database, add server name, username, password, database name
$conn = mysqli_connect('localhost', 'dotunpat_dotun', '4tW&b8BS@CDi', 'dotunpat_ninja_pizza');

//check connection to see if works
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}


?>