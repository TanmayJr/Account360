<?php
include ('Bdash.php');

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Employee</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="saheel/css/style.css">

 <meta name="viewport" content="width=480, user-scalable=yes">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Roboto+Mono:400,700" rel="stylesheet">
 <link rel="icon" size="64x64" href="/favicon.ico">
 <link rel="icon" sizes="192x192" href="saheel/icon.jpg">
 <link rel="abc" sizes="192x192" href="saheel/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
  
</head>

<body>
<div class="w3-bar w3-border w3-dark-grey">
    <a href="Fdash.php" class="w3-bar-item w3-padding-16 w3-button">Home</a>
    <a href="Femp.php" class="w3-bar-item w3-padding-16 w3-button">AddEmpInfo</a>
    <a href="Finv.php" class="w3-bar-item w3-padding-16 w3-button">AddInv</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-right">Logout</a>
</div>
<!--  nav ends-->


<div class="flex-container">



<article class="article">
<div class="container" >
<section>
 <h2 class="full-width"><pre>Recent Events and Activities</pre></h2>
<br>
</section>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
<div class="item active">
<img src="saheel/i3.jpg" alt="pqr" style="width:1200px;height:304px;">
	<div class="carousel-caption">
           <h3 class="cap">Brainstorming Sessions</h3>
      </div>
</div>

<div class="item">
<img src="saheel/i1.jpg" alt="xyz" style="width:1200px;height:304px;">
	<div class="carousel-caption">
           <h3 class="cap">Succesful Board Meetings</h3>
      </div>
 </div>
    
<div class="item">
<img src="saheel/i2.jpg" alt="abc" style="width:1200px;height:304px;">
	<div class="carousel-caption">
           <h3 class="cap">Healthy Work Environment</h3>
      </div>
</div>
    

<div class="item">
<img src="saheel/i4.jpg" alt="adc" style="width:1200px;height:304px;">
	<div class="carousel-caption">
           <h3 class="cap">Recreational Activities</h3>
      </div>
</div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>
<section>
  <h1 class="full-width"><pre>Employee Count</pre></h1>
</section>

<div class="row">
  <div class="example-1 card">
    <div class="wrapper">
	<div 
      <div class="data">
        <div class="content">
          	<h1 class="title">Total Employees</h1>


         	<p class="text"><?php echo $totale ?></p>



 <label for="show-menu" class="menu-button"><span></span</label>
        </div> 
      </div>
    </div>
  </div>


  <div class="example-2 card">
    <div class="wrapper">
      <div class="data">
        <div class="content">
         <h1 class="title">Employees <br>on Leave</h1>


          <p class="text"><?php echo $abs ?></p>


<label for="show-menu" class="menu-button"><span></span></label>
        </div>
      </div>
    </div>
  </div>




  <div class="example-3 card">
    <div class="wrapper">
      <div class="data">
        <div class="content">
          <h1 class="title">Working Employees</h1>
          

			<p class="text"><?php echo ($totale - $abs )?> </p>


<label for="show-menu" class="menu-button"><span></span></label>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<br><br><br>
</article>

<footer>Copyright &copy;Roshan Tanmay Saheel</footer>
</div>

</body>
</html>
