<body background=rainbow-striped-background.jpg bgproperties=fixed>
<center>
<img src="10689698_866326633401266_5049155240085410377_n.jpg"  width="600" height="150"><br>
<img src= "cooltext1881508275.png" width=600 height=70><br><br>
<?php
if (isset($_GET['email']))
{
$a=$_GET['email'];
print "<b><h2>Do you want to delete this record?
       <p><font color=red><a href=delete.php?ans=$a><img src=y.png>Yes</a> or
	   <a href=display.php?view=email><img src=del.png>No</a></b></h2></font>";
}	   
 if (isset($_GET['ans']))
  {
    include("dbconnect.php");
	$a=$_GET['ans'];
	$k="DELETE from tblgonzales where email='$a'";
	mysql_query($k);
	print "<h2><b><font color=red>***Record Deleted!***</font></h2></b>";
  }
  
  
?>
<br>
<br>
<br>
 <p><a href=display.php?view=email><img src ="var.png"></a>
   
</body>
</center>

<br><br><br><br><br>
<font align =left><h3><b> &copy;copyright by: Buiza, M. & Castro, J.  </font></b></h3>



