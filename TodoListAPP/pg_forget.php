<?php 
if(isset($_POST['submit_mail'])) {
$username=$_POST['email'];
include "db_connection.php";
include "db_email_reset.php";

if(db_reset()) {

    
        $to=$_POST['email'];
        $subject='password resseting';
        $message=' <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <style>
                h1 {
                     color: blueviolet;
                     font-family: monospace;
                     text-align: center;
                }
                a{border-radius: 6px;
                    font-size: larger;
                   background-color: rgb(174, 176, 177);
                   position: relative;
                   border: rgb(229, 140, 158) solid 2px;
                   
                }
                   body {
        
                    background-color: rgb(241, 243, 222);
        
                   } </style>
                        
                    
        
            <h1> Email to reset password</h1>
            <p>
                hello , this email is to reset your password. <br>
                 please click on the link to do so.
        
            </p>
            <a href="todolist.rf.gd"> Reset </a>
            
            
        </body>
        </html>';
     $header='From: redaamir972@gmail.com' . "\r\n" .
     'Reply-To: redaamir972@gmail.com' . "\r\n" .
     "Content-Type: text/html; charset=ISO-8859-1\r\n".
     'X-Mailer: PHP/' . phpversion();
    
     mail($to,$subject,$message,$header);
    

}
else {

    echo "<br> ";
    echo "<script> alert('this email is not registred in our database') </script>";
}


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Style/pg_forget.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="bck_img"></div>
    <h3> enter your email</h3>
    <form action="pg_forget.php" method="POST">
        <input type="text" name="email" id="id_email">
        <button name="submit_mail"> send mail </button>

    </form>







</body>

</html>