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

$driver_name=$_POST["dn"];
$vehicle_name=$_POST["vn"];
$from_loc=$_POST["from"];
$to_loc=$_POST["to"];
$contact_number=$_POST["cn"];


$sql="insert into add_cabs(driver_name,vehicle_name,from_loc,to_loc,contact_number) values('$driver_name','$vehicle_name','$from_loc','$to_loc','$contact_number')";
//$insert=mysqli_query($conn,$sql);

/*
$sql1="insert into book(driver_name,vehicle_name,from_loc,to_loc,contact_number) values('$driver_name','$vehicle_name','$from_loc','$to_loc','$contact_number')";
$insert1=mysqli_query($conn,$sql1);
*/

if($conn->query($sql)===true)
{
//echo "new record is saved successfully";
//header("location:index.html");

echo '

	<script>
	alert("cab added sucessfully");
	window.location.href="addcabs.html";
	</script>
		';


}
else
{
echo "error".$sql."<br>".$conn->error;

}


$conn->close();
?>