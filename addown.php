<?php

session_start();


echo'
<style>
*{
font-size:40px;
position:relative;
left:250px;
top:50px;
color:purple;
text-transform:capitalize;

}

</style>
';





echo "welcome ". $_SESSION['username'];


?>