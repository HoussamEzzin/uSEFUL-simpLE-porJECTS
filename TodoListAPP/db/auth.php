<?php
include "db_connection.php";
;

if ($_REQUEST['username']!="" && $_POST['repeatPassword']==$_POST['password']) {
    # code...



    $username=$_POST['username'];
    $user_password=$_POST['password'];
    $user_password2=$_POST['repeatPassword'];
   
    if ($username==='') {
        die("nothing here");
        # code...
    }
    
    
//check password match


global $connection;
$query="insert into users  (username,password) ";
$query.=" values('$username','$user_password')";
$result=mysqli_query($connection,$query);


if (!$result){

die ("insertionError");

}
else {
    echo "success";
   /* Redirect browser */
// header("Location: authentication.php");
 
/* Make sure that code below does not get executed when we redirect. */
exit;

}
}



 if (isset($_POST['submit']) && $user_password2!==$user_password ) {
  echo " <br>";
 
    echo " <h4> passwords don't match </h4> ";

}
 






?>