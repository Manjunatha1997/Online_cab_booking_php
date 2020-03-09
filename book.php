<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php 
echo '
<style>

#book_style{
position:absolute;
left:40%;

}
p{
text-transform:capitalize;
font-size:20px;

}


table{
position:relative;
top:40px;
}

input[type=submit]{
background:green;
color:white;
padding:10px 80px;
text-transform:capitalize;
font-size:20px;
}



input[type=date],
input[type=time]{
width:300px;
height:30px;
//border:none;
//border-bottom:2px solid gray;
outline:none;
}
table tr td{
font-size:20px;
text-transform:capitalize;
//text-align:center;
}







</style>

';


?>
</head>

<body>

<form method="post">
<div id="book_style">
<p>date:</p>
<p><input type="date" name="date" required/>
<p>time:</p>
<p><input type="time" name="time" required/></p>
<p><input type="submit"  value="book confirm	" name="book_confirm" id="book"/></p>
</div>



</form>


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
	
	//if(isset($_POST['book'])){
	/*$row=mysqli_fetch_array($result);
	
	$driver_nama=$row["driver_name"];
    $vehicle_name=$row["vehicle_name"];
	$from_loc=$row["from_loc"];
	$to_loc=$row["to_loc"];
	$contact_number=$row["contact_number"];
	*/
	//$date=$_POST['date'];
	//$time=$_POST['time'];		
	



$sql=" insert into book   select *  from  add_cabs where cab_id='$_GET[cab_id]';" ;


mysqli_query($conn,$sql);

           
  if(isset($_POST['book_confirm'])){
  
$date=$_POST['date'];
$time=$_POST['time'];

 $update="update book set date='$date',time='$time' where cab_id='$_GET[cab_id]';";
 mysqli_query($conn,$update);

 $update1="update book set user_name=(  select temp_user_name from temp order by temp_id desc limit 1) where cab_id='$_GET[cab_id]';";
	mysqli_query($conn,$update1);


$delete=" delete from add_cabs where cab_id='$_GET[cab_id]'" ;
mysqli_query($conn,$delete);





  //if(mysqli_query($conn,$update))
  {

	
echo '

	<script>
	alert("cab booked sucessfully");
	window.location.href="searchcabs.php";
	</script>
		';

}}

/*
else
{
echo "error".$sql."<br>".$conn->error;

}
*/



$conn->close();
?>

</body>
</html>
