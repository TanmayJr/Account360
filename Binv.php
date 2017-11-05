<?php
/**
 * Created by PhpStorm.
 * User: tanmay
 * Date: 26/10/17
 * Time: 11:48 PM
 */?>
<?php

///////////////////
include ('Blogin.php');
$e = $_SESSION['email'];
echo $e;

///////////////////

$con =  mysqli_connect("localhost","root") or die(mysqli_error("Disconnect"));
echo "Connection established";
$db_name = "mini";
mysqli_select_db($con ,$db_name) or die (mysqli_error());
echo "Database found";
$invname = $_POST["invname"];
$invcost = $_POST["invcost"];
$noinv = $_POST["noinv"];


$query = "insert into invdetails (email,invname,invcost,noinv) values ('$e','$invname','$invcost','$noinv')";
if($query == true){
    echo "true";
}
else{
    print "try again";
}
mysqli_query($con, $query) or die(mysqli_error("in er"));
mysqli_close($con);
header("Location:Fdash.php");
?>
