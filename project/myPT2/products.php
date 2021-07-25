<?php
include_once 'products_crud.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camerasque Store : Products</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="products.php" method="post">
      Product ID
      <input name="pid" type="text" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>"> <br>
      Name
      <input name="name" type="text" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"> <br>
      Price
      <input name="price" type="text" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"> <br>
      Brand
      <select name="brand">
        <option value="Canon" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Canon") echo "selected"; ?>>Canon</option>
        <option value="Epson" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Epson") echo "selected"; ?>>Epson</option>
        <option value="Fujifilm" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Fujifilm") echo "selected"; ?>>Fujifilm</option>
        <option value="Leica" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Leica") echo "selected"; ?>>Leica</option>
        <option value="Minox" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Minox") echo "selected"; ?>>Minox</option>
        <option value="Nikon" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Nikon") echo "selected"; ?>>Nikon</option>
        <option value="Olympus" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Olympus") echo "selected"; ?>>Olympus</option>
        <option value="Praktica" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Praktica") echo "selected"; ?>>Praktica</option>
        <option value="Samsung" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Samsung") echo "selected"; ?>>Samsung</option>
        <option value="Vivitar" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_brand'] == "Vivitar") echo "selected"; ?>>Vivitar</option>

      </select> <br>
      User Level
      <input name="user_level" type="radio" value="Beginner" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Beginner") echo "checked"; ?>> Beginner
      <input name="user_level" type="radio" value="Intermediate" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Intermediate") echo "checked"; ?>> Intermediate
      <input name="user_level" type="radio" value="Expert" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Expert") echo "checked"; ?>> Expert <br>
      Warranty Length
      <select name="warranty_length">
        <option value="2 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "2 years") echo "selected"; ?>>2 years</option>
        <option value="3 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "3 years") echo "selected"; ?>>3 years</option>
        <option value="5 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "5 years") echo "selected"; ?>>5 years</option>

      </select> <br>
      Quantity
      <input name="quantity" type="text" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>"> <br>
      <?php if (isset($_GET['edit'])) { ?>
        <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
        <button type="submit" name="update">Update</button>
      <?php } else { ?>
        <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Brand</td>
        <td>User Level</td>
        <td>Warranty Length</td>
        <td>Quantity</td>
        <td></td>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a175054");
        $stmt->execute();
        $result = $stmt->fetchAll();
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      foreach ($result as $readrow) {
      ?>
        <tr>
          <td><?php echo $readrow['fld_product_num']; ?></td>
          <td><?php echo $readrow['fld_product_name']; ?></td>
          <td><?php echo $readrow['fld_product_price']; ?></td>
          <td><?php echo $readrow['fld_product_brand']; ?></td>
          <td><?php echo $readrow['fld_product_user_level']; ?></td>
          <td><?php echo $readrow['fld_product_warranty_length']; ?></td>
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