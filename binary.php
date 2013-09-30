<?php
$arr = Array();
$id = 2;
$query=mysql_query(select * from cache where id='$id');
$row = mysql_fetch_row($result);
if(isset($row[1]))
{
 echo "Found in Cache<br/>";
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 }
 else{
 if($id>=1 && $id<=200)
 {
 $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b1";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row1=mysql_fetch_row($query);
 echo "Id:: ".$row1[0]."<br/>";
 echo "Name:: ".$row1[1]."<br/>";
 $result = mysql_query("select count(id) from cache");
 $row = mysql_fetch_row($result);
 if($row[0]<10)
 {
  mysql_query("insert into cache values($row1[0],'$row1[1]')");
 }
 else{
  mysql_query("delete from cache where time = min(time)");
  mysql_query("insert into cache values($row1[0],'$row1[1]')");
 }
 }
 if($id>=201 && $id<=400)
 {
  $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b2";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 }
 if($id>=401 && $id<=600)
 {
  $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b3";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 }
 if($id>=601 && $id<=800)
 {
  $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b4";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 }
 if($id>=801 && $id<=1000)
 {
  $mysql_hostname = "192.168.1.5";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b5";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 }
 if($id>=1001 && $id<=1200)
 {
   $mysql_hostname = "192.168.1.5";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b6";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";

 }
 if($id>=1201 && $id<=1400)
 {
   $mysql_hostname = "192.168.1.5";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b7";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";

 }
 if($id>=1401 && $id<=1600)
 {
   $mysql_hostname = "192.168.1.5";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="b8";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $query = mysql_query("select * from user where id=$id");
 $row=mysql_fetch_row($query);
 echo "Id:: ".$row[0]."<br/>";
 echo "Name:: ".$row[1]."<br/>";
 
 }
 }
?>