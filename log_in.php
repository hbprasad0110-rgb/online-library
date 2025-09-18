
<html>
<head>
<style>
#s, #so{ display:block;background-color:#FFEBCD;border-style: dotted solid;padding:0px;margin:0px;}

a{text-decoration:none;background-color:#FFEBCD;color:grey;font-size:40px;text-align:center;padding:0px; margin:0px;}

</style>


</head>
<body>

<?php

$fn = ($_POST['user_email']);
$pw = ($_POST['user_password']);


$link = mysql_connect ('localhost', 'root','');
mysql_select_db ("phptest");


// if $fn and $pw match a record, then display page, else display failure page

$query = "SELECT firstname, password FROM mail WHERE (firstname = '$fn' AND password = '$pw')";

$result = mysql_query ($query, $link);
if (mysql_num_rows($result) == 1) {

header( 'refresh: 5; url= .@-z.html' );
print' please wait ';
} else {
print 'Sorry, this login is invalid' ;
print'
<a href="a.html">
<div id="s" >Go Back </div>
</a>';
}
 ?>

</body>
</html>
