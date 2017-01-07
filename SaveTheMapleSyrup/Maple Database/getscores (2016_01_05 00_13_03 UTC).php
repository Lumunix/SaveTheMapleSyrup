<?php
header('Access-Control-Allow-Origin: *');




$host="localhost"; // Host name 
$username="ydrgn_Maple"; // Mysql username 
$password="Maple0310"; // Mysql password 
$db_name="ydrgn_MapleSyrup"; // Database name 
$tbl_name="scores"; // Table name


// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_GET['level'])){
$level = strip_tags(mysql_real_escape_string($_GET['level']));

// Retrieve data from database 
$sql="SELECT * FROM scores WHERE level='$level' ORDER BY score DESC LIMIT 5";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo $rows['name'] . "|" . $rows['score'] . "|";

// close while loop 
}
}//close statement
// close MySQL connection 
mysql_close();
?>