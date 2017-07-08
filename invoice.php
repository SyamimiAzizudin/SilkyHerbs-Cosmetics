<?php
  include_once 'database.php';
?>

<?php
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM tbl_order_a149241, tbl_staff_a149241,
      tbl_customer_a149241, tbl_order_details_a149241 WHERE
      tbl_order_a149241.FLD_STAFF_ID = tbl_staff_a149241.FLD_STAFF_ID AND
      tbl_order_a149241.FLD_CUSTOMER_ID = tbl_customer_a149241.FLD_CUSTOMER_ID AND
      tbl_order_a149241.FLD_ORDER_ID = tbl_order_details_a149241.FLD_ORDER_ID AND
      tbl_order_a149241.FLD_ORDER_ID = :oid");
  $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
    $oid = $_GET['oid'];
  $stmt->execute();
  $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
  }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Invoice | Silky Herbs Cosmetics Ordering System</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="row">
<div class="col-xs-6 text-center">
  <br>
    <img src="logo.png" width="70%" height="70%">
</div>
<div class="col-xs-6 text-right">
  <h1>INVOICE</h1>
  <h5>Order: <?php echo $readrow['FLD_ORDER_ID'] ?></h5>
  <h5>Date: <?php echo $readrow['FLD_DATE'] ?></h5>
</div>
</div>
<hr>
<div class="row">
  <div class="col-xs-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>From: Silky Herbs Cosmetics Sdn. Bhd.</h4>
      </div>
      <div class="panel-body">
        <p>
        Silky Herbs Cosmetics Sdn. Bhd. <br>
        SACC Mall <br>
        Persiaran Hang Tuah <br>
        41100 Shah Alam <br>
        Selangor Darul Ehsan <br>
        </p>
      </div>
    </div>
  </div>
    <div class="col-xs-5 col-xs-offset-2 text-right">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4>To : <?php echo $readrow['FLD_CUSTOMER_FNAME']." ".$readrow['FLD_CUSTOMER_LNAME'] ?></h4>
            </div>
            <div class="panel-body">
            <p>
            BLOK A232<br>
            Pangsapuri Sri Perantau <br>
            Bandar Puteri <br>
            42110 Klang <br>
            Selangor Darul Ehsan <br>
            </p>
            </div>
        </div>
    </div>
  </div>

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Product</th>
      <th class="text-right">Quantity</th>
      <th class="text-right">Price(RM)/Unit</th>
      <th class="text-right">Total(RM)</th>
    </tr>
    <?php
    $grandtotal = 0;
    $counter = 1;
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM tbl_order_details_a149241, tbl_products_a149241 WHERE tbl_order_details_a149241.FLD_PRODUCT_ID = tbl_products_a149241.FLD_PRODUCT_ID AND FLD_ORDER_ID = :oid");
      $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
        $oid = $_GET['oid'];
      $stmt->execute();
      $result = $stmt->fetchAll();
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    foreach($result as $detailrow) {
    ?>
    <tr>
      <td><?php echo $counter; ?></td>
      <td><?php echo $detailrow['FLD_PRODUCT_NAME']; ?></td>
      <td class="text-right"><?php echo $detailrow['FLD_OD_QUANTITY']; ?></td>
      <td class="text-right"><?php echo $detailrow['FLD_PRICE']; ?></td>
      <td class="text-right"><?php echo $detailrow['FLD_PRICE']*$detailrow['FLD_OD_QUANTITY']; ?></td>
    </tr>
    <?php
      $grandtotal = $grandtotal + $detailrow['FLD_PRICE']*$detailrow['FLD_OD_QUANTITY'];
      $counter++;
    } // while
    ?>
    <tr>
      <td colspan="4" class="text-right">Grand Total</td>
      <td class="text-right"><?php echo $grandtotal ?></td>
    </tr>
  </table>
 
  <div class="row">
    <div class="col-xs-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Bank Details</h4>
        </div>
        <div class="panel-body">
          <p>Silky Herbs Cosmetics Sdn. Bhd.</p>
          <p>CIMB BANK</p>
          <p>SWIFT : CIMB MY M6 JJ67</p>
          <p>Account Number : 1098456634521</p>
          <p>IBAN : MY68 3390 0756 3465</p>
        </div>
      </div>
    </div>

    <div class="col-xs-7">
      <div class="span7">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Contact Details</h4>
          </div>
          <div class="panel-body">
            <p> Staff: <?php echo $readrow['FLD_STAFF_FNAME']." ".$readrow['FLD_STAFF_LNAME'] ?> </p>
            <p> Phone No: <?php echo $readrow['FLD_STAFF_PHONE'] ?> </p>
            <p> Email: <?php echo $readrow['FLD_STAFF_EMAIL'] ?> </p>
            <p><br></p>
            <p><br></p>
            <p>Computer-generated invoice. No signature is required.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</body>
</html>

    