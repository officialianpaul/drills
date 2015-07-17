<form>
<title>Welcome to CWC</title>
<body background="wallpaper.jpg">
<br /><br />
<input type="submit" name="home" size="40" value="Home" style="border-bottom-style: solid;"/>
<font size="5" color="black"><p>Log In as </p></font>
<font color="black" size="5">   Police</font><input type="radio" name="radio_btn" value="police">
<font color="black" size="5">   Users</font><input type="radio" name="radio_btn" value="user">
<table>
<tr><td><font color="black" size="6">User Id</font></td><td><input type="text" name="txt_name1" size="40"></td></tr>  
<tr><td><font color="black" size="6">Password</font></td><td><input type="password" name="txt_name2" size="40"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btn_login" value="  Log In  " size="20" ></td></tr>
</table>
<?php
if(isset($_GET["btn_login"]))                                            
{
$value=$_GET["radio_btn"];
if(!strcmp($value,"user"))
{
$uid=$_GET["txt_name1"];                                                 
$psw=$_GET["txt_name2"];                                                 
$b=str_split($psw,1);                                                    
$size=strlen($psw);                                                      
for($i=0;$i<$size;$i++)                                                  
$b[$i]=chr(ord($b[$i])+3);                                               
$psw=implode("",$b);                                                     
$link=mysql_connect("localhost","root","");                              
mysql_select_db("soumya");                                               
$q="select * from users where uid='$uid' and psw='$psw'";    
$res=mysql_query($q);                          
$r=mysql_fetch_row($res);
setcookie("var",$uid,time()+60);
if($r[0]>=1)                                   
header("location:project21.php");
else                         
header("location:wrong.php");
}
if(!strcmp($value,"police"))                               
{                                                        
$uid=$_GET["txt_name1"];                                 
$psw=$_GET["txt_name2"];                                 
$b=str_split($psw,1);                                    
$size=strlen($psw);                                      
for($i=0;$i<$size;$i++)                                  
$b[$i]=chr(ord($b[$i])+3);                               
$psw=implode("",$b);                                     
$link=mysql_connect("localhost","root","");              
mysql_select_db("soumya");                               
$q="select * from police where uid='$uid' and psw='$psw'";
$res=mysql_query($q);                                    
$r=mysql_fetch_row($res);                                
setcookie("var",$uid,time()+60);                         
if($r[0]>=1)                                             
header("location:project22.php");                        
else                                                     
header("location:wrong.php");                            
}                                                        
}
if(isset($_GET["home"]))
header("location:project1.php");
?>
</body>
</form>