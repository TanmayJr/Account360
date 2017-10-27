<?php
/**
 * Created by PhpStorm.
 * User: tanmay
 * Date: 26/10/17
 * Time: 11:45 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bannerpagecss.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <!--custom fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cookie|Zilla+Slab+Highlight" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/w3.css">




</head>
<body>

<div class="w3-bar w3-border w3-dark-grey">
    <a href="Fdash.php" class="w3-bar-item w3-padding-16 w3-button">Home</a>
    <a href="Femp.php" class="w3-bar-item w3-padding-16 w3-button">AddEmpInfo</a>
    <a href="Finv.php" class="w3-bar-item w3-padding-16 w3-button">AddInv</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-16 w3-hover-red w3-right">Logout</a>
</div>
<!-- navbar ends-->

<!-- banner ============================================   -->



<!--nav ends-->
<div class="container" style="margin-top: 100px">
    <div class="row" style="margin: 60px">

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myview" style="margin-right: 20px">
            View details
        </button>
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Add details
        </button>

        <!--modal form-->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        Enter details
                    </div>
                    <div class="modal-body">
                        <div>
                            <form action="Binv.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Inven details</label>
                                        <input type="text" class="form-control" placeholder="Inv name" name="invname">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="text" class="form-control"  placeholder="invcost" name="invcost">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Employee details</label>
                                        <input type="text" class="form-control"  name="noinv" placeholder="Number Inv">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="text" class="form-control" name="salemp" placeholder="Salary of Employees">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label class="col-form-label">Abs</label>
                                        <input type="text" class="form-control" name="noleaves" placeholder="leaves">
                                    </div>

                                    <div class="btn-group btn-group-justified">
                                        <div class="btn-group"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
                                        <div class="btn-group"><button type="submit" class="btn btn-primary">Save changes</button></div>
                                    </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--modal form ends-->

    </div>
</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</body>
</html>
