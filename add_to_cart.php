<?php
  include_once 'cart_crud.php';
?>
 
<!DOCTYPE html>
<html>
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
            color: black;
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

    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a149241 WHERE FLD_PRODUCT_ID= :pid");
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $pid = $_GET['pid'];
      $stmt->execute();
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
      }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
      <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
      <br>
      <br>
      <br>
        <h2>Product Details</h2>
        <br>
      </div>
      </div>
      </div>
      <br>
      <br>
      <br>


    <div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 well well-sm text-center">
      <?php if ($readrow['FLD_PRODUCT_IMG'] == "" ) {
        echo "No image";
      }
      else { ?>
      <img src="products/<?php echo $readrow['FLD_PRODUCT_IMG'] ?>" class="displayed">
      <?php } ?>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-4">
      <div class="panel panel-default">
      <div class="panel-heading"><strong>Product Details</strong></div>
      <div class="panel-body">
          Below are specifications of the product.
      </div>
      <table class="table">
        <tr>
          <td class="col-xs-4 col-sm-4 col-md-4"><strong>Product ID</strong></td>
          <td ><?php echo $readrow['FLD_PRODUCT_ID']?></td>
          <!--$detailrow['fld_product_id'];-->
        </tr>
        <tr>
          <td><strong>Name</strong></td>
          <td><?php echo $readrow['FLD_PRODUCT_NAME'] ?></td>
        </tr>
        <tr>
          <td><strong>Price</strong></td>
          <td>RM <?php echo $readrow['FLD_PRICE'] ?></td>
        </tr>
        <tr>
          <td><strong>Type</strong></td>
          <td><?php echo $readrow['FLD_TYPE'] ?></td>
        </tr>
        <tr>
          <td><strong>Skin Tone</strong></td>
          <td><?php echo $readrow['FLD_SKIN_TONE'] ?></td>
        </tr>
        <tr>
          <td><strong>Brand</strong></td>
          <td><?php echo $readrow['FLD_BRAND'] ?></td>
        </tr>   
      </table>
      </div>
      </div>
      <form action="cart.php" onsubmit="return validateForm()" method="post" class="form-horizontal" name="frmorder" id="forder">
      <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Make Order</h2>
      </div>
      
     <div class="form-group">
          <label for="qty" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
            <input name="quantity" type="number" class="form-control" id="qty" placeholder="Quantity" min="1" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_OD_QUANTITY']; ?>" required> 
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
           <?php if (isset($_GET['edit'])) { ?>
          <input name="pid" type="hidden" value="<?php echo $readrow['FLD_PRODUCT_ID'] ?>">
        <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>  
        <button class="btn btn-grey" onsubmit=validateForm() type="submit" name="addcart"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add To Cart</button>
        <?php } ?>
        <button class="btn btn-grey" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        </div>
      </div>
      </form>
        </div>
        </div>

        
    <script type="text/javascript">
     
      function validateForm() {
     
          //var x = document.forms["frmorder"]["pid"].value;
          //var y = document.forms["frmorder"]["quantity"].value;
          var y = document.getElementById("qty").value;
          if (y == null || y == "") {
              alert("Quantity must be filled out");
              //document.forms["frmorder"]["quantity"].focus();
              document.getElementById("qty").focus();
              return false;
          }
           
          return true;
      }
     
    </script>
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