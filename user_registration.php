<?php
    include_once 'customers_crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register | SilkyHerbsCosmetics Online Shopping</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        @media (min-width: 768px)
            .navbar-default.affix {
            background-color: white;
            border-color: rgba(34, 34, 34, 0.05);
        }

    </style>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php">SilkyHerbs Cosmetics</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li>
                        <a href="#catalogue"><span class="glyphicon glyphicon-th"></span> Catalogue</a>
                    </li>
                    <li>
                        <a href="user_registration.php"><span class="glyphicon glyphicon-user"></span> Register</a>
                    </li>
                    <li>
                        <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                    </li>
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a></li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <br>
            <div class="page-header">
                <h3 class="title">Register<span> Form</span></h3>
                <p>Want to join us? Register first! </p>
                <br>
            </div>
        <br>

        <div class="widget-shadow">
            <div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
                <h4>Already have an Account ?
                <a href="login.php">  Sign In »</a> </h4>
                <br>
            </div>
            <div class="login-body">
                <form class="wow fadeInUp animated" data-wow-delay=".7s" action="home.php" method="post">
                    <div class="form-group">
                        <label for="custfname" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input name="fname" type="text" class="form-control" id="custfname" placeholder="First Name" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">          
                        <label for="custlname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input name="lname" type="text" class="form-control" id="custlname" placeholder="Last Name" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">          
                        <label for="caddress" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" class="form-control" id="caddress" placeholder="Address" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cphone" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input name="phone" type="text" class="form-control" id="cphone" placeholder="Phone Number" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">          
                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-9">
                            <div class="radio">
                                <label>
                                    <input name="gender" type="radio" id="gender" value="Male"  required> Male<br>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="gender" type="radio" id="gender" value="Female"  required> Female<br>
                                </label>
                            </div>
                            <br>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label for="custid" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="text" class="form-control" id="custid" placeholder="Email" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="custid" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-9">
                            <input name="user" type="text" class="form-control" id="custid" placeholder="Username" value="" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="custid" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-9">
                            <input name="pwd" type="password" class="form-control" id="custid" placeholder="Password" value="" required>
                                <input type="hidden" name="cid" value="<?php echo $editrow['FLD_CUSTOMER_ID']; ?>">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                        <?php if (isset($_GET['edit'])) { ?>
                        <input type="hidden" name="oldcid" value="<?php echo $editrow['FLD_CUSTOMER_ID']; ?>">
                        <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
                        <?php } else { ?>
                        <button class="btn btn-danger btn-block" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Register</button>
                        <?php } ?>
                        <button class="btn btn-danger btn-block" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
        <!-- /.container -->
        <div class="container">

            <hr>
        
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2016 SilkyHerbsCosmetics Online Shop.</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
