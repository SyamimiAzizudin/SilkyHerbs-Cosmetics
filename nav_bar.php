<?php
if (!isset($_SESSION['cart_items']) || $_SESSION['cart_items'] == ''){
    $_SESSION['cart_items']=null;
}

if (!isset($_SESSION['login']) || $_SESSION['login'] == ''){
    $_SESSION['login']=null;
}

$cart_count=count($_SESSION['cart_items']);

?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">SilkyHerbsCosmetics</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li <?php echo $page_title=="Products" ? "class='active'" : ""; ?> >
          <a href="product.php">Products</a>
      </li>
      <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
          <a href="cart.php">
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
         </a>
      </li>
    </ul>


      <ul class="nav navbar-nav navbar-right">

      <?php
        if (($_SESSION['login']==null)||($_SESSION['login']==" "))
        {
          $_SESSION['login']=null;
        echo "<li><a href=login.php>Login</a></li>";
        echo "<li><a href=user_registration.php>Register</a></li>";

        }
        else
        {
        echo  "<ul class='nav navbar-nav'>
            <li><a>Sign in as  <b> ".$_SESSION['login']."</b></a></li>
            <li><a href='order.php'>Orders</a></li>
            <li><a href='logout.php'>Logout</a></li>
          </ul></li>";
        }
      ?>

      
      <li><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="products.php">Products</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="staffs.php">Staffs</a></li>   
            <li><a href="orders.php">Orders</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>