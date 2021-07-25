<?php

include_once 'database.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Create
if (isset($_POST['create'])) {

  $target_dir = "products/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image

  try {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      // echo "File is an image - " . $check["mime"] . ". ";
      $uploadOk = 1;
    } else {
      echo "File is not an image. ";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
         echo "<script>alert('Sorry the image is too large. Make sure it less than 10mb');</script>";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('The file is not success to upload');</script>";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<script>alert('The file is success to upload');</script>";
        // echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $stmt = $conn->prepare("INSERT INTO tbl_products_a175054(fld_product_num,
        fld_product_name, fld_product_price, fld_product_brand, fld_product_user_level,
        fld_product_warranty_Length, fld_product_quantity, fld_product_image) VALUES(:pid, :name, :price, :brand,
        :user_level, :warranty_length, :quantity, :filePath)");

    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
    $stmt->bindParam(':user_level', $user_level, PDO::PARAM_STR);
    $stmt->bindParam(':warranty_length', $warranty_length, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':filePath', $filePath, PDO::PARAM_STR);

    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand =  $_POST['brand'];
    $user_level = $_POST['user_level'];
    $warranty_length = $_POST['warranty_length'];
    $quantity = $_POST['quantity'];
    $uploadDir = '';
    $fileName = $_FILES['fileToUpload']['name'];
    $filePath = $uploadDir . $fileName;

    $stmt->execute();
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

//Update
if (isset($_POST['update'])) {


  $target_dir = "products/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image

  try {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
    ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your picture was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $stmt = $conn->prepare("UPDATE tbl_products_a175054 SET fld_product_num = :pid,
        fld_product_name = :name, fld_product_price = :price, fld_product_brand = :brand,
        fld_product_user_level = :user_level, fld_product_warranty_length = :warranty_length, fld_product_quantity = :quantity, fld_product_image = :filePath
        WHERE fld_product_num = :oldpid");

    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
    $stmt->bindParam(':user_level', $user_level, PDO::PARAM_STR);
    $stmt->bindParam(':warranty_length', $warranty_length, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':filePath', $filePath, PDO::PARAM_STR);
    $stmt->bindParam(':oldpid', $oldpid, PDO::PARAM_STR);

    $pid = $_POST['pid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $brand =  $_POST['brand'];
    $user_level = $_POST['user_level'];
    $warranty_length = $_POST['warranty_length'];
    $quantity = $_POST['quantity'];
    $uploadDir = '';
    $fileName = $_FILES['fileToUpload']['name'];
    $filePath = $uploadDir . $fileName;
    $oldpid = $_POST['oldpid'];

    $stmt->execute();

    header("Location: products.php");
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

//Delete
if (isset($_GET['delete'])) {

  try {

    $stmt = $conn->prepare("DELETE FROM tbl_products_a175054 WHERE fld_product_num = :pid");

    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);

    $pid = $_GET['delete'];

    $stmt->execute();

    header("Location: products.php");
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

//Edit
if (isset($_GET['edit'])) {

  try {

    $stmt = $conn->prepare("SELECT * FROM tbl_products_a175054 WHERE fld_product_num = :pid");

    $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);

    $pid = $_GET['edit'];

    $stmt->execute();

    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

$conn = null;
