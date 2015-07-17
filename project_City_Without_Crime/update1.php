<form>
<?php
if(isset($_COOKIE["var9"]))
{
echo "<title>Welcome to CWC</title>";
echo "<body background='wallpaper.jpg'>";
echo "<table>";
echo "<tr><td><font color='black' size='6'>FIR No</font></td><td><input type='text' name='txt_name1' size='40'></td></tr>";
echo "<tr><td><font color='black' size='6'>Message to police officer</font></td><td><input type='text' name='txt_name2' size='40'></td></tr>";
echo "<tr><td colspan='2' align='center'><input type='submit' name='btn_login' value='  Update  ' size='20' ></td></tr>";
if(isset($_GET["btn_login"]))
{
$asd=$_COOKIE["var9"];
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select * from police where uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
$firno=$_GET["txt_name1"];
$q="select * from fir where s_no='$firno'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
$stat=$r[16]."<br>".@date("d/m/Y")."->".$_GET["txt_name2"];
if($firno>=1)
{
$q="UPDATE fir SET utop='$stat' where s_no='$firno'";
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$res=mysql_query($q);   
if(mysql_affected_rows($link))
header("location:project21.php");    
}
}
echo "</body>";    
}
else
header("location:project21.php");
?>
</form>