<?php

$conn = new mysqli('localhost', 'root', '', 'crudoperation');

if($conn) {
   // echo "Connection Succesfull";
} else {
    die(mysqli_error($conn));
}

?>