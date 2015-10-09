
<body background=rainbow-striped-background.jpg bgproperties=fixed>
<center>
<img src="10689698_866326633401266_5049155240085410377_n.jpg"  width="600" height="150"><br>
<img src= "cooltext1881508275.png" width=600 height=70><br><br>
<?php
if (isset($_GET['view']))     //sorting 
{
   include ("dbconnect.php");
   //get the sorting column 
   $sort=$_GET['view']; 	
   $query="SELECT * FROM profile";
   $result=mysql_query($query);
   $bilang=mysql_num_rows($result);
   if ($bilang==0)
         print "<p><h1><font color=red align = center><b>*No Records to be displayed.*</b></h1></font>
		 <p><a href=insert.php><img src=iar.png></a>";
   else
    {	
      print "<h2><center>List of Registered Buyers</center></h2>
	  <table border=1 bgcolor=white align=center>
  	  <tr>
		<td><br>
		<td><a href=display.php?view=user><b>Email<b></a>
		<td><a href=display.php?view=pass><b>Password</b></a>

		<td><b>Edit</b>
		<td><b>Delete</b>";
	
   
   while ($record=mysql_fetch_array($result))
     {
    	$a=$record['user'];
	$b=$record['pass'];

	print "<form action=deletes.php>
		<tr><td><input type=checkbox name=rec[] value=$a>
		<td><a href=detail.php?user=$a&pass=$b>$a</a>
		<td>$b<td>
		<td><a href=edit.php?user=$a&pass=$b><img src =edit.png align=center height=20 width=20></a>
		<td><a href=delete.php?email=$a><img src =del.png align=center height=20 width=20></a>";
     }
	print "<tr><td colspan=8><input type=submit value=Delete name=deletes>
		<a href=display.php?checkall=yes>Check all</a> 
		<a href=display.php?view=user>Clear all</a> </table>
       	<p align=center><a href=insert.php><img src =add.png height=20 width=20><b>Add record</b></a> 
		<p align=center><a href=search.php><img src=search.png  height=20 width=20><b>Search record</b></a> 
		<p align=center><a href=login.php>Login Now</a> 
		<p align=center><b><h3>$bilang total records</b></h3>"; 
   }		
}	
if (isset($_GET['checkall']))   //checkall records
{
    print "<h2><center>List of Registered Buyers</center></h2>
	 <table border=1 bgcolor=white align=center>
  	<tr>
		<td><br>
		<td><a href=display.php?view=user><b>Email<b></a>
		<td><a href=display.php?view=pass><b>Password</b></a>

		<td><b>Edit</b>
		<td><b>Delete</b>";
		

   include ("dbconnect.php");
   $query="SELECT * FROM profile";
   $result=mysql_query($query);
   $bilang=mysql_num_rows($result);
   while ($record=mysql_fetch_array($result))
     {
    	$a=$record['user'];
	$b=$record['pass'];
	$c=$record['last'];
	$d=$record['first'];
	$e=$record['middle'];
	print "<form action=deletes.php>
	<tr><td><input type=checkbox name=rec[] value=$a checked>
		<td><a href=detail.php?user=$a&pass=$b&last=$c&first=$d&middle=$e>$a</a>
		<td>$b<td>$c<td>$d<td>$e
		<td><a href=edit.php?user=$a&pass=$b&last=$c&first=$d&middle=$e><img src =edit.png align=center height=20 width=20></a>
		<td><a href=delete.php?user=$a><img src=del.png align=center height=20 width=20></a>";
     }
	print "<tr><td colspan=8><input type=submit value=Delete name=deletes>
		<a href=display.php?checkall=yes>Check all</a> 
		<a href=display.php?view=user>Clear all</a> </table>
       	<p align=center><a href=insert.php><img src =add.png height=20 width=20>Add record</a> 
		<p align=center><a href=search.php><img src =search.png height=20 width=20>Search record</a> 
		<p align=center><a href=login.php>Login Now</a> 
		<p align=center><b><h3>$bilang total records</h3></b>"; 
		
}	
?>
<br><br><br>
</body>
</center>
<font align =left><h3><b> &copy;copyright by: Buiza, M. & Castro, J.  </font></b></h3>
