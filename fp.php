<head>
<style>

#s{ display:block;background-color:#FFEBCD;border-style: dotted solid;padding:0px;margin:0px;}

a{text-decoration:none;background-color:#FFEBCD;color:grey;font-size:40px;text-align:center;padding:0px; margin:0px;}


</style>
</head>

<?php 
$dbhost = 'localhost';
 $dbuser = 'root'; 
$dbpass = ''; 

$n = $_POST['useremail'];
$pw = $_POST['userpassword'];
$conn = mysql_connect($dbhost, $dbuser, $dbpass); 
if(! $conn ) {
 die('Could not connect: ' . mysql_error());
 } 
$sql = "UPDATE mail ". "SET password='$pw'"."WHERE firstname='$n'"; 
mysql_select_db('phptest'); 
$retval = mysql_query( $sql, $conn ); 
if(! $retval ) 
{ die('Could not update data: ' . mysql_error()); 
print'
<a href="a.html">
<div id="s" >Go Back </div></a>';
} 

else
{
print'<h3>data  Updated successfully</h3>';
print'
<a href="a.html">
<div id="s" >Go Back </div></a>';

} 
mysql_close($conn); ?>
 


