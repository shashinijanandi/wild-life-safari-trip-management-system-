<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/css/shashinistyle.css">
    </head>
    <body>
        <?php include "inc/header.php"?>
        <div class="section">
        <div class="Contact us">
            <div class="title">
                <h2>Contact Us</h2>
            </div>
        </div>
       <div class="box">
        <form action="contactSubmit.php" method="POST">
        <div class="formbox">
        <div class="row5o"> 
        <div class="row5o"> 
            <div class="inputbox">
                <span>Email</span>
                <input type="email" id="email" name="email" placeholder="Your email..">
            </div>
        </div >
        <div class="row100"> 
            <div class="inputbox">
                <span>Subject</span>
                <input type="text" id="subject" name="subject" placeholder="Your Subject">
            </div>
       </div>

        <div class="row100"> 
            <div class="inputbox">
                <span>Your comments </span>
                <textarea id="comment" name="comment" placeholder="Write your comments.." style="height:200px"></textarea>
            </div>
       </div>

       <div class="row100"> 
        <div class="inputbox">
            <input type="submit" class="btn" value="Submit">
        </div>
       </div>
       </div>
       </form>
       </div>

       <div class="Contact info">
        <h3>Contact info</h3>
       <div class="infobox">
        <div>
            <span><ion-icon name="call-outline"></ion-icon></span>
            <a href="tel:54 932 571">54932571</a>
        </div>
        <div>
            <span><ion-icon name="mail-outline"></ion-icon></span>
            <a href="mailto:wildlifesl@gmail.com">wildlifesl@gmail.com</a>
        </div>
        <div>
            <span><ion-icon name="location-outline"></ion-icon></span>
             <p>22/l,stanly thilarathen road,nugegoda <br>Sri lanka</p>
        </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <div class="contact map"><br><br>
            <h2>Our location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.196245574548!2d-0.12775835780942822!3d51.50740795694448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605c6f42b260b%3A0x8dd6b825ee2f8013!2sBuckingham%20Palace!5e0!3m2!1sen!2sus!4v1619165044874!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </div>
        </div>
        <?php include "inc/footer.php"?>
    </body>
</html>