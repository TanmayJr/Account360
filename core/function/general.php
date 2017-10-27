<?php

function sanitize($data){
    $conn = mysqli_connect('localhost','root','') ;
    return mysqli_real_escape_string($conn , $data);
}
?>