<?php
/**
 * Created by PhpStorm.
 * User: tanmay
 * Date: 26/10/17
 * Time: 7:09 PM
 */?>

<html>
<head>
    <title>Accounts360</title>
    <link rel="stylesheet" type="text/css" href="css/Fintro.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <script type="text/javascript">


        /*============== For Login ==============*/

        function validateForm2() {
            
            //alert("Here");  

            var username1 = document.login.email;
            var password1 = document.login.key;

            //alert(username1.value.length);

            if (username1.value.length == 0 ){
                alert("Email cannot be empty !");
                username1.focus();
                return false;
            }


            var paswd =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  


            if(!password1.value.match(paswd)) {
                
                alert("Wrong Password !!");
                username1.focus();
                return false;
            }  
            return true;
        }

        /*============== LogIn Done =============*/

    </script>

</head>
<body>
<div class="backimage">

    <div class="outer">
        <div class="middle">
            <div class="inner">
                <div class="centerintro">
                    <div style="border-style: solid ;border-width: medium">
                        <div style="color: white">
                        <h3 align="center">Login</h3>
                        </div>
                        <div style = "" align = "left">

                            <div style = "margin:30px">

                                <form action = "Blogin.php" method = "post" name = "login" onsubmit="return validateForm2()">
                                    <label></label><input class="form-control mr-sm-2" type = "email" name = "email" id="email" class = "box" placeholder="Email"/>
                                    <label></label><input class="form-control mr-sm-2" type = "password" name = "key" id="key" class = "box" placeholder="Password" />
                                   <h1 align="center"> <input class="btn btn-outline-info my-2 my-sm-0" type = "submit" value = "Login "/><br /></h1>
                                </form>
                                <a href="Fregister.php  .php">Dont have acount?</a>

                                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
