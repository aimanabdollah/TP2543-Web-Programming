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
      Product ID:
      <input name="pid" type="text"> <br>
      Name:
      <input name="name" type="text"> <br>
      Price:
      <input name="price" type="text"> <br>
      Brand:
      <select name="brand">
        <option value="Canon">Canon</option>
        <option value="Epson">Epson</option>
        <option value="Fujifilm">Fujifilm</option>
      </select> <br>
      User Level:
      <input name="cond" type="radio" value="Beginner"> Beginner
      <input name="cond" type="radio" value="Intermediate"> Intermediate
      <input name="cond" type="radio" value="Expert"> Expert <br>

      Warranty Length:
      <input name="warrantylength" type="text"> <br>

      Quantity:
      <input name="quantity" type="text"> <br>
      <button type="submit" name="create">Create</button>
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
      <tr>
        <td>P101</td>
        <td>Canon PowerShot G5 X</td>
        <td>2299</td>
        <td>Canon</td>
        <td>Expert</td>
        <td>5 years</td>
        <td>5</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P102</td>
        <td>Canon PowerShot G7 X</td>
        <td>3599</td>
        <td>Canon</td>
        <td>Expert</td>
        <td>5 years</td>
        <td>4</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P103</td>
        <td>Canon PowerShot SX740</td>
        <td>1569</td>
        <td>Canon</td>
        <td>Intermediate</td>
        <td>3 years</td>
        <td>6</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P104</td>
        <td>Canon IXUS 190</td>
        <td>659</td>
        <td>Canon</td>
        <td>Beginner</td>
        <td>2 years</td>
        <td>7</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P105</td>
        <td>Epson R-D1</td>
        <td>2599</td>
        <td>Epson</td>
        <td>Intermediate</td>
        <td>3 years</td>
        <td>5</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P106</td>
        <td>Epson L500V</td>
        <td>3200</td>
        <td>Epson</td>
        <td>Expert</td>
        <td>3 years</td>
        <td>7</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P107</td>
        <td>Epson PhotoPC 650</td>
        <td>1880</td>
        <td>Epson</td>
        <td>Beginner</td>
        <td>2 years</td>
        <td>5</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P108</td>
        <td>Epson PhotoPC 3100Z</td>
        <td>1560</td>
        <td>Epson</td>
        <td>Beginner</td>
        <td>2 years</td>
        <td>3</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P109</td>
        <td>Fujifilm X1000V</td>
        <td>5208</td>
        <td>Fujifilm</td>
        <td>Expert</td>
        <td>3 years</td>
        <td>10</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>P110</td>
        <td>Fujifilm X-T30</td>
        <td>5488</td>
        <td>Fujifilm</td>
        <td>Expert</td>
        <td>5 years</td>
        <td>6</td>
        <td>
          <a href="products.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

    </table>
  </center>
</body>

</html>