<?php
 
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['addcart'])) {
  try {
    
    $stmt = $conn->prepare("INSERT INTO tbl_order_details_a149241 (FLD_ORDERITEM_ID, FLD_ORDER_ID, FLD_PRODUCT_ID, FLD_OD_QUANTITY) VALUES(:did, :oid, :pid, :quantity)");

    $stmt->bindParam(':did', $did, PDO::PARAM_STR);
    $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
 
    $did = uniqid('D', true);
    $oid = $_POST['oid'];
    $pid= $_POST['pid']; 
    $quantity= $_POST['quantity']; 

    $stmt->execute();
    }

  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }

  $_GET['did'] = $did;
}
//update
 if (isset($_POST['update'])) {
 
  try {
 
      $stmt = $conn->prepare("UPDATE tbl_order_details_a149241 SET FLD_ORDERITEM_ID = :did, FLD_ORDER_ID = :oid, FLD_PRODUCT_ID = :pid, FLD_OD_QUANTITY = :quantity WHERE FLD_ORDERITEM_ID = :olddid");
     
     $stmt->bindParam(':did', $did, PDO::PARAM_STR);
     $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
      $stmt->bindParam(':olddid', $olddid, PDO::PARAM_STR);
       
    $did = $_POST['did'];
    $oid = $_POST['oid'];
    $pid = $_POST['pid'];
    $quantity = $_POST['quantity'];
    $olddid = $_POST['olddid'];
     
    $stmt->execute();
 
    header("Location: cart.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}

//Edit
if (isset($_GET['edit'])) {
 
  try {
 
      $stmt = $conn->prepare("SELECT * FROM tbl_order_details_a149241 WHERE FLD_ORDERITEM_ID = :did");
     
      $stmt->bindParam(':did', $did, PDO::PARAM_STR);
       
    $did = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;

//Delete
if (isset($_GET['delete'])) {
  try {

    $stmt = $conn->prepare("DELETE FROM tbl_order_details_a149241 where FLD_ORDERITEM_ID = :did");
   
    $stmt->bindParam(':did', $did, PDO::PARAM_STR);
       
    $did = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: cart.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
?>