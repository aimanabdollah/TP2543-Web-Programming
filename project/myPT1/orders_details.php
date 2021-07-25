<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <head>
          <title>Camerasque Store : Order Details</title>
    </head>

    <body>
          <center>
                <a href="index.php">Home</a> |
                <a href="products.php">Products</a> |
                <a href="customers.php">Customers</a> |
                <a href="staffs.php">Staffs</a> |
                <a href="orders.php">Orders</a>
                
            <hr>
                Order ID: O5603f03a9349f0.39900158<br>
                Order Date: 09-09-2015 <br>
                Staff: Saiful <br>
                Customer: Izzudin <br>
                
            <hr>
                <form action="orders_details.php" method="post">
                      Product
                      <select name="pid">
                            <option value="P101">Canon PowerShot G5 X</option>
                            <option value="P102">Canon PowerShot G7 X</option>
                            <option value="P103">Canon PowerShot SX740</option>
                            <option value="P104">Canon IXUS 190</option>
                            <option value="P105">Epson R-D1</option>
                            <option value="P106">Epson L500V</option>
                            <option value="P107">Epson PhotoPC 650</option>
                            <option value="P108">Epson PhotoPC 3100Z</option>
                            <option value="P109">Fujifilm X1000V</option>
                            <option value="P110">Fujifilm X-T30</option>
                     

                          </select>
                      Quantity
                      <input name="quantity" type="text">
                      <button type="submit" name="addproduct">Add Product</button>
                      <button type="reset">Clear</button>
                    </form>
                
            <hr>
                <table border="1">
                      <tr>
                            <td>Order Detail ID</td>
                            <td>Product</td>
                            <td>Quantity</td>
                            <td></td>
                          </tr>
                      <tr>
                            <td>D5603f136f41334.84833440</td>
                            <td>Nikon D5100</td>
                            <td>1</td>
                            <td>
                                  <a href="orders_details.php">Delete</a>
                                </td>
                          </tr>
                      <tr>
                            <td>O5603f03a9349f0.39900158</td>
                            <td>Minox 35GT</td>
                            <td>2</td>
                            <td>
                                  <a href="orders_details.php">Delete</a>
                                </td>
                          </tr>
                    </table>
                
            <hr>
                <a href="invoice.php" target="_blank">Generate Invoice</a>
              
        </center>
    </body>

</html>