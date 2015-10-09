<body background=rainbow-striped-background.jpg bgproperties=fixed>
<center>
<img src="10689698_866326633401266_5049155240085410377_n.jpg"  width="600" height="150"><br>
<img src= "cooltext1881508275.png" width=600 height=80><br><br><br>
<form action=summary.php method=get>
<br>

<table border = 1 cellspacing="1" cellpadding="1" bgcolor=white>
<tr><tr><td><td colspan=4><font color=red><b><center>INFORMATION OF ORDER</b></center></font>
<tr><td><b><font color=red>Name<font><td><input type= text name= email required>
<tr>
<td><b>Item Name
<td><input name=item value=<?php print $_GET['item'];?>>
<tr>
<td><b>Item Price
<td><input name=ucost value=<?php print $_GET['ucost'];?>>
<tr>
<td><b>Quantity
<td><input name=qty value=<?php print $_GET['qty'];?>>
<tr>
<td><b>Total Amount
<td><input name=amt value=<?php print $_GET['ucost'] * $_GET['qty'];?>>
<tr><tr><td><td><input type=submit name=save value='Save Order'>
<input type=reset value=Clear>

</table>
</form>


<?php
if(isset($_GET['save']))
{
include("dbconnecta.php");
$a=$_GET['email'];
$b=$_GET['item'];
$c=$_GET['ucost'];
$d=$_GET['qty'];
$e=$_GET['amt'];

// search the name if it already active
$query="select * from profile where (email='$a')";
$result=mysql_query($query) or die ("Error in query");
$bilang=mysql_num_rows($result);
if ($bilang==0)
{
// insert order
$insert="insert into profile values('$a','$b', '$c', '$d', '$e')";
mysql_query($insert);
print "<p><font color=black><b><i>Order is Saved</i></b></font>";
}
else
print "<font color=black><b><i>$a</i></font> already Exists!!!</b></font>";
}

?>
<br>

<p> <a href=displaya.php><img src ="vloo.png"></a>
<p><a href=logout.php><img src = "lo.png"></a>
<br><br><br><br>

</center>
<font align =left><h3><b> &copy;copyright by: Buiza, M. & Castro, J.  </font></b></h3>

