<form  method="post">
<body background="wallpaper.jpg">
<h2><b><u>Step Against Crime:</u></b></h2>
<br />
<center><h3><u>F.I.R Report</u></h3></center>
<table>
<tr><td>Name<sup>*</sup>:</td>
<td><input type="text" name="txt_name" /></td>
<td>&nbsp;</td>
<td>Email<sup>*</sup>:</td>
<td><input type="text" name="txt_email"/></td>
</tr>
<tr>
<td>
Enter UserID<sup>*</sup>:
</td>
<td><input type="text" name="txt_fname" /></td>
<td>&nbsp;</td>
<td>Mobile No<sup>*</sup>:</td>
<td>+91<input type="text" name="txt_mob"/></td>
</tr>
<tr><td><br /></td></tr>
<tr><td><u>Present Address<sup>*</sup>:</u></td>
<td>&nbsp;</td>
<td><u>Permanent Address<sup>*</sup>:</u></td></tr>
<tr><td>Address 1:</td>
<td><input type="text" name="txt_add1"/></td>
<td>&nbsp;</td>
<td>Address 1:</td>
<td><input type="text" name="txt_add2"/></td></tr>
<tr><td>Street:</td>
<td><input type="text" name="txt_street1"/></td>
<td>&nbsp;</td>
<td>Street:</td>
<td><input type="text" name="txt_street2"/></td></tr>
<tr><td>State:</td>
<td><select name="ddl_state">
<option>Select Your State</option>
<option>Andhra Pradesh</option><option>Arunachal Pradesh</option>
<option>Assam</option><option>Bihar</option><option>Chhattisgarh</option>
<option>Goa</option><option>Gujarat</option><option>Haryana</option>
<option>Himachal Pradesh</option><option>Jammu & Kashmir</option>
<option>Jharkhand</option><option>Karnataka</option>
<option>Kerela</option><option>Madhya Pradesh</option>
<option>Maharashtra</option><option>Manipur</option>
<option>Meghalaya</option><option>Mizoram</option>
<option>Nagaland</option><option>Odisha</option><option>Punjab</option>
<option>Rajasthan</option><option>Sikkim</option><option>Tamil Nadu</option>
<option>Telangana</option><option>Tripura</option><option>Uttar Pradesh</option>
<option>Uttrakhand</option><option>West Bengal</option>
</select></td>
<td>&nbsp;</td>
<td>State:</td>
<td><select name="ddl_state1">
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
</select></td></tr>
<tr><td>Pin Code:</td>
<td><input type="text" name="txt_pin"/></td>
<td>&nbsp;</td>
<td>Pin Code:</td>
<td><input type="text" name="txt_pin1"/></td></tr>
<tr><td><br /></td></tr>
<tr><td>Subject<sup>*</sup>:</td>
<td><select name="ddl_sub">
<option>Others</option>
<option>01.Attempt to Commit Crime</option>
<option>02.Charging Exorbitant Intrest</option>
<option>03.Conspiracy</option>
<option>04.Counterfeiting of Currency</option>
<option>05.Criminal Trespass</option>
<option>06.Cyber Crimes</option>
<option>07.Dacoity</option>
<option>08.Document Missing</option>
<option>09.Embezzlement</option>
<option>10.Eve Teasing</option>
<option>11.Extortion</option>
<option>12.Forgery</option>
<option>13.Hurt</option>
<option>14.ImPersonation</option>
<option>15.Incitement</option>
<option>16.Juvenile Delinguemcy</option>
<option>17.Kiddnapping</option>
<option>18.Land Grabbing</option>
<option>19.Misappropriation</option>
<option>20.Mischief</option>
<option>21.Missing Person</option>
<option>22.Murder</option>
<option>23.Non Banking Financial Institution Cases</option>
<option>24.Nuisance</option>
<option>25.Offences against Religion & Public workship</option>
<option>26.Offences against State</option>
<option>27.Offences relating to Marriage</option>
<option>28.Political offence</option>
<option>29.Quarrel/Altercation</option>
<option>30.Ragging</option>
<option>31.Rape</option>
<option>32.Robbery</option>
<option>33.Stolen Property</option>
<option>34.Theft</option>
<option>35.Traffic Violations</option>
<option>36.Vechile Missing</option>
<option>37.Women Harassment</option>
<option>38.Wrongful Confinement</option>
</select></td>
</tr>
<tr><td><br /></td></tr>
<tr>
<td>Description of the Information<sup>*</sup><br />max.(3000 charcters)</td>
<td><textarea name="desc" cols="50" rows="10">
</textarea></td>
</tr>
<tr><td><br /></td></tr>
<tr><td>Upload File:</td>
<td><input type="file" name="file"/></td></tr>
<tr><td>Please Enter the Secure Code:</td>
<td>Captcha</td></tr>
<tr><td align="center" colspan="3"><input type="submit" name="btn_submit" value="Submit"/></td></tr>
</table>
<?php
if(isset($_POST["btn_submit"]))
{
    $link=mysql_connect("localhost", "root", "");
    mysql_select_db("soumya");
    $y=$_POST["txt_name"];
    $z=$_POST["txt_email"];
    $a=$_COOKIE["vare"];
    $j=$_POST["txt_add1"];
    $k=$_POST["txt_street1"];
    $l=$_POST["ddl_state"];
    $m=$_POST["txt_pin"];
    $o=$l;
    $j1=$_POST["txt_add2"];
    $k1=$_POST["txt_street2"];
    $l1=$_POST["ddl_state1"];
    $m1=$_POST["txt_pin1"];
    $op=$j1." " .$k1. " " .$l1. " ". $m1;
    $c=$_POST["txt_mob"];
    $d=$_POST["ddl_sub"];
    $e=$_POST["desc"];
    $f=$_POST["file"];
    $q="select max(s_no) from fir";
    $res=mysql_query($q);
    $r=mysql_fetch_row($res);
    if($r[0]=="")
    $s=1;
    else
    $s=$r[0]+1;
    
    $t=time();
    $u=@date("d/m/Y");
    $h=str_split($d);
    $g="$h[0]$h[1]";
    $i=$s."_".$m1."_".$g;
    echo $s."<br>".$u."<br>".$t."<br>".$y."<br>".$a."<br>".$z."<br>".$c."<br>".$o."<br>".$op."<br>".$d."<br>".$e."<br>".$f."<br>".$i;
    //,'$z','$c','$o', '$o1', '$d','$e','$f','$i'
    $q1="insert into fir (s_no,date,time,name,uid,email,mobile,addr,paadr,sub,descrip,file,last)values('$s','$u','$t','$y', '$a','$z','$c','$o','$op','$d','$e','$f','$i')";
    $res1=mysql_query($q1);
    $n=mysql_affected_rows($link);
    if($n!="")
    {
    echo "<h2>Successfully Registered your Complaint</h2>";
    header("location:project2.php");
    } 
}
?>
</body>
</form>

