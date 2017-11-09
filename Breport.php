<?php
/**
 * Created by PhpStorm.
 * User: tanmay
 * Date: 9/11/17
 * Time: 8:11 PM
 */?>
<?php
include ('Blogin.php');
$e = $_SESSION['email'];
echo $e;

///////////////////

$con =  mysqli_connect("localhost","root") or die(mysqli_error("Disconnect"));
echo "Connection established";
$db_name = "mini";
mysqli_select_db($con ,$db_name) or die (mysqli_error());
echo "Database found";




?>