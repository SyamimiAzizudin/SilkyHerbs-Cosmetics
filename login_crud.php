<?php
include_once 'database.php';
 

if (isset($_POST['login'])) {

  $user = $_POST['user'];
  $pwd = $_POST['pwd'];
  // $sql = "select * from tbl_staffs_a149710 where fld_staff_fname='".$uid."' and fld_staff_num='".$ups."'";
  $sql = "select * from tbl_customer_a149241 where FLD_USERNAME='$user' and FLD_PASSWORD='$pwd'"; 
  // $sql = "select fld_staff_fname='Larry' from tbl_staffs_a149710 where fld_staff_num='S001'";
  // $sql ="select * from tbl_staffs_a149710 where fld_staff_fname='Larry' and fld_staff_num='S001'";
  $result = $mydb->query($sql);
  $total_records = mysqli_num_rows($result);
  $readrow = $result->fetch_array();

  if ($total_records==1) {
      $_SESSION["user"] = $uid;
      $_SESSION['login']=$readrow['FLD_CUSTOMER_FNAME']." ".$readrow['FLD_CUSTOMER_LNAME'];
      $_SESSION['loginid']=$readrow['FLD_CUSTOMER_ID'];
      header("Location: home.php?");
    } else {
      header('Location: login.php?action=wrong');
    }

 }

?>
