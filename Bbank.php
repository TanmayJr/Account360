<?php

include ('Blogin.php');
$e = $_SESSION['email'];
echo $e;

$con =  mysqli_connect("localhost","root","") or die(mysqli_error("Disconnect"));
echo "Connection established";
$db_name = "mini";
mysqli_select_db($con ,$db_name) or die (mysqli_error());
echo "Database found";

$amount = $_POST["amount"];
$date = $_POST["date"];

echo $amount;
#echo "\r\n";
echo $date;

$result = mysqli_query($con, "SELECT Amount from users where email='$e' ");
$row = $result->fetch_object();
$amountx = $row->Amount;

#echo $amountx;
$final = $amountx + $amount;

#echo $final;

#update $final

$update = "UPDATE users SET Amount ='$final' where email='$e' ";

if ($con->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

$update = "UPDATE users SET date_update=now() where email='$e' ";
if ($con->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

mysqli_close($con);
header("Location:Fdash.php");

?>
