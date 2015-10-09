<body background=rainbow-striped-background.jpg bgproperties=fixed>
<center>
<img src="10689698_866326633401266_5049155240085410377_n.jpg"  width="600" height="150"><br>
<img src= "cooltext1881508275.png" width=600 height=70><br><br>
<form action=search.php>
<b>Enter keyword/s to Search: <b><input type=text name=hanap> <input type=submit value=search name=search>
<?php 
if (isset($_GET['search']))     //searching 
{
   include ("dbconnect.php");
   //get the sorting column 
   $kita=$_GET['hanap']; 	
   $query="SELECT * FROM tblgonzales where email like '%$kita%' 
	or lastname like '%$kita%' or firstname like '%$kita%'";
   $result=mysql_query($query);
   $bilang=mysql_num_rows($result);
   if ($bilang==0)
         print "<p><h1><font color=red align = center><b>**No Records to be found!**</h1></font>
		 <p><a href=search.php><img src=search.png  height=20 width=20>Search Another</a>";
   else
    {	
      print "<h2><center>List of Registered Buyers</center></h2>
	 <table border=1 bgcolor=white align=center>
  	  <tr>
		<td>Email
		<td>Password
		<td>Lastname
		<td>Firstname
		<td>Middle Name";
		 
   
   while ($record=mysql_fetch_array($result))
     {
    	$a=$record['email'];
	$b=$record['password'];
	$c=$record['lastname'];
	$d=$record['firstname'];
	$e=$record['middlename'];
	 print "<tr>
			<td>$a
			<td>$b
			<td>$c
			<td>$d
			<td>$e";
     }
	print "</table>
       		<p align=center><a href=insert.php> <img src =add.png height=20 width=20><b> Add record</a> 
			<p align=center><a href=search.php>  <img src =search.png height=20 width=20><b>Search record</a> 
		<p align=center>$bilang record/s found"; 
   }		
}	

?>
 <p><a href=display.php?view=email><img src ="var.png"></a>
</body>
</center>

<br><br><br>
<font align =left><h3><b> &copy;copyright by: Buiza, M. & Castro, J.  </font></b></h3>
