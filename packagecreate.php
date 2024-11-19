<!DOCTYPE html>
<html>
  <head>
    <title>Create Package</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
   
  </head>
  <body>
  <div class="regbody">
<div class="regForm">
    <div class="testbox">
      <form action="submitpackage.php" method="post">
          <h1>Create Package of Wildlife Safari SL</h1>
        <div class="item">
          <div class="item">
            <p>Package title</p>
            <input type="text" name="title" class="regInput" placeholder="Package name"/>
          </div>
          <div class="item">
            <p>Package type</p>
            <select name="type" class="regInput">
              <option value="" disabled selected></option>
              <option value="Weekend package" >Weekend package</option>
              <option value="Weekday package">Weekday package</option>
              <option value="featured-courses">Seasonal package</option>
              <option value="undergraduate">Promotion package</option>
            </select>
          </div>
        <div class="item">
            <p>Description</p>
            <textarea name="packagedescription" class="regInput" rows="3" required></textarea>
          </div>
        <div class="item">
          <p>Price</p>
          <input type="text" name="price" class="regInput" placeholder="Package price">
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