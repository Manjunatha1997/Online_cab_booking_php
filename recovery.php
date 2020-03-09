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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST['username'];
	$password=$_POST['pass'];
	$query="update  reg set create_password='$password'  WHERE user_name='$username'";
	/*$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);*/
	//if($count==1)
		if(mysqli_query($conn,$query))
	{
		echo '

	<script>
	alert("password update was sucessful");
	window.location.href="index.html";
	</script>
		';


	}
	else
	{
		echo " username and password is invalid".mysqli_error($conn);
	}
}	
?>