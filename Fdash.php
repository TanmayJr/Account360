

<?php
include ('Bdash.php');
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


        function drawIncomeChart() {    //call to income chart  //OVERDUE CHART
            var data = google.visualization.arrayToDataTable([
                ['Overdue', 'Paid', 'Left', { role: 'annotation' } ],
                ['November', <?php echo $payd ?>, <?php echo $leftd ?>,'']  //1 0 details

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

        function drawExpenseChart(){ //call to expense chart      //EMP CHART
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Present', <?php echo $pres ?>],
                ['Abs',  <?php echo $abs ?>],

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


        function drawSalesChart() {//Going down
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
    <a href="Fdash.php" class="w3-bar-item w3-padding-16 w3-button">Home</a>
    <a href="Femp.php" class="w3-bar-item w3-padding-16 w3-button">Customer</a>
    <a href="Finv.php" class="w3-bar-item w3-padding-16 w3-button">Inventory</a>
    <a href="Finvoice.php" class="w3-bar-item w3-padding-16 w3-button">Invoice</a>
    <a href="Fbank.php" class="w3-bar-item w3-padding-16 w3-button">Bank Info</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-right">Logout</a>
</div>
<!-- navbar ends-->
<h1>Hello,<?php echo $username; ?></h1>

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
                    <h1>Payment Overdue</h1>
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
                    <h1>Bank Account</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title"><h3>Bank Accounts</h3></div>
                            <hr>
                            <div>
                                <h4>Bank Account 1</h4>
                                <p>Balance: <?php echo $amount ?></p><!here>
                                <p>Last Updated:<?php echo $datex ?></p>
                                <hr>
                                    <a href="Fbank.php">
                                    <button class="w3-button w3-circle w3-teal" style="display: inline-block;">+</button>
                                  </a>
                                    <span><p style="display:inline-block;"> &nbsp;Edit Details</p></span>

                                  <!Button here>
                                <hr>
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
                    <h1>Nothing</h1>
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
                    <h1>Topselling Item</h1>
                </header>

                <!--<div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title">Sales</div>
                            <div id="Sales_chart"></div>
                        </div>
                    </div>
                </div>-->

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">

                            <hr>
                            <div>
                                <h4>Most Sold product: </h4>
                                <h2><?php echo $product ?></h2>
                                <hr>
                                <h4>Number Sold: </h4>
                                <h2><?php echo $count ?></h2>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="w3-col m4 l1">&nbsp;</div>

        <div class="w3-col m4 l3">
            <div class="w3-card-4">
                <header class="w3-container w3-blue">
                    <h1>Employee Info</h1>
                </header>

                <div class="w3-container">
                    <div class="wrapper">

                        <div class="card-block">
                            <div class="card-title"><h3>Employee Count</h3></div>
                            <hr>
                            <div>
                                <h4>Total number of employees:</h4>
                                <h2><?php echo $totale ?></h2>
                                <hr>
                                <h4>Employees on leave</h4>
                                <h2><?php echo $abs ?></h2>
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
