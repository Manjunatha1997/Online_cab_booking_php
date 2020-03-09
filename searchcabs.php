<html>
<head>
<title>
</title>

<style>
table{
border-collapse:collapse;
}
input[type=text]{

width:100%;
height:40px;
//border:none;
//border-bottom:2px solid gray;
outline:none;
font-size:20px;

}
table tr td{
font-size:20px;
text-transform:capitalize;
//text-align:center;
}
table tr th{
font-size:25px;
text-transform:capitalize;

}
#check{
font-size:20px;
text-transform:capitalize;
padding:10px 20px;
}
.rt{
width:20px;

}

</style>

<head>
<body>

<div align="center">
<form name="searchcabs" action="searchcabs.php" method="post">
  <table >
  <tr><th colspan="2">check availability</th></tr><br>
    
    <tr>
      <td class="rt">from</td>
      <td>   <input type="text" name="from">
              </td>
    </tr>
    <tr>
      <td class="rt">to</td>
      <td>       <input type="text" name="to">
              </td>
    </tr>
       <tr>  <td height="48" colspan="2" align="center"><input type="submit" name="submit" value="check " id="check"/></td>
	   			
	  
    </tr>
  </table>
  </form>
</div>
</body>
</html>

<?php

echo'
<style>

#tablecheck  tr th{
background:#996633;
line-height:30px;
color:white;

}
#tablecheck tr td{
line-height:40px;
background:lightgreen;
}

th,td{
height:40px;
width:200px;
border:2px solid white;
}


a{

color:green;
text-transform:uppercase;
font-weight:bold;

}



#tablecheck #book{
text-align:center;
background-color:green;
text-transform:capitalize;
color:white;
padding:10px 25px;
font-size:20px;
border-radius:20px;

}



</style>
';






$servername="localhost";
$username="root";
$password="manju369";
$dbname="project";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

if(isset($_POST["submit"])){

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	//$driver_name=$_POST['dn'];
	//$vehicle_name=$_POST['vn'];
	$from_loc=$_POST['from'];
	$to_loc=$_POST['to'];
	//$contact_number=$_POST['cn'];
	//$date=$_POST['date'];
	//$time=$_POST['time'];
	
	//$result1=mysqli_query($conn,"insert into book select * from add_cabs where cab_id='$_GET[cab_id]';");

	$result=mysqli_query($conn," select * from add_cabs where from_loc='$from_loc' and to_loc='$to_loc';");
		
	
	
	//$row=mysqli_fetch_array($result);
	//$count=mysqli_num_rows($result);
	
	echo "<form method='post' action='book.php'>";
	echo "<table border='2' align='center' id='tablecheck' >";
	
	echo "<tr>";
	echo "<th>"; echo "driver name";  echo"</th>";
	echo "<th>"; echo "vehicle name";  echo"</th>";
	echo "<th>"; echo  "from";  echo"</th>";
	echo "<th>"; echo  "to";  echo"</th>";
	echo "<th>"; echo "contact number";  echo"</th>";
	//echo "<th>"; echo "user name";  echo"</th>";
	//echo "<th>"; echo "date"; echo "</th>";
	//echo "<th>"; echo "time"; echo "</th>";
    echo "<th>"; echo "booking"; echo "</th>";
	
	echo "</tr>";
	
	
	
	while($row=mysqli_fetch_array($result))
	{
	
	
	echo "<tr>";
	
	echo "<td name='dn'>"; echo $row["driver_name"];  echo"</td>" ;
	echo "<td anme='vn'>"; echo $row["vehicle_name"];  echo"</td>";
	echo "<td name='fl'>"; echo $row["from_loc"];  echo"</td>";
	echo "<td name='tl'>"; echo $row["to_loc"];  echo"</td>";
	echo "<td name='cn'>"; echo $row["contact_number"];  echo"</td>";
	//echo "<td>"; echo "<input type='text' name='un' />";   echo"</td>";
	
	/*
	?>
	
	<td> <input type="date" name="date" value="<?php echo $_POST['date'];?>"></td>
	<td> <input type="time" name="time" value="<?php echo $_POST['time'];?>"></td>
	
	<?php
	*/ 
	
	//echo "<td>"; echo "<input type='date' name='date' />";   echo"</td>";
	//echo "<td>"; echo "<input type='time' name='time'/>";  echo"</td>";
	//echo "<td align='center'>"; echo"<input type='submit' value='book' name='book' id='book' id=".$row['id']." /> ";  echo "</td>";
	//echo "<td>"; echo "<a href='book.php' > book </a>"; echo "</td>";
	echo " <td align='center'><a href=book.php?cab_id=".$row['cab_id']." >book</a></td>";
	
	echo "</tr>";
	}
	
	
	

}}
?>
