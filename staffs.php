<?php
  include_once 'staffs_crud.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading Sdn Bhd : Staffs</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <form action="staffs.php" method="post">
 <table cellpadding="5" width="30%">
        <tbody>
      <tr>
      <td>Customer ID</td>
      <td><input name="sid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_num']; ?>"> <br></td>
    </tr>

    <tr>
      <td>First Name</td>
      <td><input name="fname" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_fname']; ?>"> <br></td>
    </tr>

    <tr>
      <td>Last Name</td>
      <td><input name="lname" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_lname']; ?>"> <br></td>
    </tr>

    <tr>
      <td>Gender</td>
     <td><input name="gender" type="radio" value="Male" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Male") echo "checked"; ?>> Male
      <input name="gender" type="radio" value="Female" <?php if(isset($_GET['edit'])) if($editrow['fld_staff_gender']=="Female") echo "checked"; ?>> Female <br> </td>
    </tr>

    <tr>
      <td>Phone Number</td>
      <td><input name="phone" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phone']; ?>"> <br></td>
    </tr>

    <tr>
      <td>Email Address</td>
      <td><input name="email" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_email']; ?>"> <br></td>
    </tr>
     </tbody>
</table>
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_num']; ?>">
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <p><b>Staff Information<p>
        <td><b>Staff ID</td>
        <td><b>First Name</td>
        <td><b>Last Name</td>
        <td><b>Gender</td>
        <td><b>Phone Number</td>
        <td><b>Email Address</td>
        <td></td>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a174366_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_staff_num']; ?></td>
        <td><?php echo $readrow['fld_staff_fname']; ?></td>
        <td><?php echo $readrow['fld_staff_lname']; ?></td>
        <td><?php echo $readrow['fld_staff_gender']; ?></td>
        <td><?php echo $readrow['fld_staff_phone']; ?></td>
        <td><?php echo $readrow['fld_staff_email']; ?></td>
        <td>
          <a href="staffs.php?edit=<?php echo $readrow['fld_staff_num']; ?>">Edit</a>
          <a href="staffs.php?delete=<?php echo $readrow['fld_staff_num']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
  </center>
</body>
</html>