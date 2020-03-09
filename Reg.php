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
$firstname=$_POST["fn"];
$lastname=$_POST["ln"];
$date_of_birth=$_POST["dob"];
$phone=$_POST["pn"];
$user_name=$_POST["un"];
$gender=$_POST["gender"];
$password=$_POST["pass"];


$sql="insert into reg(first_name,last_name,user_name,date_of_birth,gender,create_password,phone_number) values('$firstname','$lastname','$user_name','$date_of_birth','$gender','$password','$phone')";
if($conn->query($sql)===true)
{
//echo "new record is saved successfully";
//header("location:index.html");

echo '

	<script>
	alert("registration was sucess");
	window.location.href="index.html";
	</script>
		';


}
else
{
echo "error".$sql."<br>".$conn->error;
}
$conn->close();
?>