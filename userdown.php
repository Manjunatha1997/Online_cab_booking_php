<?php session_start();	


echo'
<style>
*{
font-size:40px;
position:relative;
left:200px;
top:50px;
color:green;
text-transform:capitalize;

}

</style>
';


echo "welcome ".	$_SESSION['user_name'] ;

?>



