<?php

include ('Blogin.php');
$e = $_SESSION['email'];
if($con =  mysqli_connect("localhost","root", '') or die(mysqli_error("Disconnect"))){
    //    echo "Connection established";
}
$db_name = "mini";
if(mysqli_select_db($con ,$db_name) or die (mysqli_error())){
    //echo "Database found";
}
$result=mysqli_query($con,"SELECT count(*) as total from empdetails where email=$e ");
$data=mysqli_fetch_assoc($result);
echo $data['total'];


$exp1 = 1;
$exp2 = 5;
$exp3 = 1;
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
<html>
<head>
    <title>DASH</title>
    <link rel="stylesheet" type="text/css" href="css/w3.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});

        google.charts.setOnLoadCallback(drawIncomeChart);

        google.charts.setOnLoadCallback(drawExpenseChart);

        google.charts.setOnLoadCallback(drawProfitlossChart);

        google.charts.setOnLoadCallback(drawSalesChart);


        function drawIncomeChart() {    //call to income chart
            var data = google.visualization.arrayToDataTable([
                ['Overdue', '30 days Paid', 'Left', { role: 'annotation' } ],
                ['2010', 15, 37,'']

            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                width: 200,
                height: 300,
                legend: { position: 'top', maxLines: 3 },
                bar: { groupWidth: '75%' },
                isStacked: true
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("Income_chart"));
            chart.draw(view, options);
        }

        function drawExpenseChart(){ //call to expense chart
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['ex1',   <?php echo $exp1 ?>],
                ['ex2',    <?php echo $exp2 ?>],
                ['ex3',    <?php echo $exp3 ?>],

            ]);

            var options = {
                width: 200,
                height: 300,
                chartArea: {width: 200},
                title: 'My expense',
                pieHole: 0.5

            };

            var chart = new google.visualization.PieChart(document.getElementById('Expense_chart'));
            chart.draw(data, options);
        }

        function drawProfitlossChart(){
            var data = google.visualization.arrayToDataTable([
                ['Element', 'Density', { role: 'style' }],
                ['Profit', 20, 'lightgreen'],
                ['Loss', 10, 'silver'],

            ]);

            var options = {
                width: 200,
                height: 300,
                bar: {groupWidth: "35%"},
                chartArea: {width: 200},
                title: 'My Net Income',

            }

            var chart = new google.visualization.BarChart(document.getElementById('Profitloss_chart'));
            chart.draw(data, options);
        }


        function drawSalesChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                title: 'Company Performance',
                height: 300,
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('Sales_chart'));
            chart.draw(data, options);
        }

    </script>


</head>
<body>


<div class="w3-bar w3-border w3-dark-grey">
    <a href="#" class="w3-bar-item w3-padding-16 w3-button">Home</a>
    <a href="#" class="w3-bar-item w3-padding-16 w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-padding-16 w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-green w3-right">Link 3</a>
</div>
<!-- navbar ends-->
<h1>Hello,<?php echo $username; ?></h1>
<h1>email : <?php echo $e  ?></h1>

<div class="w3-container" style="margin-left: 50px;">
    <div class="w3-row">
<!--        <div class="w3-col m4 l1">&nbsp;</div>-->
        <div class="w3-col m4 l3">
             <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Expenses</h1>
                </header>

                    <div class="w3-container">
                        <div class="wrapper">

                            <div class="card-block">
                                <div id="Expense_chart"></div>
                            </div>
                        </div>
                    </div>

             </div>
        </div>
        <div class="w3-col m4 l1">&nbsp;</div>

        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Income chart</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper ">

                        <div class="card-block">
                            <div id="Income_chart"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w3-col m4 l1">&nbsp;</div>

        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Income chart</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title"><h3>Bank Accounts</h3></div>
                            <hr>
                            <div>
                                <h4>Bank Account 1</h4>
                                <p>Balance: </p>
                                <p>Last Updated:</p>
                                <hr>


                                <h4>Bank Account 1</h4>
                                <p>Balance: </p>
                                <p>Last Updated:</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


<!--    aaaaaaaaaaaaaaaaaaaaaaaa -->
    <div class="w3-row" style="margin-top: 30px;">
        <!--        <div class="w3-col m4 l1">&nbsp;</div>-->
        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Expenses</h1>
                </header>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title">Expenses</div>
                        <div id="Profitloss_chart"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w3-col m4 l1">&nbsp;</div>

        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Income chart</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title">Sales</div>
                            <div id="Sales_chart"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w3-col m4 l1">&nbsp;</div>

        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Income chart</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title"><h3>Employee Count</h3></div>
                            <hr>
                            <div>
                                <h4>Total number of employees:</h4>
                                <h2>25</h2>
                                <hr>
                                <h4>Employees on leave</h4>
                                <h2>2</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>






</div>





</body>


</html>