<?php
require 'header.php';
?>
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
<div class="container">
    <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Swing by for a house of your choice, or leave us a message:</p>
    </div>
    <div class="row">
        <div class="column">
            <img src="/w3images/map.jpg" style="width:100%">
        </div>
        <div class="column">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>
                <select id="county" name="county">
                    <option value="Nairobi">Nairobi</option>
                    <option value="Eastlands">Eastlands</option>
                    <option value="Westlands">Westlands</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<?php

?>
