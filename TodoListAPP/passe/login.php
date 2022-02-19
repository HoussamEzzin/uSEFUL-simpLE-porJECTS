<?php


  include "./db/db_connection.php";
  include './db/db_login.php' ;
?>












<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel='stylesheet' href="Style\\login.css" />
    <link rel='stylesheet' href='./static/Style_depend/bootstrap.min.css' />
    <link rel='stylesheet' href='./static/Style_depend/fontawesone.css' />
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Document</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <i class="fas fa-tasks col-2 px-2 "><b> My</b> Todo's </i>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> article</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Light mode
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center mt-3">
        <a href="signup.php" id="aSignup"> <button type="button" class="px-3 btn btn-outline-primary "> Sign
                up</button>
        </a>
        <a href="#" id="alogin" class="ml-3 text-dark mr-3">
            login
        </a>

    </div>


    <form action="login.php" method="post">

        <div class="formContainer mt-5 ">
            <p>Enter your email</p>
            <input class="form-control" type="text" name="username" id="username" placeholder="email or username"
                autocomplete="off">
            <p>Enter a password</p>
            <input class="form-control" type="password" name="password" id="password" placeholder="Eneter a password">


        </div>
        <button type=submit name='logMeIn' id="logMeIn" class="btn btn-outline-success">Log me In!</button>
        <?php
           db_login();
        ?>
    </form>















    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'>
    </script>
    <script src='./signup.js'> </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'>
    </script>
</body>

</html>