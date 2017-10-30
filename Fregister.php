
<html>
<head>
  <meta charset="UTF-8">
  <title>Accounts360</title>
<!--      <link rel="stylesheet" href="register.css">-->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="css/Fintro.css">
       <meta name="viewport" content="width=480, user-scalable=yes">
 <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Roboto+Mono:400,700" rel="stylesheet">
 <link rel="icon" size="64x64" href="/favicon.ico">
 <link rel="icon" sizes="192x192" href="icon.jpg">
 <link rel="abc" sizes="192x192" href="icon.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>

<body>
<div class="backimage">

    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="centerintro">
                    <div>
                        <form name="registration" action="Bregister.php" method="post"">
                        <!--   onsubmit="return formvalidation();  -->
                        <h2 font color="white">Sign Up</h2>

                        <p>
                            <input class="form-control mr-sm-2" id="name" name="name" type="text" placeholder="Name">
                        </p>



                        <p>
                            <input class="form-control mr-sm-2" id="company" name="company" type="text" placeholder="Company Name">
                        </p>
                        <p>
                            <input class="form-control mr-sm-2" id="email" name="email" type="text" placeholder="Email Id">
                        </p>

                        <p>
                            <input class="form-control mr-sm-2" id="pwd1" name="pwd1" type="password" placeholder="Password" onkeyup='check();' >
                        </p>

                        <p>
                            <input class="form-control mr-sm-2" id="pwd2" name="pwd2" type="password" placeholder="Confirm Password" onkeyup='check();'>
                            <span id='message'></span>
                        </p>


                        <input class="btn btn-outline-info my-2 my-sm-0" type="submit" name="submit" value="Create My Account" id="submit">

                        </form>
                    <a href="Flogin.php">Already have an account</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="register.js"></script>
	
</body>
</html>




