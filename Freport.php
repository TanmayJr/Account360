<?php
/**
 * Created by PhpStorm.
 * User: tanmay
 * Date: 9/11/17
 * Time: 7:59 PM
 */?>



<?php
include ('Breport.php');
?>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="css/w3.css">


</head>
<body>


<div class="w3-bar w3-border w3-dark-grey">
    <a href="Fdash.php" class="w3-bar-item w3-padding-16 w3-button">Home</a>
    <a href="Femp.php" class="w3-bar-item w3-padding-16 w3-button">Customer</a>
    <a href="Finv.php" class="w3-bar-item w3-padding-16 w3-button">Inventory</a>
    <a href="Finvoice.php" class="w3-bar-item w3-padding-16 w3-button">Invoice</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-right">Logout</a>
</div>
<!-- navbar ends-->
<h1>Hello,<?php echo "jhhas"; ?></h1>

<table class="w3-table-all">
    <thead>
    <tr class="w3-light-grey">
        <th>Customer Name</th>
        <th>Product name</th>
        <th>Number</th>
        <th>Payment</th>
    </tr>
    </thead>
<!--    <tr>-->
<!--        <td>Jill</td>-->
<!--        <td>Smith</td>-->
<!--        <td>50</td>-->
<!--    </tr>-->

    <?php
    $result=mysqli_query($con,"SELECT * from invoice");
    // $data=mysqli_fetch_assoc($result);
    // $abs = $data['image'];
    // echo $abs;
    // echo "<img src='../images/".$abs."' >";
    while($data=mysqli_fetch_assoc($result)){
//        $in = $data['invname'];
        echo "<tr class='w3-light-grey'>";
        echo "<td>".$data['custid']."</td>";
        echo "<td>".$data['invid']."</td>";
        echo "<td>".$data['noitems']."</td>";
        if($data['Pay_received'] == 1){
            $sta = 'Done';
        }
        else{
            $sta = 'Pending';
        }
        echo "<td>".$sta."</td>";
//        echo "<h1>".$data['artname']."   ".$data['cost']."<h1></div>";
        echo "</tr>";
    }

    ?>
    </tr>
</table>









</body>


</html>
