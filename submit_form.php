<?php
/*
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
*/

include("database.php");

//Escape Strings for storing in MySql DB
$product = mysql_real_escape_string($_POST["productname"]);
$name = mysql_real_escape_string($_POST["name"]);
$email = mysql_real_escape_string($_POST["email"]);
$subject = mysql_real_escape_string($_POST["subject"]);
$review = mysql_real_escape_string($_POST["review"]);
$rating = intval($_POST["overall"]);

//Get Users IP address
$ip_address = $_SERVER["REMOTE_ADDR"];

$query = "insert into axpr_reviews(product, name, email, subject, review, rating, ip_address, status) 
		values('".$product."','".$name."', '".$email."', '".$subject."', '".$review."', '".$rating."', '".$ip_address."', 'Pending')";

$result = mysql_query($query);

if($result !== false) {
	echo "done";
} else {
	echo "Error while saving data: " . mysql_error();
}

//quit
die();
