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
	$query="SELECT username,password FROM adminreg WHERE username='$username' and password='$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		//echo "log in was sucessfull";
		$_SESSION['username']=$username;
		//header("location: indexadmin.html");
		echo '
		<script>
		alert("admin log in sucessful");
		location.href=("indexadmin.html");
		
		
		</script>
		
		';
		
		
		
	}
	else
	{
		echo "
		<script>
		
		alert('your login username and password is invalid');
		location.href=('adminlogin.html');
	</script>";
	}
}	
?>