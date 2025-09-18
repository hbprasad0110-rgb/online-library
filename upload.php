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
<div id="lo"><a href="index.html ">Logout</a></div>
    </div>
    <div id="content">
            <div id="nav">
              <h3>Navigation</h3>
              <ul>
<li><a href=".@-z.html">Home</a></li>
<li><a href=".@-z1.html">Editors Choice</a></li>

<li><a href="upload.php">Upload </a></li>
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
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<form action="uploa.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
</body>
</html>

           </div>
           

    </div>
     <div id="footer">
    Copyright &copy; By Harsha Prasad
      </div>
</div>
</body>
</html>













