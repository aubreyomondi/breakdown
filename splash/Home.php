<?
$inputusername =$_POST['user'];
$inputuserpasssword =$_POST['pass'];
$connect = mysql_connect("localhost", $username,$password);
@mysql_select_db($website) or ("Database not found");
$query ="SELECT* FROM 'user' WHERE 'username' *'$inputusername'";
$query ="SELECT* FROM 'user' WHERE 'password' *'$inputuserpasssword'";

echo $query; 
echo $querypassword;

mysql_close()
?>