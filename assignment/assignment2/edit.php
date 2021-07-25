<?php


$findmearray = array(
  array("name" => "From a friend", "abb" => "From a friend"),
  array("name" => "I googled you", "abb" => "I googled you"),
  array("name" => "Just surf on it", "abb" => "Just surf on it"),
  array("name" => "From your Facebook", "abb" => "From your Facebook"),
  array("name" => "I clicked on ads", "abb" => "I clicked on ads")
);

if (isset($_GET['id'])) {

  include "db.php";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM myguestbook WHERE id = :record_id");
    $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
    $id = $_GET['id'];

    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
} else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}

?>

<html>

<head>
  <title>My Guestbook</title>
</head>

<body>

  <form method="post" action="update.php">
    Nama :
    <input type="text" name="name" size="40" required value="<?php echo $result["user"]; ?>">
    <br>
    Email :
    <input type="email" name="email" size="25" required value="<?php echo $result["email"]; ?>">
    <br>
    How did you find me?
    <select name="combo_box">
      <option value="From a friend" <?php if ($result['combo_box'] == "From a friend") echo "selected"; ?>>From a friend</option>
      <option value="I googled you" <?php if ($result['combo_box'] == "I googled you") echo "selected"; ?>>I googled you</option>
      <option value="Just surf on in" <?php if ($result['combo_box'] == "Just surf on in") echo "selected"; ?>>Just surf on in</option>
      <option value="From your facebook" <?php if ($result['combo_box'] == "From your facebook") echo "selected"; ?>>From your facebook</option>
      <option value="I clicked an ads" <?php if ($result['combo_box'] == "I clicked an ads") echo "selected"; ?>>I clicked an ads</option>

    </select> <br>
    I like your: <br>

    <input type="checkbox" name="frontpage" value="Front page" <?php if ($result['frontpage'] == "Front page") echo "checked"; ?>>Front page<br>
    <input type="checkbox" name="form" value="Form" <?php if ($result['form'] == "Form") echo "checked"; ?>>Form<br>
    <input type="checkbox" name="ui" value="User interface" <?php if ($result['ui'] == "User interface") echo "checked"; ?>>User interface<br>

    Comments :<br>
    <textarea name="comment" cols="30" rows="8" required><?php echo $result["comment"]; ?></textarea>
    <br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="edit_form" value="Modify Comment">
    <input type="reset">
    <br>
  </form>

</body>

</html>