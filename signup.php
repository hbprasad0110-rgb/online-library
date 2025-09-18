<html>
<head>
<style>
#h1{ text-size:10000px; background-color:#FF6347;color:white; text-align:center;font-size:100px;padding:0px;margin:0px;}

#s{ display:block;background-color:#FFEBCD;border-style: dotted solid;padding:0px;margin:0px;}

a{text-decoration:none;background-color:#FFEBCD;color:grey;font-size:40px;text-align:center;padding:0px; margin:0px;}
</style>


</head>

<body bgcolor="#E9967A" style="margin:0px;padding:0px;">

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
$sql = "INSERT INTO mail ". "(firstname,password) ". "VALUES ('$n','$pw')"; 
mysql_select_db('phptest'); 
$retval = mysql_query( $sql, $conn ); 
if(! $retval ) 
{ die('Could not enter data: ' . mysql_error()); 
} 


header( 'refresh: 5; url= index.html' );
print' please wait ';
?>
</body>
</html>
