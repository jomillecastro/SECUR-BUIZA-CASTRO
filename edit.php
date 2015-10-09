<body background=rainbow-striped-background.jpg bgproperties=fixed>
<center>
<img src="10689698_866326633401266_5049155240085410377_n.jpg"  width="600" height="150"><br>
<img src= "cooltext1881508275.png" width=600 height=70><br><br>
<?php
$a=$_GET['email'];
$b=$_GET['password'];
$c=$_GET['lastname'];
$d=$_GET['firstname'];
$e=$_GET['middlename'];
print"<br>";
print"";
print "<b><h3>Detailed Information</h3></b>
<table border=1><form action=edit.php>
 <tr><td>Email 		<td><input type=text value=$a name=email>
 <tr><td>Password	<td><input type=password value=$b name=password>
 <tr><td>Last Name	<td><input type=text value=$c name=lastname>
 <tr><td>First Name <td><input type=text value=$d name=firstname>
 <tr><td>Middle Name <td><input type=text value=$e name=middlename>
 <tr><td colspan=2 align=center><input type=submit value=Update name=save>
 </table>";
 if (isset($_GET['save']))
  {
    include("dbconnect.php");
	$a=$_GET['email'];
	$b=$_GET['password'];
	$c=$_GET['lastname'];
	$d=$_GET['firstname'];
	$e=$_GET['middlename'];	
	$k="UPDATE tblgonzales SET password='$b', lastname='$c',
		firstname='$d',middlename='$e' where email='$a'";
	mysql_query($k);
	print"<font color=red><b><h2> Record Updated!</h2></b></font>";
  }
  
  
?>
<br>
<br>
<br>
 <p><a href=display.php?view=email><img src ="var.png"></a>
</body>
</center>

<br><br><br>
<font align =left><h3><b> &copy;copyright by: Buiza, M. & Castro, J.  </font></b></h3>

   
   



