<form>
<title>Welcome to CWC</title>



<script>
function cle()
{
    var asd=getElementById("mob");
    if(asd.value=="")
    {
    alert("Please give a phone no");  
    asd.focus();
    return false;
    }
    else if(isNaN(asd.value))
    {
    alert("Please give a accurate phone no");  
    asd.value="";
    asd.focus();
    return false;
    }
    else if(!(asd.value==10))
    
    {
    alert("Please give a phone no");  
    asd.focus();
    return false;
    }
}

</script>
<body background="wallpaper.jpg">
<br /><br />
<font size="5" color="black"><p>Sign up as </p></font>
<font color="black" size="5">   Police</font><input type="radio" name="radio_btn1" value="police">
<font color="black" size="5">   Users</font><input type="radio" name="radio_btn1" value="user">
<h1 align="left"><font color="black">Sign Up</font></h1>
<table>
<tr><td><input type="text" name="txt_name3" placeholder="Enter First name" size="40"></td><td><input type="text" name="txt_name4" placeholder="Enter Second name" size="40"></td></tr>
<tr><td colspan="4"><input type="text" name="txt_name5" placeholder="Enter Mobile no or Email" size="85" id="mob" onblur="cle()" /></td></tr>
<tr><td colspan="4"><input type="password" name="txt_name6" placeholder="New Password" size="85"></td></tr>
</table>
<h3><font color="black">Birthday</font></h3>
<select name="ddl_month">
<?php
echo "<option>Enter Month</option>";
for($j=1;$j<=12;$j++)
echo "<option>$j</option>";
?>
</select>
<select name="ddl_day">
<?php
echo "<option>Enter Day</option>";
for($i=1;$i<=31;$i++)
echo "<option>$i</option>";
?>
</select>
<select name="ddl_year">
<?php
echo "<option>Enter Year</option>";
for($i=2015;$i>=1915;$i--)
echo "<option>$i</option>";
?>
</select>
<br />                    
<p>Select Your State </p> 
<select name="sta">
<option>state</option>
<option>Select Your State</option>
<option>Andhra Pradesh</option><option>Arunachal Pradesh</option>
<option>Assam</option><option>Bihar</option><option>Chhattisgarh</option>
<option>Goa</option><option>Gujarat</option><option>Haryana</option>
<option>Himachal Pradesh</option><option>Jammu Kashmir</option>
<option>Jharkhand</option><option>Karnataka</option>
<option>Kerela</option><option>Madhya Pradesh</option>
<option>Maharashtra</option><option>Manipur</option>
<option>Meghalaya</option><option>Mizoram</option>
<option>Nagaland</option><option>Odisha</option><option>Punjab</option>
<option>Rajasthan</option><option>Sikkim</option><option>Tamil Nadu</option>
<option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option>
<option>Uttrakhand</option><option>West Bengal</option>
</select>
<br />
<font size="5" color="black"><p>Gender </p></font>
<font color="black" size="5">  Male</font><input type="radio" name="radio_btn" value="male">
<font color="black" size="5">Female</font><input type="radio" name="radio_btn" value="female">
<br /><input type="submit" name="btn_signin" value="  Sign Up  " size="20">
<?php
if(isset($_GET["btn_signin"]))
{
$value=$_GET["radio_btn1"];
if(!strcmp($value,"user"))
{    
$fname=$_GET["txt_name3"];
$lname=$_GET["txt_name4"];
$email=$_GET["txt_name5"];
$psw=$_GET["txt_name6"];
$dob=$_GET["ddl_day"]."/".$_GET["ddl_month"]."/".$_GET["ddl_year"];
if(isset($_GET["radio_btn"]))
$st=$_GET["sta"];
$gen=$_GET["radio_btn"];
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select max(Serial_No) from users";    
$res=mysql_query($q);
@$r=mysql_fetch_row($res);
if($r[0]=="")
$sln="1";
else
$sln=$r[0]+1;
$uid=$fname."_".$sln."_".$lname."@CWC.com";
$b=str_split($psw,1);
$size=strlen($psw);
for($i=0;$i<$size;$i++)
$b[$i]=chr(ord($b[$i])+3);  
$psw=implode("",$b);
setcookie("var",$uid,time()+60);    
$q="insert into users values('$sln','$uid','$psw','$fname','$lname','$email','$dob','$gen','$st')";
if(!$res=mysql_query($q))
header("location:wrong.php");
else
header("location:project21.php");;
}
if(!strcmp($value,"police"))
{    
$fname=$_GET["txt_name3"];
$lname=$_GET["txt_name4"];
$email=$_GET["txt_name5"];
$psw=$_GET["txt_name6"];
$dob=$_GET["ddl_day"]."/".$_GET["ddl_month"]."/".$_GET["ddl_year"];
if(isset($_GET["radio_btn"]))
$st=$_GET["sta"];
$gen=$_GET["radio_btn"];
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select max(Serial_No) from police";    
$res=mysql_query($q);
@$r=mysql_fetch_row($res);
if($r[0]=="")
$sln="1";
else
$sln=$r[0]+1;
$uid=$fname."_".$sln."_".$lname."@CWCpolice.com";
$b=str_split($psw,1);
$size=strlen($psw);
for($i=0;$i<$size;$i++)
$b[$i]=chr(ord($b[$i])+3);  
$psw=implode("",$b);
setcookie("var",$uid,time()+60);    
$q="insert into police values('$sln','$uid','$psw','$fname','$lname','$email','$dob','$gen','$st')";
$res=mysql_query($q);
header("location:project22.php");
}
}
?>
</body>
</form>
