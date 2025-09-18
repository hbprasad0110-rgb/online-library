
<html>
<head><title>The project</title>
<style>
#header{background-color:Blue;color:white;text-align:center;padding:10;}
body{background-color:white;font-family:Arial,timesnewromain;}
#container{ width:800px;margin-left:auto;margin-right:auto;  }
#content{ padding:10px;   }
#footer{ clear:both;  text-align:right; background-color:grey;color:white; padding:10px; }
#nav{  width:180px;float:left;    }
#main{  width:600px;float:right;    }
#nav ul {list-style:none; padding:0px;}
a{text-decoration:none; color:white}
#nav ul li{ background-color:red; border:1px solid white; width:120px;height:29px;text-align:center;  line-height:30px;}
#nav ul li a:hover{background-color:orange;    }
#nav ul li a{color:white; display:block;   }
h1,h2,h3{margin:0px;}
#lo{text-align:right;}
</style>
</head>
<body>
<div id="container">
   <div id="header">
     <h1>The Online Library</h1>
<div id="lo"><a href="a.html ">Login</a></div>
    </div>
    <div id="content">
            <div id="nav">
              <h3>Navigation</h3>
              <ul>
<li><a href="index.html">Home</a></li>
<li><a href="a-z1.html">Editors Choice</a></li>

<!-- <li><a href="recent.php">Recent Books </a></li> -->
      
      
               </ul>
          </div>
         <div id="main">
   
<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">Recent uploads...</th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
mysql_free_result ( resource$result );
	?>
    </table>
    
</div>
</body>
</html>








           
           

    </div>
     <div id="footer">
    Copyright &copy; By Harsha Prasad
      </div>
</div>
</body>
</html>




























