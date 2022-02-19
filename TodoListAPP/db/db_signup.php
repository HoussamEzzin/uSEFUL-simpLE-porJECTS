<?php 
if (isset($_POST['signMeUp'])){

    
    $username=$_POST['username'];
    $user_password=$_POST['password'];
    $user_password2=$_POST['repeatPassword'];
   
      
    
}
    
function db_create(){
global $username;
global $user_password2;
global $user_password;

//check password match



if (isset($_POST['signMeUp']) && $user_password2==$user_password ) {
global $connection;
$query="insert into users  (username,password) ";
$query.=" values('$username','$user_password')";
$result=mysqli_query($connection,$query);


if (!$result){

die ("error in the");

}
else {
    echo " <font color='green'> Succes ! </font>";
   /* Redirect browser */
header("Location: login.php");
 
/* Make sure that code below does not get executed when we redirect. */
exit;

}





}

else if (isset($_POST['submit']) && $user_password2!==$user_password ) {
  echo " <br>";
 
    echo " <h4> passwords don't match </h4> ";

}
 


}



 ?>