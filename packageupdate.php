<?php
include_once "database.php";

$packageID = $_GET['id'];
$packageTitle = $_GET["title"];
$packageType = $_GET["type"];
$packageDescription = $_GET["desc"];
$packagePrice = $_GET["price"];

?>

<!DOCTYPE html>
<html>
  <head>
    <title>UPDATE Package</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
  </head>
  <body>
  <div class="regbody">
<div class="regForm">
    <div class="testbox">
      <form action="submitUpdatePackage.php" method="get">
          <h1>Update Package of Willlife Safari Sri lanka</h1>
        <div class="item">
            <p>Package ID</p>
            <input type="number" name="packID" class="regInput" value=<?php echo $packageID ?>>
            <p>Package title</p>
            <input type="text" name="title" placeholder="Package name" class="regInput" value=<?php echo $packageTitle ?>>
          </div>
          <div class="item">
            <p>Package type</p>
            <select name="type" class="regInput">
              <option  disabled selected><?php echo $packageType ?></option>
              <option value="Weekend package" >Weekend package</option>
              <option value="Weekday package">Weekday package</option>
              <option value="featured-courses">Seasonal package</option>
              <option value="undergraduate">Promotion package</option>
            </select>
          </div>
        <div class="item">
            <p>Description</p>
            <textarea name="packageDesc" class="regInput" rows="3"><?php echo $packageDescription?></textarea>
          </div>
        <div class="item">
          <p>Price</p>
          <input type="text" name="price" class="regInput" placeholder="Package price" value=<?php echo $packagePrice ?>>
        </div>
        <input type="submit" value="Submit" class="btn-2">
        <center>
            <a href="packagelist.php" class="btn">Back to Admin</a>
        </center>
      </form>
    </div>
</div>
  </div>
  </body>
</html>