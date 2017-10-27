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

                                <form action = "Blogin.php" method = "post">
                                    <label></label><input class="form-control mr-sm-2" type = "text" name = "email" id="email" class = "box" placeholder="Email"/>
                                    <label></label><input class="form-control mr-sm-2" type = "password" name = "key" id="key" class = "box" placeholder="Password" />
                                   <h1 align="center"> <input class="btn btn-outline-info my-2 my-sm-0" type = "submit" value = "Login "/><br /></h1>
                                </form>

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
