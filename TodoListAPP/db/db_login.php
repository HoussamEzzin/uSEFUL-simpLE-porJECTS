<?php
if (isset($_POST['logMeIn'])){
    session_start();

    
    $username=$_POST['username'];
    $user_password=$_POST['password'];

    $_SESSION['username']=$username;

                    }
    
    
function db_login(){
global $username;
global $user_password;


if (isset($_POST['logMeIn'])) {
global $connection;
$query="select  username,password from users ";
$query.="where username='$username'and password='$user_password'";
$result=mysqli_query($connection,$query);


if (!$result){

die ("error");

}

 if(mysqli_num_rows($result)==0)
 {echo "<font color='red' face='monospace'>wrong username/password</font>";}

 else { header("Location: interface.php");} 

}



}



 ?>