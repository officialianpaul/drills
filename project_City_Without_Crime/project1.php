<form>
<script>
function rot()
{
document.getElementById("w").src="wallpaper.jpg";
}
rot();
</script>
<title>City Without Crime</title>
<body bgcolor="grey" onload="rot()">
<h1 style="background: aqua;font: bold x-large "><center>City Without Crime</center></h1>
<table align="right"><tr>
<td><input type="submit" name="log_in" align="right" style=" font-size: small;font-weight: bold;"  value="Log in"/>
</td><td><input type="submit" name="Sign_up" align="right" style="font-size: small;font-weight: bold;" value="Sign Up" /></td></tr></table>
<br />
<table align="center" bgcolor="white"><tr bgcolor="blue" style="background: white;background-color: white;" >
<td ><input type="submit" name="Home" value=" Home" size="30" style="font-size: x-large;"/></td>
<td ><input type="submit" name="About" value="About Us" size="30" style="font-size: x-large;"/></td>
<td ><input type="submit" name="Notice" value=" Notice " size="30" style="font-size: x-large;"/></td>
<td ><input type="submit" name="Emargency_no" value="Emergency no" size="30" style="font-size: x-large;"/></td>
<td ><input type="submit" name="Gp" value="General Complain" size="30" style="font-size: x-large;"/></td>
<td ><input type="submit" name="FIR" value="   FIR   " size="30" style="font-size: x-large;"/></td>
</tr></table>
<script>rot;</script>
<marquee>
<img  height="500" width="1000" src="wallpaper.jpg"/>
<img  height="500" width="1000" src="police.jpg"/>
<img  height="500" width="1000" src="images.jpg"/>
</marquee>
<br />
<center><a href="devlopers.php"><font color="blue" >Devlopers site</font></a></center>
<center><a href="admin.php"><font color="blue" >Adminstrative Login</font></a></center>
<?php
if(isset($_GET["log_in"]))
header("location:project2.php");
if(isset($_GET["Sign_up"]))
header("location:project3.php");
if(isset($_GET["Home"]))     
header("location:project1.php");
if(isset($_GET["About"]))        
header("location:construction.php");
if(isset($_GET["Notice"]))        
header("location:Notice.php");
if(isset($_GET["Emargency_no"]))        
header("location:emg_no.php");
if(isset($_GET["Gp"]))        
header("location:project2.php");
if(isset($_GET["FIR"]))        
header("location:project2.php");
?>
</body>
</form>