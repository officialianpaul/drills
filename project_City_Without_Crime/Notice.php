<body background="wallpaper.jpg">
<center><h1>  Notice  </h1></center>
<font color="red">
<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("soumya");
$q="select max(s_no) from fir";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
echo "<br><h1> Total No of Fir $r[0]</h1></br>";
$q="select max(Serial_No) from users";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
echo "<br><h1> Total No of person Who have submitted Fir $r[0]</h1></br>";
$q="select max(Serial_No) from police";
$res=mysql_query($q);
$r=mysql_fetch_row($res);
echo "<br><h1> Total No of Police Officer $r[0]</h1></br>";
?>
</body>
</font>