<?php
     include_once 'database.php';
     
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | SilkyHerbsCosmetics Online Shopping</title>

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
    	.thumbnail img {
    		height: 240px;
    		width: 60%;
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
                        <a href="cart.php"><span class="glyphicon glyphicon-briefcase"></span> Shopping Cart</a>
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

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Your Favorite Cosmetics Stuffs all are here</h1>
                <hr>
                <p>SilkyHerbs Cosmetics Online Shopping can help you to find better makeup and cosmetics stuffs by just an online! Enjoy shopping your beauty needs at our website and let's be always fresh and gorgeous!</p>
                <a href="#catalogue" class="btn btn-primary btn-xl page-scroll">Let's Shopping!</a>
            </div>
        </div>
    </header>

    <section id="catalogue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Product Catalogue</h2>
                    <hr class="primary">
                </div>
            </div> 

        </div>
        <div class="container">
            <div class="row">
            	<div class="col-md-3">
                <br>
                    <img src="logo.png" width="100%" height="100%">
                <br>
                <br>
                <h2 class="lead">Shop by brands:</h2>
                <div class="list-group">
                    <a href="home.php" class="list-group-item">All categories</a>
                    <a href="product.php?action=sort&item=sephora" class="list-group-item">Sephora</a>
                    <a href="product.php?action=sort&item=tarte" class="list-group-item">Tarte</a>
                    <a href="product.php?action=sort&item=smashbox" class="list-group-item">Smashbox</a>
                    <a href="product.php?action=sort&item=bobbi" class="list-group-item">Bobbi Brown</a>
                    <a href="product.php?action=sort&item=ori" class="list-group-item">Origins</a>
                    <a href="product.php?action=sort&item=benefits" class="list-group-item">Benefits Cosmetics</a>
                    <a href="product.php?action=sort&item=anas" class="list-group-item">Anastia Beverly Hills</a>
                    <a href="product.php?action=sort&item=nars" class="list-group-item">NARS</a>
                    <a href="product.php?action=sort&item=bare" class="list-group-item">bareMinerals</a>
                    <a href="product.php?action=sort&item=urban" class="list-group-item">Urban Decay</a>
                    <a href="product.php?action=sort&item=clin" class="list-group-item">CLINIQUE</a>
                    <a href="product.php?action=sort&item=laura" class="list-group-item">Laura Mercier</a>
                    <a href="product.php?action=sort&item=dior" class="list-group-item">Dior</a>
                    <a href="product.php?action=sort&item=stila" class="list-group-item">stila</a>
                </div>

                <p class="lead">Sort</p>
                <div class="list-group">
                    <a href="product.php?action=sort&item=az" class="list-group-item">A-Z</a>
                    <a href="product.php?action=sort&item=low" class="list-group-item">Price Low to High</a>
                </div>

            </div>               
                
            <div class="row">
                	
                	<?php
                    // Read
                    $per_page = 6;
                    if (isset($_GET["page"]))
                     
                    	$page = $_GET["page"] ;
				    
				    	else
				    
				    	$page = 1;
				    
				    	$start_from = ($page-1) * $per_page;

                        if($action=='sort'){


                      $item= $_GET['item'];

                      if($item=='all'){
                        $sorting=" ";
                      }

                      if($item=='sephora'){
                        $sorting=" where FLD_BRAND='Sephora' ";
                      }

                      if($item=='tarte'){
                        $sorting=" where FLD_BRAND='Tarte' ";
                      }

                      if($item=='smashbox'){
                        $sorting=" where FLD_BRAND='Smashbox' ";
                      }               


                      if($item=='bobbi'){
                        $sorting=" where FLD_BRAND='Bobbi Brown' ";
                      }

                      if($item=='ori'){
                        $sorting=" where FLD_BRAND='Origins' ";
                      }

                      if($item=='benefits'){
                        $sorting=" where FLD_BRAND='Benefits Cosmetics' ";
                      }

                      if($item=='anas'){
                        $sorting=" where FLD_BRAND='Anastia Beverly Hills' ";
                      }

                      if($item=='nars'){
                        $sorting=" where FLD_BRAND='NARS' ";
                      }

                      if($item=='bare'){
                        $sorting=" where FLD_BRAND='bareMinerals' ";
                      }

                      if($item=='urban'){
                        $sorting=" where FLD_BRAND='Urban Decay' ";
                      }

                      if($item=='makeup'){
                        $sorting=" where FLD_BRAND='MAKE UP FOR EVER' ";
                      }

                      if($item=='clin'){
                        $sorting=" where FLD_BRAND='CLINIQUE' ";
                      }

                      if($item=='laura'){
                        $sorting=" where FLD_BRAND='Laura Mercier' ";
                      }

                      if($item=='dior'){
                        $sorting=" where FLD_BRAND='Dior' ";
                      }

                      if($item=='stila'){
                        $sorting=" where FLD_BRAND='stila' ";
                      }


                      if($item=='az'){
                        $sorting=" ORDER BY `tbl_products_a149241`.`FLD_PRODUCT_NAME` ASC ";
                      }                                            

                      if($item=='low'){
                        $sorting=" ORDER BY `tbl_products_a149241`.`FLD_PRICE` ASC ";
                      }                                            

                    }
                    $sql = "select * from tbl_products_a149241 ".$sorting." LIMIT $start_from, $per_page ";

				 	try {
				        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				        $stmt = $conn->prepare("SELECT * FROM tbl_products_a149241 LIMIT $start_from, $per_page");
				        $stmt->execute();
				        $result = $stmt->fetchAll();
				    }
				    catch(PDOException $e){
				    	echo "Error: " . $e->getMessage();
				    }
				    foreach($result as $readrow) {
				   	?> 

				   	<div class="col-sm-4 col-lg-4 col-md-4">
				    <div class="thumbnail">
				    <img src="products/<?php echo $readrow['FLD_PRODUCT_IMG'] ?>" class="img-responsive" width="10%" height="5%">
				    <div class="caption">
				    <h4 class="pull-right"><td>RM<?php echo $readrow['FLD_PRICE']; ?></h4>
				    <h4><a href="products_details.php?pid=<?php echo $readrow['FLD_PRODUCT_ID']; ?>"?> <?php echo $readrow['FLD_PRODUCT_ID']; ?></a></h4>
				    <p><?php echo $readrow['FLD_PRODUCT_NAME']; ?></p>
				    </div>
				    	<div class="ratings">
				     	<p class="pull-right">15 reviews</p>
				    	<p>
				      		<span class="glyphicon glyphicon-star"></span>
				      		<span class="glyphicon glyphicon-star"></span>
				      		<span class="glyphicon glyphicon-star"></span>
				      		<span class="glyphicon glyphicon-star"></span>
				      		<span class="glyphicon glyphicon-star"></span>
				    	</p>
				    	</div>
				    	<a href="cart.php?pid=<?php echo $readrow['FLD_PRODUCT_ID']; ?>" role="button" class="btn btn-primary btn-lg btn-block">Add to cart</a>
				        </div>
				    </div>
					<?php
				    	}
				    	$conn = null;
				    	?>
				                
				<div class="row">  

					</div>

				    <div class="row">
				    	<div class="col-xs-12 col-sm-10 col-sm-offset-4 col-md-8 col-md-offset-4" align="center">
				        	<nav>
				        		<ul class="pagination">
				          		<?php
				          		try {
				            		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				            		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				            		$stmt = $conn->prepare("SELECT * FROM tbl_products_a149241");
				            		$stmt->execute();
				            		$result = $stmt->fetchAll();
				            		$total_records = count($result);
				            
				         		}
				          		catch(PDOException $e){
				                echo "Error: " . $e->getMessage();
				         		}
				          		$total_pages = ceil($total_records / $per_page);
				          

				          		?>
				         		<?php if ($page==1) { ?>
				        		<li class="disabled"><span aria-hidden="true">«</span></li>
				         		<?php } else { ?>
				        		<li><a href="product.php?action=sort&item=$item&page=1" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				          		<?php } ?>
				          		<?php
				          		for ($i=1; $i<=$total_pages; $i++)
				            		if ($i == $page)
				              			echo "<li class=\"active\"><a href=\"product.php?action=sort&item=$item&page=$i\">$i</a></li>";
				            		else
				              			echo "<li><a href=\"product.php?action=sort&item=$item&page=$i\">$i</a></li>";
				          		?>
				         		<?php if ($page==$total_pages) { ?>
				          			<li class="disabled"><span aria-hidden="true">»</span></li>
				          		<?php } else { ?>
				           			<li><a href="product.php?action=sort&item=$item&page=$total_pages" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  				<?php } ?>
				        		</ul>
				      		</nav>
				        </div>
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
    </div>
    </div>
    </section>

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
