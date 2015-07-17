<form>
<?php
if(isset($_COOKIE["var"]))
{
 //$_COOKIE["var"]="singham_11_raj@CWCpolice.com";   
echo "<title>Welcome to CWC</title>";    
echo "<body background='wallpaper.jpg'>";    
//$_COOKIE["var"]="soumya_1_dev@CWC.com";
$asd=$_COOKIE["var"];
echo "<center><h1>Welcome  &nbsp".$_COOKIE["var"]."<h1></center>";
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select state from police where uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
$str=$r[0];
echo $str;
$s=1;
$i=1;
echo "<br/><br/>";
echo "<table align='right'><tr><td><input type='submit' name='log_out' align='right' style=' font-size: small;font-weight: bold;'  value='Log out'/></td></tr>
</table>";

$q="select * from fir where s_no>='$s' and addr='$str'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
if($r[0]=="")
{
$q="select fname,lname from police where uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
echo "<br><h1> Hi $r[0]$r[1] you have no File to investigate </h1></br>";
}
else
{
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select max(s_no) from fir";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
$qwe=$r[0];
$s=1;
$i=1;
echo "<h1><u><font color='green'></co>Your Files & Status</u></h1>";
echo "<br/><br/>";

echo "<center><h1> <h1></center>";
echo "<table  border='2' bgcolor='yellow'>";
echo "<tr><td>FIR.No</td><td>DATE</td><td>Name</td><td>Email</td><td>Mobile</td><td>Address</td><td>Permanant Address</td>
<td>Subject</td><td>Description</td><td>Message to User</td><td>Messsage from User</td><td>Messsage from Admin</td><td>Messsage to admin</td></tr>";
while($i<=$qwe)
{
$s=$i;
$q="select * from fir where s_no='$s' and addr='$str'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
$i++;
if($r[0]!="")
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[3]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td><td>$r[9]</td><td>$r[10]</td><td>$r[13]</td><td>$r[16]</td><td>$r[18]</td><td>$r[17]</td></tr>";

}
}
echo "</table>";
echo "<br/><br/>";
echo "<input type='submit' name='update' value='   Message to User  ' size='30' style=' font-size: small;font-weight: bold;'/>";
echo "<input type='submit' name='update1' value='   Message to Admin   ' size='30' style=' font-size: small;font-weight: bold;'/>";
echo '<marquee>
<img  height="200" width="400" src="wallpaper.jpg"/>
<img  height="200" width="400" src="police.jpg"/>
<img  height="200" width="400" src="images.jpg"/>
</marquee>';
if(isset($_GET["log_out"]))
header("location:project2.php");
setcookie("var7",$str);
setcookie("var8",$asd);
if(isset($_GET["update"]))
header("location:update.php");
if(isset($_GET["update1"]))
header("location:update2.php");

}
else
header("location:project2.php");


?>

</form>