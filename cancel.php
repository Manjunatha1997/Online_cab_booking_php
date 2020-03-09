<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
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


$sql=" delete from book where cab_id='$_GET[cab_id]'" ;
if(mysqli_query($conn, $sql))
//if($conn->query($sql)===true)
{
	
echo '

	<script>
	alert("cab cencelled sucessfully");
	window.location.href="mybookings.php";
	</script>
		';


}
else
{
echo "error".$sql."<br>".$conn->error;

}


$conn->close();
?>

</body>
</html>
