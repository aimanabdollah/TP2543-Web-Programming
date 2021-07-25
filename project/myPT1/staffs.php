<!DOCTYPE html>
<html>

<head>
  <title>Camerasque Store : Staffs</title>
</head>

<body>
  <center>
    <a href="index.php">Home |</a>
    <a href="products.php">Products |</a>
    <a href="customers.php">Customers |</a>
    <a href="staffs.php">Staffs |</a>
    <a href="orders.php">Orders</a>
    <hr>
    <form action="staffs.php" method="post">
      Staff ID:
      <input name="sid" type="text"> <br>
      Name:
      <input name="fname" type="text"> <br>
      Email:
      <input name="email" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Staff ID</td>
        <td>Name</td>
        <td>Email</td>
        <td></td>
      </tr>
      <tr>
        <td>S001</td>
        <td>Izzudin</td>
        <td>izuddin@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S002</td>
        <td>Nina</td>
        <td>nina@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>

      <tr>
        <td>S003</td>
        <td>Afif</td>
        <td>afif@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>