<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
    header("Location: Fintro.php");
    exit;
}
?>

<?php

include ('Blogin.php');
$e = $_SESSION['email'];
$_SESSION['email'] = $_SESSION['email'];

if($con =  mysqli_connect("localhost","root", '') or die(mysqli_error("Disconnect"))){
    //    echo "Connection established";
}
$db_name = "mini";
if(mysqli_select_db($con ,$db_name) or die (mysqli_error())){
    //echo "Database found";
}

//////////////////////////

$result=mysqli_query($con,"SELECT count(*) as total from empdetails where email='$e' and noleaves > 11");
$data=mysqli_fetch_assoc($result);
$abs = $data['total'];


$result=mysqli_query($con,"SELECT count(*) as total from empdetails where email='$e'");
$data=mysqli_fetch_assoc($result);
$totale = $data['total'];


$pres = $totale - $abs;


$result=mysqli_query($con,"SELECT invid as name from invoice where email='$e' and noitems=(Select max(noitems) from invoice  where email='$e')");
#$data=mysqli_fetch_assoc($result);
#$product = $data['invid'];
$row = $result->fetch_object();
$product = $row->name;
#echo $product;

$result=mysqli_query($con,"SELECT max(noitems) as noi from invoice where email='$e'");
$row = $result->fetch_object();
$count = $row->noi;
#echo $count;

$result = mysqli_query($con, "SELECT Amount from users where email='$e' ");
$row = $result->fetch_object();
$amount = $row->Amount;

$result = mysqli_query($con, "SELECT date_update from users where email='$e' ");
$row = $result->fetch_object();
$datex = $row->date_update;
#echo $datex;


#For graph

$result=mysqli_query($con,"SELECT count(*) as total from invoice where email='$e' and Pay_received = 1");
$data=mysqli_fetch_assoc($result);
$payd = $data['total'];
#echo $payd;

$result=mysqli_query($con,"SELECT count(*) as total from invoice where email='$e'");
$data=mysqli_fetch_assoc($result);
$totald = $data['total'];
#echo $totald;

$leftd = $totald - $payd;

#echo $amount;

/*$result=mysqli_query($con,"SELECT noleaves from empdetails where email=$e ");
echo mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result) ){
    echo $row['noleaves'];

}*/
//echo "abcde";
//echo $data['total'];
//$totalemp =  $data['total'];





///////////////////////////////



$sql="SELECT username FROM users where email = '$e' ";



if ($result=mysqli_query($con,$sql))
{
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    {
        $username =  $row[0];
    }
    // Free result set
    mysqli_free_result($result);
}
else {
    echo "Query failed";
}
?>
