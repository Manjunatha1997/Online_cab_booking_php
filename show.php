<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>show available cabs</title>
<?php
echo '
<style>
#back {
background:purple;
}
a{

color:white;
text-transform:uppercase;
text-decoration:none;


}
#ac{
background:green;
color:white;
text-transform:uppercase;

}
.st{
background:#996633;
color:white;
text-transform:uppercase;
color:

}

table{
border-collapse:collapse;
}
th,td{
height:40px;
width:200px;
border:2px solid white;
}
td{
background:lightgray;
font-size:20px;
}
#delete{
	background:red;
	text-align:center;
}
 
</style>

';




?>



</head>

<body>
</body>
<?php 

$servername="localhost";
$username="root";
$password="manju369";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

	//$driver_name=$_POST['dn'];
	//$vehicle_name=$_POST['vn'];
	//$from_loc=$_POST['from'];
	//$to_loc=$_POST['to'];
	//$contact_number=$_POST['cn'];
	//$date=$_POST['date'];
	//$time=$_POST['time'];
	
	$result=mysqli_query($conn," select * from add_cabs;");
	
	
	
	
	//$row=mysqli_fetch_array($result);
	//$count=mysqli_num_rows($result);
	
	echo "<form method='post' >";
	echo "<table border='2' align='center' id='tablecheck' >";
	
	echo "<tr>";
	echo "<th id='back'>"; echo "<a href='addcabs.html'>back</a>"; echo "</th>";
	echo "<th colspan='5' id='ac'>"; echo "all cabs"; echo "</th>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th class='st'>"; echo "driver name";  echo"</th>";
	echo "<th class='st'>"; echo "vehicle name";  echo"</th>";
	echo "<th class='st'>"; echo  "from";  echo"</th>";
	echo "<th class='st'>"; echo  "to";  echo"</th>";
	echo "<th class='st'>"; echo "contact number";  echo"</th>";
	echo "<th class='st'>"; echo "delete"; echo "</th>";
	//echo "<th>"; echo "user name";  echo"</th>";
	//echo "<th>"; echo "date"; echo "</th>";
	//echo "<th>"; echo "time"; echo "</th>";
    //echo "<th>"; echo "booking"; echo "</th>";
	
	echo "</tr>";
	
	
	
	while($row=mysqli_fetch_array($result))
	{
	
	
	echo "<tr>";
	
	echo "<td>"; echo $row["driver_name"];  echo"</td>" ;
	echo "<td>"; echo $row["vehicle_name"];  echo"</td>";
	echo "<td>"; echo $row["from_loc"];  echo"</td>";
	echo "<td>"; echo $row["to_loc"];  echo"</td>";
	echo "<td>"; echo $row["contact_number"];  echo"</td>";
	echo " <td id='delete'><a href=delete.php?cab_id=".$row['cab_id']." >delete</a></td>";
	
	}
	echo "</table>";
	
	echo "</form>";
	
	
?>
</html>
	
	
	