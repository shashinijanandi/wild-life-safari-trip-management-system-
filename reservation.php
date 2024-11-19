<!DOCTYPE html>
<html>
<head>
    <title>Reservation</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>

<?php
    include "inc/header.php";
?>
  <div class="allpage">
    <hr>
            <div class="topic">
                <h1><u>Wildlife Safari Trip Reservation</u></h1>
            </div>
                
            <div class="container">
            
            
                <form action="inc/reservation.inc.php" method="post">
                    
                    <label for="Salutation"><b>Salutation:</b></label>
                        <select id="Salutation" name="Salutation" required>
                            <option value="">--Select Salutation--</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Mr">Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr">Dr</option>
                            <option value="Master">Master</option>
                            <option value="Prof">Prof</option>
                            <option value="sir">sir</option>
                            <option value="Madam">Madam</option>
                        </select>

                    <label for="name"><b>First Name:</b></label>
                    <input type="text" id="name" name="firstName" placeholder="--Type First Name--" required>

                    <label for="name"><b>Last Name:</b></label>
                    <input type="text" id="name" name="secondName" placeholder="--Type Last Name--" required>
                    
                    <label for="phone"><b>Phone No:</b></label>
                    <input type="phone" id="Phone" name="phone" placeholder="--Type Phone Number--" required>

                    <label for="email"><b>Email:</b></label>
                    <input type="email" id="email" name="email" placeholder="--Type Email--" required>

                    <label for="country"><b>Country:</b></label>
                        <select id="country" name="country" required>
                            <option value="">--Select country--</option>
                            <option value="Sri lanka">Sri lanka</option>
                            <option value="Australia">Australia</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                        </select>
                    
                    <label for="package"><b>Choose a Package:</b></label>
                        <select id="package" name="package" required>
                            <option value="">--Choose a package that you want--</option>
                            <option value="Weekdays package">Weekdays package</option>
                            <option value="Weekend package">Weekend package</option>
                            <option value="Seasonal package">Seasonal package</option>
                            <option value="New Year packkage">New Year packkage</option>
                            <option value="Mid Year packkage">Mid Year packkage</option>
                        </select>

                    <label for="camera"><b>Choose a camera option:</b></option></label>
                        <select id="camera" name="camera" required>
                            <option value="">--Choose a camera option if you want--</option>
                            <option value="Canon EOS R5">Canon EOS R5</option>
                            <option value="Fujifilm X-T200">Fujifilm X-T200</option>
                            <option value="Leica M10 ">Leica M10 </option>
                            <option value="Canon EOS R6">Canon EOS R6</option>
                            <option value="Nikon Z6">Nikon Z6</option>
                            <option value="Fujifilm X-S10">Fujifilm X-S10</option>
                        </select>

                    <label for="date"><b>Select a date you want:</b></label>
                    <input type="date" id="date" name="date" required>

                    <br><br>
                    <h2><b>How many people have in your team?</b></h2>

                    <label for="adults"><b>No. of Adults:</b></option></label>
                        <select id="adults" name="adults" required>
                            <option value="">--Select value--</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>

                    <label for="children"><b>No. of Children(Below 12 years):</b></option></label>
                        <select id="children" name="child" required>
                        <option value="">--Select value--</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    
                    <button class="btn" type="submit" onclick="openPopup()">Book Now</button>
                    
                </form>
                <div class="popup" id="popup">
                        <img src="images/th.jpg">
                        <h2>Thank you !</h2>
                        <p>Your details has been successfully submitted. Thanks!</p>
                        <button type="button" onclick="closePopup()">OK</button>


                    </div>
            </div>
        <hr>



<?php
        include "inc/footer.php";
?>

<script src="script.js"></script>