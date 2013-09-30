<!DOCTYPE HTML>
<html>
<head>
<title>Database design</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >

</head>
<body>
<div id="header">Quick Retriever</div>
<div id="insert"><h2>Retrieve Record</h2>

<div class="animate dropIn">
		<div id="wrapper1">
	<?php
 $arr = Array(-1,1050,667,1353,231,845,1234,1478);
 $val = $_POST['Id'];
 if($val<0 || $val>1600)
 {
  echo "Not in Database.";
 }
 $i=1;
 $flag=0;
 while($i<8)
 {  
   if($val==$arr[$i])
   {
    $mysql_hostname = "192.168.1.5";
    $mysql_user="php";
    $mysql_password = "";
    $mysql_database="s5";
    
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");

    $flag=1;
    echo "found in cache<br/>";
    $result_cache=mysql_query("select * from cache where id=$val") or die("ooops");
    $row_cache = mysql_fetch_row($result_cache);
    echo "Id- ".$row_cache[0]."<br/>";
    echo "Name- ".$row_cache[1];
  
	  break;
       }
   
   elseif ($val<$arr[$i]) {
    $i=$i*2;

   }
   elseif($val>$arr[$i]) {
    $i=($i*2)+1;
    }
} 
  if($flag==0)
  {
   if($i%2==0)
   {
      $i=$i/2;
      }
        else{
    $i=$i-1;
    $i=$i/2;
        }
  }
  switch($i)
  {
   case 4:
   if($val<$arr[$i])
   {
 $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s1";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
	echo "Id- ".$row['id']."<br/>";
    echo "Name- ".$row['name'];
  
 }
 	}
 	elseif($val>$arr[$i])
 	{
 $mysql_hostname = "192.168.1.4";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s2";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
	}
 	break;
 	case 5:
 	if($val<$arr[$i])
   {
 $mysql_hostname = "192.168.1.53";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s3";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
 	}
 	elseif($val>$arr[$i])
 	{

 $mysql_hostname = "192.168.1.54";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s4";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
	}
 	break;
 	case 6:
 	if($val<$arr[$i])
   {
     $mysql_hostname = "192.168.1.5";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s5";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
 	}
 	elseif($val>$arr[$i])
 	{
 $mysql_hostname = "192.168.1.200";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s6";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
	}
 	break;
 	case 7:
 	if($val<$arr[$i])
   {
     $mysql_hostname = "192.168.1.121";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s7";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
  
 }
 	}
 	elseif($val>$arr[$i])
 	{
 $mysql_hostname = "192.168.1.159";
 $mysql_user="php";
 $mysql_password = "";
 $mysql_database="s8";
 
 $a = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect to the database");
 
 mysql_select_db($mysql_database,$a)or die("Could not connect to database");
 $result=mysql_query("select * from user where id=$val");
 while($row=mysql_fetch_array($result))
 {
echo "Id- ".$row['id']."<br/>";
  echo "Name- ".$row['name'];
  
 }
	}
 	break;
  }
  
?>
    



		</div>
		
	</div>


	</div>






</body>
</html>