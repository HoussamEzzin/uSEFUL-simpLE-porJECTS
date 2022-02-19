<?php

// include block
   session_start();
include "db/db_connection.php";
$username=$_SESSION['username'];

?>

<?php

// insert data into the db
// ok it should be before retrieving data 
 

    if ( isset ($_POST['add']) ) {
        $task= $_POST['task'];
        
       $query="insert into tasks (username,task) ";
       $query.="values ('$username','$task') ";
       $result1=mysqli_query($connection,$query);
       if (!$result1) {die ("error  insert".mysqli_error($connection)); };
    } 
    
?>




<?php 
// retrieve tasks 

    $query="select  task,statut from tasks ";
    $query.="where username='$username'";
    $result=mysqli_query($connection,$query);
    
    
    if (!$result){
    
    die ("error selection");
    
    }
    




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Style/pg_user.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <span class="log_out">
        <a href="index.php">log out</a>
    </span>
    <br>
    <h2>welcome in your interface</h2>

    <h2></h2>


    <form action="pg_user.php" method="post">

        <input type="text" name="task" id="task">
        <input type='submit' name="add"> add task </button>

    </form>
    <h5> today's tasks </h5>
    <!-- <span class='heading_task'> Task </span> 
    <span class='heading_statut'> Statut</span>  -->

    <table>
        <tr>
            <th> Task </th>
            <th class="th2"> Statut</th>
        </tr>


        <?php 
    
    while ( $row=mysqli_fetch_row($result)) 
    {
        
         echo "<br> <tr>";
         echo "  <td class='task'> $row[0]</td>  <td>$row[1] </td> ";
    }
    ?>
    </table>


</body>

</html>