<?php

include 'cart_crud.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cart List | SilkyHerbsCosmetics Online Shopping</title>

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
        .banner-top {
            text-align: center;
            width: 100%;
            height: 400px;
            display: block;
            background: url(img/1.jpg)no-repeat;
            padding: 10em 0;
        }

        .h1, h1, .h2, h2 {
            font-weight: 500;
            line-height: 1.1;
            color: white;
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

    <!--banner-->
    <div class="banner-top">
        <div class="container">
            <h1>Shopping Cart</h1>
            <em></em>
            <h2><a href="home.php">Home</a><label>/</label>Shopping Cart</a></h2>
        </div>
    </div>

    <br>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
        <div class="page-header">
            <h3>Cart List</h3>
        </div>
        <br>

        <table class="table table-hover table-responsive table-bordered">
      <tr>
        <th>Product</th>
        <th>Price (RM)</th>
        <th>Quantity</th>
        <th>Action</th>
        
      </tr>
      <?php
      $grandtotal = 0;
      $counter = 1;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_order_details_a149241, tbl_products_a149241 WHERE tbl_order_details_a149241.FLD_PRODUCT_ID = tbl_products_a149241.FLD_PRODUCT_ID ");
        $stmt->bindParam(':did', $did, PDO::PARAM_STR);
        //$did = $_GET['did'];
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $detailrow) {
      ?>
      <tr>
        <td><?php echo $detailrow['FLD_PRODUCT_NAME']; ?></td>
        <td><?php echo $detailrow['FLD_PRICE']; ?></td>
        <td><?php echo $detailrow['FLD_OD_QUANTITY']; ?></td>
        <td>
          <a href="cart_crud.php?delete=<?php echo $detailrow['FLD_ORDERITEM_ID']; ?>&did=<?php echo $_GET['did']; ?>" onclick="return confirm('Are you sure to delete?');" colspan="2" class="btn btn-danger btn-xs" role="button"><span class='glyphicon glyphicon-remove'></span> Remove from cart</a>
          <a href="cart_crud.php?edit=<?php echo $readrow['FLD_ORDERITEM_ID']; ?>" colspan="2" class="btn btn-success btn-xs" role="button"><span class='glyphicon glyphicon-edit'> Edit</a>
        </td>
      </tr>
       <?php
      $grandtotal = $grandtotal + $detailrow['FLD_PRICE']*$detailrow['FLD_OD_QUANTITY'];
    $counter++;
  } // while
  ?>
      <tr>
      <th>TOTAL</th>
      <td colspan="2" class="text-right">RM <?php echo number_format($grandtotal,2) ?></td>
      <td><a href='receipt.php' class='btn btn-success'><span class='glyphicon glyphicon-shopping-cart'></span> Checkout</a></td>
      </tr>
      
      </table>
    </div>
  </div>
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