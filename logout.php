<html>

<body background = "abstract-white-desktop-backgrounds..jpg" height=100% width=100% bgproperties = "fixed">
<center>
<br>
<img src= "ms.png" width=800 height=100 center> <br>
<img src= "10429296_866327806734482_8701488832115220165_n.jpg" width=600 height=150 center>
<br>
<img src= "cooltext1881508275.png" width=650 height=90 center>

<h3>Login Form</h3>
<form action="" method="POST">
Username: <input type=text name='user'><br/>
Password: <input type=password name='pass'><br/>	

<input type=submit value='Login' name='submit'>
</form>
<?php 
if (isset($_POST['submit'])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {

$user=mysql_real_escape_string($_POST['user']);
$pass=mysql_real_escape_string($_POST['pass']);

$encrypt_password=md5($pass);

$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('students') or die("cannot select DB");

$query=mysql_query("SELECT * FROM profile WHERE user='$user' AND pass='$encrypt_password'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
session_start();
$_SESSION['user']=$user;    

header("Location: welcome.php");
}
else {
echo "Invalid username or password!";
}

} else {
	echo "All fields are required!";
}
}
?>
<a href=insert.php><b><img src = "sign-up-icon-1004151454.png" alt="sign up now" width=200 height=200 > </a>
</center>
</body>
<font align =right><h3><b> &copy;copyright by: Buiza, M. & Castro, J. </font></b></h3>
</html>
