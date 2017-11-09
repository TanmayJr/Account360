<?php
//session_start();
////include ('Blogin.php');
//$db_name = "mini";
//$con = mysqli_connect("localhost","root","",$db_name) or die(mysqli_error("Disconnect"));
//if($con){
//echo "Connection established";}
//else{
//    echo "momosad";
//}
//
//$empname = $_POST["empname"];
//$empcity = $_POST["empcity"];
//$noemp = $_POST["noemp"];
//$salemp = $_POST["salemp"];
//$noleaves = $_POST["noleaves"];
////$email = $_SESSION['email'];
//$email = "test@nomail.com";
//echo $noemp;
////$query = "insert into empdetails (email,cname,clocation,noemp,salemp,invname,noinv,costinv,bankacc,bname,isfccode) values ('$email',$cname','$clocation','$noemp','$salemp','$invname','$noinv','$costinv','$bankacc','$bname','$isfccode')";
//$query = "insert into empdetails (email,empname,empcity,noemp,salemp,noleaves) values ('$email',$empname','$empcity','$noemp','$salemp','$noleaves')";
//
//if($query == true){
//    print "Sucess";
//}
//else{
//    print "try again";
//}
///** @var TYPE_NAME $con */
//mysqli_query($con, $query) or die(mysqli_error("in er"));
//mysqli_close($con);
//?>

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
$empname = $_POST["empname"];
$empcity = $_POST["empcity"];
$noemp = $_POST["noemp"];
$salemp = $_POST["salemp"];
$noleaves = $_POST["noleaves"];

$query = "insert into empdetails (email,empname,empcity,noemp,salemp,noleaves) values ('$e','$empname','$empcity','$noemp','$salemp','$noleaves')";
if($query == true){
   echo "true";
}
else{
    print "try again";
}
mysqli_query($con, $query) or die(mysqli_error($con));
mysqli_close($con);
header("Location:Fdash.php");
?>
