<?php

#################################
# Mysql Default Settings and Connection
#################################

//MySql Connect Parameters for local database
$db_username = "developm_dbuser";
$db_password = "74Wd=Myp";
$db_host = "localhost";
$db_name = "developm_athlete";


//Connect to Local MySql DB
$local_db = mysql_connect($db_host, $db_username, $db_password) or die("Error connecting to Database:" . mysql_error());
mysql_select_db($db_name, $local_db) or die("Error connecting to Database:" . mysql_error());
