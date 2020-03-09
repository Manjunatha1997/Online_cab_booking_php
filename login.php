 <?php
 session_start();

 
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
	$password=$_POST['password'];
	
	
	$sql="insert into temp(temp_user_name) values('$username')";
	mysqli_query($conn,$sql);

	
	$query="SELECT user_name,create_password FROM reg WHERE user_name='$username' and create_password='$password'";
	
	
	
	
	
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['user_name']=$username;
		//header("location: indexuser.html");
		
		echo '
		
		<script>
		alert("log in sucessful");
		location.href=("indexuser.html"); 
		</script>
		
		';
		
		
		
	}
	else
	{
		echo "
		<script>
		
		alert('your login username and password is invalid');
		location.href=('loginuser.html');
	</script>";
	}
}


	
?>