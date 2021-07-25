<?php
include_once 'products_crud.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Camerasque Store : Products</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    html {
      width: 100%;
      height: 100%;
      background-image: linear-gradient(to top, #007AA8, #9DC8E6, #9DC8E6);
      background-repeat: no-repeat;
      background-position: center;
      min-height: 100%;
      /* background-color: linear-gradient(to right, #0f2027, #203a43, #2c5364);*/
      /*background-image: linear-gradient(217deg, #0f2027, #2193b0 70.71%),*/
      /*linear-gradient(127deg,  #2c5364, #2193b0 70.71%);*/
      /*linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);*/



    }
  </style>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <?php include_once 'nav_bar.php'; ?>

  <div class="container-fluid" style="background-color:#f1faee;">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="page-header">
          <h2>Create New Product</h2>
        </div>
        <form action="products.php" method="post" class="form-horizontal">
          <div class="form-group">
            <label for="productid" class="col-sm-3 control-label">ID</label>
            <div class="col-sm-9">
              <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="productname" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
              <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="productprice" class="col-sm-3 control-label">Price</label>
            <div class="col-sm-9">
              <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" min="0.0" step="0.01" required>
            </div>
          </div>
          <div class="form-group">
            <label for="productbrand" class="col-sm-3 control-label">Brand</label>
            <div class="col-sm-9">
              <select name="brand" class="form-control" id="productbrand" required>
                <option value="">Please select</option>
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
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="user_level" class="col-sm-3 control-label">User Level</label>
            <div class="col-sm-9">
              <div class="radio">
                <label>
                  <input name="user_level" type="radio" id="user_level" value="Beginner" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Beginner") echo "checked"; ?> required> Beginner
                </label>
              </div>
              <div class="radio">
                <label>
                  <input name="user_level" type="radio" id="user_level" value="Intermediate" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Intermediate") echo "checked"; ?> required> Intermediate
                </label>
              </div>
              <div class="radio">
                <label>
                  <input name="user_level" type="radio" id="user_level" value="Expert" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_user_level'] == "Expert") echo "checked"; ?>> Expert
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="warranty_length" class="col-sm-3 control-label">Warranty Length</label>
            <div class="col-sm-9">
              <select name="warranty_length" class="form-control" id="warranty_length" required>
                <option value="">Please select</option>
                <option value="2 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "2 years") echo "selected"; ?>>2 years</option>
                <option value="3 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "3 years") echo "selected"; ?>>3 years</option>
                <option value="5 years" <?php if (isset($_GET['edit'])) if ($editrow['fld_product_warranty_length'] == "5 years") echo "selected"; ?>>5 years</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="productq" class="col-sm-3 control-label">Quantity</label>
            <div class="col-sm-9">
              <input name="quantity" type="number" class="form-control" id="productq" placeholder="Product Quantity" value="<?php if (isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>" min="0" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <?php if (isset($_GET['edit'])) { ?>
                <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
                <button class="btn btn-primary" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
              <?php } else { ?>
                <button class="btn btn-primary" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
              <?php } ?>
              <button class="btn btn-primary" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="page-header">
          <h2>Products List</h2>
        </div>
        <table class="table table-bordered" style="background-color: white;">
          <tr style="background-color: #8ecae6;">
            <th>
              <center>Product ID</center>
            </th>
            <th>
              <center>Name</center>
            </th>
            <th>
              
              <center>Price (RM)</center>
            </th>
            <th>
              <center>Brand</center>
            </th>
            <th>
              <center>Action</center>
            </th>

          </tr>
          <?php
          // Read
          $per_page = 5;
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;
          $start_from = ($page - 1) * $per_page;
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("select * from tbl_products_a175054 LIMIT $start_from, $per_page");
            $stmt->execute();
            $result = $stmt->fetchAll();
          } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
          }
          foreach ($result as $readrow) {
          ?>
            <tr>
              <td><center><?php echo $readrow['fld_product_num']; ?></center></td>
              <td><?php echo $readrow['fld_product_name']; ?></td>
              <td><center><?php echo $readrow['fld_product_price']; ?></center></td>
              <td><center><?php echo $readrow['fld_product_brand']; ?></center></td>
              <td><center>
                <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
                <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
                <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
          </center>  </td>
            </tr>
          <?php } ?>

        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <nav>
          <ul class="pagination">
            <?php
            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM tbl_products_a175054");
              $stmt->execute();
              $result = $stmt->fetchAll();
              $total_records = count($result);
            } catch (PDOException $e) {
              echo "Error: " . $e->getMessage();
            }
            $total_pages = ceil($total_records / $per_page);
            ?>
            <?php if ($page == 1) { ?>
              <li class="disabled"><span aria-hidden="true">«</span></li>
            <?php } else { ?>
              <li><a href="products.php?page=<?php echo $page - 1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <?php
            }
            for ($i = 1; $i <= $total_pages; $i++)
              if ($i == $page)
                echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
              else
                echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
            ?>
            <?php if ($page == $total_pages) { ?>
              <li class="disabled"><span aria-hidden="true">»</span></li>
            <?php } else { ?>
              <li><a href="products.php?page=<?php echo $page + 1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>