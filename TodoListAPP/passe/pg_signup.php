<?php


include "db/db_connection.php";

     include 'db/db_signup.php' ;
     

      
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Style/pg_signup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>to do </title>
</head>

<body>

    <a href='index.php'> go home </a>



    <h1>
        welcome to your todolist platform!
    </h1>
    <h3> one step away...</h3>
    <br>

    <fieldset>
        <legend> Sign up </legend>

        <form action="pg_signup.php" method="post">
            <label for="username"> username</label>
            <input type="text" name="username" id="inp_username" placeholder="enter a valid email" required>
            <br>
            <br>
            <label for="password"> password</label>
            <input type="password" name="password" id="inp_password1" required placeholder="enter password">
            <br>
            <br>
            <label for="password2"> repeat password</label>
            <input type="password" name="password2" id="inp_password2" required placeholder="enter password">
            <br>

            <p> I accept Terms and Condition </p>
            <br>
            <input type="checkbox" name="accept" id="accept">
            <br>


            <?php 
      
      ?>
            <br>
            <button name="submit"> register </button>
            <?php 
      db_create();
      ?>






        </form>

    </fieldset>




</body>

</html>