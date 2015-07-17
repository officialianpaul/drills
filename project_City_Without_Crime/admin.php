<form>
<title>Welcome to CWC</title>
<body background="wallpaper.jpg">
<br /><br />
<input type="submit" name="home" size="40" value="Home" style="border-bottom-style: solid;"/>
<table>  
<tr><td><font color="black" size="6">Password</font></td><td><input type="password" name="txt_name2" size="40"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btn_login" value="  Log In  " size="20" ></td></tr>
</table>
<?php
if(isset($_GET["btn_login"]))                                            
{
setcookie("vart","soumya",time()+60);    
$psw=$_GET["txt_name2"];                                                 
if(!strcmp($psw,"soumya"))
header("location:admin2.php");
else
header("location:wrong.php");
}
if(isset($_GET["home"]))        
header("location:project1.php");?>
</body>
</form>