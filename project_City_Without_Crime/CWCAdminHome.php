<form>
<?php
if(isset($_COOKIE["vart"]))
{
echo "<body background='wallpaper.jpg'>";
//echo "<marquee><h1>Under Construction</h1></marquee>";
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select max(s_no) from fir";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
$qwe=$r[0];
$s=1;
$i=1;
echo "<h1><u><font color='green'></co> FIR & Status are following</u></h1>";
echo "<br/><br/>";

echo "<center><h1> <h1></center>";
echo "<table  border='2' bgcolor='yellow'>";
echo "<tr><td>FIR.No</td><td>DATE</td><td>Time</td><td>Name</td><td>Email</td><td>Mobile</td>
<td>Area</td><td>Subject</td><td>Description</td><td>Message from user to police</td>
<td>Message from police to user</td><td>Officer</td><td>Contact no of Officer</td><td>Message from user to admin</td><td>Message from police to admin</td>
<td>Message from admin to police</td>
</tr>";
while($i<=$qwe)
{
$s=$i;
$q="select * from fir where s_no='$s'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
$i++;
if($r[0]!="")
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[9]</td><td>$r[10]</td><td>$r[16]</td><td>$r[13]</td>
<td>$r[14]</td><td>$r[15]</td><td>$r[19]</td><td>$r[17]</td><td>$r[18]</td></tr>";
}
echo "<input type='submit' name='update1' value='   Message to Police   ' size='30' style=' font-size: small;font-weight: bold;'/>";
echo "<input type='submit' name='update2' value='   Log Out   ' size='30' style=' font-size: small;font-weight: bold;'/>";
setcookie("var9","soumya",time()+60);
if(isset($_GET["update1"]))
header("location:CWCAdminToPoliceChat.php");
if(isset($_GET["update2"]))
header("location:CWCAdmin.php");
echo "</body>";   
}
else
header("loction:CWCAdmin.php");
?>
</form>