<?php


  include "db/db_connection.php";
  include 'db/db_login.php' ;
?>


<!-- forget password -->










<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Style/pg_login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>to do </title>
</head>

<body>



    <div class="bck_img"></div>

    <a href='index.php'> Home </a>

    <h1>
        welcome to your todolist platform!
    </h1>


    <fieldset>
        <legend> login </legend>

        <form action="pg_login.php" method="post">
            <label for="username"> username</label>
            <input type="text" name="username" id="inp_username" placeholder="enter username" required>
            <br>
            <br>
            <label for="password"> password</label>
            <input type="password" name="password" id="inp_password" required placeholder="enter password">
            <br>
            <br>

            <?php 
      db_login();
      ?>
            <br>
            <div class='container'>
                <button name="submit"> sign in </button>









        </form>
        <form action="pg_forget.php">
            <button name='forget' id="id_forget"> forget </button>
            </div>
        </form>

    </fieldset>




</body>

</html>