<?php
  include_once 'products_crud.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Kai Cannaries Trading Sdn Bhd : Products</title>
</head>
<body style="background-color:  #5c8fc2; border-color: black">
  <center>
    <a href="index.php"><b>Home</b></a> |
    <a href="products.php"><b>Products</b></a> |
    <a href="customers.php"><b>Customers</b></a> |
    <a href="staffs.php"><b>Staffs</b></a> |
    <a href="orders.php"><b>Orders</b></a>
    <hr>
    <form action="products.php" method="post">
      <table cellpadding="5" width="30%">
        <tbody>

      <tr><td>Product ID</td>
      <td><input name="pid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"> </td>
      </tr>
      <tr><td>Product Name</td>
     <td><input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"> </td>
      </tr>
      <tr><td>Price</td>
      <td><input name="price" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"> </td>
      </tr>
      <tr>
      <td>Brand</td>
      <td>
      <select name="brand">
        <option value="" selected disabled>Select</option>
        <option value="Yeos Canned Food" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Yeos Canned Food") echo "selected"; ?>>Yeos Canned Food</option>
        <option value="El-Dina" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="El-Dina") echo "selected"; ?>>El-Dina</option>
        <option value="Spam" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Spam") echo "selected"; ?>>Spam</option>
        <option value="MaLing" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="MaLing") echo "selected"; ?>>MaLing</option>
        <option value="Tulip" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Tulip") echo "selected"; ?>>Tulip</option>
        <option value="GuLong" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="GuLong") echo "selected"; ?>>GuLong</option>
        <option value="Lotte" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Lotte") echo "selected"; ?>>Lotte</option>
        <option value="MOON" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="MOON") echo "selected"; ?>>MOON</option>
        <option value="Meaty" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Meaty") echo "selected"; ?>>Meaty</option>
        <option value="Porkies" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Porkies") echo "selected"; ?>>Porkies</option>
        <option value="Golden Bridge" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Golden Bridge") echo "selected"; ?>>Golden Bridge</option>
        <option value="Ayam Brand" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Ayam Brand") echo "selected"; ?>>Ayam Brand</option>
        <option value="Meining" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Meining") echo "selected"; ?>>Meining</option>
        <option value="S&W<" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="S&W<") echo "selected"; ?>>S&W<</option>
        <option value="Highway" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Highway") echo "selected"; ?>>Highway</option>
        <option value="Hobe" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Hobe") echo "selected"; ?>>Hobe</option>
        <option value="TST" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="TST") echo "selected"; ?>>TST</option>
        <option value="Snappy Tom" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Snappy Tom") echo "selected"; ?>>Snappy Tom</option>
        <option value="Pedigree" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Pedigree") echo "selected"; ?>>Pedigree</option>
        <option value="Greatwall" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Greatwall") echo "selected"; ?>>Greatwall</option>
        <option value="Hosen" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Hosen") echo "selected"; ?>>Hosen</option>
        <option value="Fancy Feast" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Fancy Feast") echo "selected"; ?>>Fancy Feast</option>
        <option value="Kit Cat" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Kit Cat") echo "selected"; ?>>Kit Cat</option>
        <option value="Prego" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Prego") echo "selected"; ?>>Prego</option>
        <option value="Lee" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Lee") echo "selected"; ?>>Lee</option>
        <option value="Queen Bell" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Queen Bell") echo "selected"; ?>>Queen Bell</option>
         <option value="M-Shrooms" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="M-Shrooms") echo "selected"; ?>>M-Shrooms</option></select>
       </td>
      </tr> 

      <tr>
      <td>Labelled<td>
      <input name="cond" type="radio" value="Halal" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Halal") echo "checked"; ?>> Halal 
      <input name="cond" type="radio" value="Non-Halal" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Non-Halal") echo "checked"; ?>> Non-Halal
      <input name="cond" type="radio" value="Unknown" <?php if(isset($_GET['edit'])) if($editrow['fld_product_condition']=="Unknown") echo "checked"; ?>> Unknown 
      </tr>

      <tr>
      <td>Net Weight</td>
      <td><input name="weight" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_weight']; ?>"> </td>
      </tr>

      <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>"></td>
      </tr>
    </tbody>
  </table>
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
   
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
       <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table cellpadding="1" border="1">
      <p><b> Products Information </p>
      <tr>
        <td><b>Product ID</b></td>
        <td><b>Product Name</b></td>
        <td><b>Price</b></td>
        <td><b>Brand</b></td>
        <td><b>Labelled</b></td>
        <td><b>Net Weight</b></td>
        <td><b>Quantity</b></td>
        <td></td>
      </tr>
       <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_products_a174366_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
         <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td><?php echo $readrow['fld_product_condition']; ?></td>
        <td><?php echo $readrow['fld_product_weight']; ?></td>
        <td><?php echo $readrow['fld_product_quantity']; ?></td>

        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>">Details</a>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>">Edit</a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
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