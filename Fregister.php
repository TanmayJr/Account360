
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

<script type="text/javascript">

        /*=========== For Signup ===========*/                      
        
        function validateForm() {

            
            var name = document.registration.name;
            var company = document.registration.company;
            var email = document.registration.email;
            var pwd1 = document.registration.pwd1;
            var pwd2 = document.registration.pwd2;
            
            if (name.value.length == 0 ){
                alert("UserName cannot be empty !!");
                name.focus();
                return false;
            }

            if (company.value.length == 0 ){
                alert("Company cannot be empty !!");
                company.focus();
                return false;
            }

            if (email.value.length == 0 ){
                alert("Email cannot be empty !!");
                email.focus();
                return false;
            }

            var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  
            if(!pwd1.value.match(paswd))   
            {    
                alert('password between 7 to 15 characters which contain at least one numeric digit and a special character!')  
                pwd1.focus();
                return false;
            }

            if ( pwd1.value != pwd2.value) {
                alert("Password should be same !!");
                pwd2.focus();      
                return false;        
                
            }

            return true;
        }

        /*============ Signup Done =================*/
</script>


</head>

<body>
<div class="backimage">

    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="centerintro">
                    <div>
                        <form name="registration" action="Bregister.php" method="post" onsubmit="return validateForm()">
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




