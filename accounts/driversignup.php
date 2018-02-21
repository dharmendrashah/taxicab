<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taxicab-driver sign up</title>
</head>
<body>
    <?php
    include("uploadimg/uploadimg.php");
    ?>
<script type="text/javascript">
function driver_data_submit(){var full_name = document.getElementById('full_name').value;
var phone_no = document.getElementById('phone_no').value;var validity = document.getElementById('validity').value;
var taxi_no = document.getElementById('taxi_no').value;var emailid = document.getElementById('emailid').value;
var driver_address = document.getElementById('driver_address').value;
var district = document.getElementById('district').value;var state = document.getElementById('state').value;
var country = document.getElementById('country').value;var image = document.getElementById('image').value;
if(full_name == false && phone_no == false && validity == false && taxi_no == false && emailid == false && 
driver_address == false && district == false && state == false && country == false && image == false) {
    alert('all the fields are mendatory to fill') return false;}else{return true;}}</script>
<form enctype="multipart/form-data" type="multipart/form-data" method="post" action="submit.php"
 onclick="return driver_data_submit()" name="driver_registration">
<p class="driver_register"> Full Name: </p>
<input type="text" name="Driver name" id="full_name" placeholder="Enter Your Name" />
<p class="driver_register"> Phone no.:</p> 
<input type="number" name="driver number" id="phone_no" placeholder="Enter your phone no. "/>
<p class="driver_register"> license Validity:</p>
 <input type="date" name="expiry date" id="validity" placeholder="Enter your expiry date"/>
 <p class="driver_register"> Taxi no.: </p>
 <input type="text" name="driver taxi number" id="taxi_no" placeholder="Enter your taxi no."/>
 <p class="driver_register"> Email (opt): </p>
 <input type="email" name="driver email address" id="emailid" placeholder="Enter your email id"/>
 <p class="driver_register"> Address: </p>
 <input type="text" name="driver address" id="driver_address" placeholder="Enter your address"/>
 <p class="driver_register"> District:</p>
 <input type="text" name="driver address district" value="Bikaner" id="district" placeholder="Enter your district"/>
 <p class="driver_register"> State: </p>
 <input type="text" name="driver address state" value="Rajasthan" id="State" placeholder="Enter your State"/>
 <p class="driver_register"> Country: </p>
 <input type="text" name="driver address country" value="India" id="country" placeholder="Enter your Country"/>
 <p class="driver_register"> Licence Photo: </p>
 <input type="file" name="filetoupload" id="filetoupload" />
 <input type="submit" value="SUBMIT" name="submit" id="image"></form>
</body>
</html>    