<nav class="navbar navbar-default" style="background-color: #8ecae6;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
      <a class="navbar-brand" style="color:black" ><b>Camerasque Store</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " style="color:black" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (isset($_SESSION['role'])) { ?>
          <li><a href="main.php" style="color:black">Home</a></li>
          <li><a href="search.php" style="color:black">Search</a></li>
          <li><a href="products.php" style="color:black">Products</a></li>
          <li><a href="customers.php" style="color:black">Customers</a></li>
          <li><a href="staffs.php" style="color:black">Staffs</a></li>
          <li><a href="orders.php" style="color:black">Orders</a></li>
        <?php } else { ?>

          <!-- <li><a href="index.php">Login</a></li> -->
        <?php header("Location: index.php");
        } ?>
        <!-- <li><a><?php echo date("d M Y"); ?></a></li>
      <li>
      <form action="result.php" method="post">
            <input name="keyword" type="text" class="form-control" id="keyword" placeholder="Search" style="width: 250px; padding: 5px; margin-top: 8px; margin-left: 20px" required></li>
            <li><button class="btn btn-default" type="submit" name="search" id="search" style="padding: 5px; margin-top: 9px; text-align: center;margin-left: 5px; background-color: lightblue"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
         </li> -->
        </form>

      </ul>
      <?php if (isset($_SESSION['role'])) { ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a style="color:black"><?php echo "Hi, {$_SESSION['name']}!" ?></a></li>
          <li><a style="color:black"><?php echo "Your position: {$_SESSION['role']}" ?></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:black">Menu <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="search.php">Search</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="customers.php">Customers</a></li>
              <li><a href="staffs.php">Staffs</a></li>
              <li><a href="orders.php">Orders</a></li>
            </ul>
          </li>
          <li><a href="logout.php" style="color:black">Logout</a></li>
        </ul>
      <?php } ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>