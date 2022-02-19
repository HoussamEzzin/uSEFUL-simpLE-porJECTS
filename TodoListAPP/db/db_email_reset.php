<?php 
function db_reset(){
global $username;



global $connection;
$query="select  username from users ";
$query.="where username='$username'";
$result=mysqli_query($connection,$query);


if (!$result){

die ("error");

}

 if(mysqli_num_rows($result)==0)
 { return (0);

 }
 else { return(1);}



}



 ?>