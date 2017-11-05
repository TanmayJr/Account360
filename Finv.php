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

<script type="text/javascript">

        /*=========== For Signup ===========*/                      
        
        function validateForm() {

            //alert("HELLO");

            var name = document.registration.invname;
            var company = document.registration.noinv;
            var email = document.registration.citem;

            if (name.value.length == 0 ){
                alert("Product name cannot be empty !!");
                name.focus();
                return false;
            }

            if (company.value.length == 0 ){
                alert("No. of items cannot be empty !!");
                company.focus();
                return false;
            }

            

            if (email.value.length == 0 ){
                alert("Cost of items cannot be empty !!");
                email.focus();
                return false;
            }            
            



            return true;
        }

        /*============ Signup Done =================*/
</script>



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
<!--                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Register</button>-->
<!--                <button class="btn btn-outline-info my-2 my-sm-0"  style="margin-left: 10px" type="submit">Login</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </nav>-->
<!--</div>-->


<!-- banner ============================================   -->



<!--nav ends-->
<div class="container" style="margin-top: 100px">
    <div class="row" style="margin: 60px">

        <a href="employee.php">  <button class="btn btn-primary btn-lg" style="margin-right: 20px">
                View details
            </button></a>
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
                            <form action="Binv.php" method="post" name="registration" onsubmit="return validateForm()">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Inventory details</label>
                                        <input type="text" class="form-control" placeholder="Product name" name="invname">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="number" class="form-control"  placeholder="Number of items" name="noinv">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Cost details</label>
                                        <input type="text" class="form-control w3-disabled"  name="invid" placeholder="Product ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">&nbsp;</label>
                                        <input type="number" class="form-control" name="invcost" placeholder="Cost of one item" name="citem">
                                    </div>
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