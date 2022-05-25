<<<<<<< HEAD
<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd=" ";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
=======
<?php

$mysqli = new mysqli('localhost', 'root', $pwd, 'database');
>>>>>>> f575bc69225674fdac70c0f943ae44511c9a452f
