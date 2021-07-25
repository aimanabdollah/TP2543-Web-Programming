<!DOCTYPE html>
<html>
<head>
  <title>Camerasque Store : Customers</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="customers.php" method="post">
      Customer ID:
      <input name="cid" type="text"> <br>
      Name:
      <input name="name" type="text"> <br>
      Email:
      <input name="email" type="text"> <br>
      Phone No:
      <input name="phone" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Customer ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone Number</td>
        <td></td>
      </tr>
      <tr>
        <td>C001</td>
        <td>Saiful</td>
        <td>saiful@gmail.com</td>
        <td>019-2849132</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>C002</td>
        <td>Hakim</td>
        <td>hakim@gmail.com</td>
        <td>011-7226581</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>C003</td>
        <td>Siti</td>
        <td>siti@gmail.com</td>
        <td>016-7425331</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>