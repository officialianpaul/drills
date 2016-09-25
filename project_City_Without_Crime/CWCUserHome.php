<form>
<?php
if(isset($_COOKIE["var"]))
{
echo "<title>Welcome to CWC</title>";    
echo "<body background='wallpaper.jpg'>";    
$asd=$_COOKIE["var"];
echo "<center><h1>Welcome  &nbsp".$_COOKIE["var"]."<h1></center>";
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$s=1;
$i=1;
echo "<br/>";
echo "<table align='right'><tr><td><input type='submit' name='log_out' align='right' style=' font-size: small;font-weight: bold;'  value='Log out'/></td></tr>
</table>";
$q="select s_no,date,status,officer,contact_no from fir where s_no>='$s' and uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
if($r[0]=="")
{
$q="select fname,lname from users where uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
echo "<br><h1> Hi $r[0]$r[1] you have no record </h1></br>";
    
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
echo "<h1><u><font color='green'></co>Your Previous FIR & Status are following</u></h1>";
echo "<table  border='2' bgcolor='yellow'>";
echo "<tr><td>FIR.No</td><td>DATE</td><td>Time</td><td>Subject</td><td>Description</td><td>Message from officer</td><td>Officer</td><td>Contact no of Officer</td><td>Message to officer</td><td>Message to admin</td></tr>";
while($i<=$qwe)
{
$s=$i;
$q="select * from fir where s_no='$s' and uid='$asd'";
$res=mysql_query($q);
$r=mysql_fetch_row($res);   
$i++;
if($r[0]!="")
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[9]</td><td>$r[10]</td><td>$r[13]</td><td>$r[14]</td><td>$r[15]</td><td>$r[16]</td><td>$r[19]</td></tr>";
}
}
echo "<br/>";
echo "<input type='submit' name='FIR' value='   New FIR   ' size='30' style=' font-size: small;font-weight: bold;'/>";
echo '<marquee>
<img  height="200" width="400" src="wallpaper.jpg"/>
<img  height="200" width="400" src="police.jpg"/>
<img  height="200" width="400" src="images.jpg"/>
</marquee>';
if(isset($_GET["log_out"]))
header("location:CWCLogIn.php");
setcookie("vare",$asd);
if(isset($_GET["FIR"]))
header("location:CWCFirMaking.php");
echo "<input type='submit' name='update' value='  Message to Police   ' size='30' style=' font-size: small;font-weight: bold;'/>";
echo "<input type='submit' name='update1' value='  Message to Admin  ' size='30' style=' font-size: small;font-weight: bold;'/>";
setcookie("var9",$asd,time()+60);
if(isset($_GET["update"]))
header("location:CWCUserToPoliceChat.php");
if(isset($_GET["update1"]))
header("location:CWCUserToAdminChat.php");
}
else
header("location:CWCLogIn.php");
echo "</body>";
?>
</form>