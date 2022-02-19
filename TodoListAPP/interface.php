<!-- todo : modularity for : modal editing and checking and deleting, some last touches on css +
light and black mode for the page +  php should be modular that's all baby u the Man -->



<?php

// include block
session_start();
include "db/db_connection.php";
if (isset($_SESSION["username"]))
    $username = $_SESSION['username'];
else $username = 'amira';
?>
<script>
    if (window.location.href.indexOf('reload') == -1) {
        window.location.replace(window.location.href + '?reload');
    }
</script>

<?php

// just to check the date then store it in a Session
$pageDate=0;
if (isset($_GET['today'])) {
 $pageDate=date('Y-m-d');
 
}
elseif (isset($_GET['tomorrow'])) {
     $pageDate=date("Y-m-d",strtotime("+1 day"));
     $_SESSION["pageDate"]=date("Y-m-d",strtotime("+1 day"));
 
}
elseif (isset($_GET['submitCustomDate'])) {
    $pageDate=$_GET['customDateForThePage'];
    $_SESSION['pageDate']=$_GET['customDateForThePage'];

   
}

elseif (isset($_SESSION['pageDate'])) {

    $pageDate=$_SESSION['pageDate'];
   
}
else{
    $pageDate=date("Y-m-d");
    $_SESSION['pageDate']=date("Y-m-d");
}








// insert data into the db
// ok it should be before retrieving data 

if (isset($_POST['submit_add'])) {
    $task = $_POST['task'];
    $dateForTheNewTask = $_POST["DateForTheNewTask"];
    $_SESSION["pageDate"]=$_POST["DateForTheNewTask"];

    $query = "insert into tasksv2 (username,task,date) ";
    $query .= "values ('$username','$task','$dateForTheNewTask') ";
    $result1 = mysqli_query($connection, $query);
    if (!$result1) {
        die("error in insrtin line 60".mysqli_error($connection));
    };
}


?>



<?php
// retrieve tasks 

$query = "select  task,status from tasksv2 ";
$query .= "where username='$username' and date='$pageDate' order by status ";
$result = mysqli_query($connection, $query);


if (!$result) {

    die("error select " . mysqli_error($connection));
}



?>























<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="./Style/interface.css">
    <link rel='stylesheet' href='./static/Style_depend/bootstrap.min.css'>
    <link rel='stylesheet' href='./static/Style_depend/fontawesone.css'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> MyTodo's</title>
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
                    <a class="nav-link mt-1 ml-5" href="index.php" tabindex="-1"> <i
                            class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post">
                <input autocomplete="off" class="form-control mr-sm-2" type="search" placeholder="Search for a task "
                    aria-label="Search" name="search-task">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                    name="submit-search-task">Search</button>
            </form>
        </div>
    </nav>

    <div class="container">

        <div class="dropdown">

            <button class="btn btn-primary dropdown-toggle bg-white text-dark mt-4" type="button"
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo 'Schedule for  : <br> ' . substr($pageDate, 8, 2) . ' ' . date('M') ?>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <form action="interface.php" method="get">

                    <button class="dropdown-item" name='today' value='today'>Today</button>
                    <button class="dropdown-item" name="tomorrow" value="tomorrow">Tomorrow</button>
                </form>
                <button id="custom" class="dropdown-item" name="custom" data-target="#customModal" data-toggle="modal">
                    custom
                </button>

            </div>
        </div>
        <div class="add-task">
            <svg class="inline-block" data-target=".modal" data-toggle="modal" enable-background="new 0 0 77.945 77.945"
                height="77.945px" id="Layer_1" version="1.1" viewBox="0 0 77.945 77.945" width="45px" height="40px"
                xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M0,38.973C0.001,17.448,17.448,0,38.972,0l0,0c21.523,0,38.973,17.448,38.973,38.974l0,0       c0,21.522-17.447,38.971-38.973,38.973l0,0C17.448,77.943,0.001,60.496,0,38.973L0,38.973z M12.131,12.131       C5.262,19.002,1.013,28.488,1.013,38.973l0,0c0,10.483,4.249,19.971,11.117,26.842l0,0       c6.871,6.869,16.356,11.117,26.842,11.117l0,0c10.484,0,19.971-4.248,26.842-11.117l0,0       c6.871-6.871,11.117-16.357,11.117-26.842l0,0c0-10.483-4.246-19.972-11.117-26.843l0,0C58.941,5.26,49.457,1.014,38.972,1.014       l0,0C28.487,1.014,19.002,5.26,12.131,12.131L12.131,12.131z"
                                        fill="#010101" />
                                </g>
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon
                                    points="38.231,61.238 38.231,16.706 39.431,16.706 39.431,61.238 38.231,61.238     " />
                            </g>
                            <g>
                                <polygon
                                    points="16.847,38.444 16.847,37.244 61.096,37.244 61.096,38.444 16.847,38.444     " />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>

        </div>
    </div>
    <br>

    <!-- this block for the search bar  -->

    <?php
    $counter = 1;
    $tasks_array = array('walo');
    $numberOfRows = mysqli_num_rows($result);
    $numberOfRowsLike=1;
if (isset($_POST['submit-search-task'])) {
    $tasksLike=$_POST['search-task'];
    $queryLike = "select  task,status from tasksv2 ";
$queryLike .= "where username='$username' and date='$pageDate' and task like '%$tasksLike%' order by status ";
$resultLike = mysqli_query($connection, $queryLike);
$numberOfRowsLike = mysqli_num_rows($resultLike);


if (!$resultLike) {

    die("error select " . mysqli_error($connection));
}
if ($numberOfRowsLike==0) {
 echo  "<h2 class='display-3 text-center mt-5'> No Task Found !  </h2> <br> <div class='subContainer text-center h2'><i class= 'far fa-sad-tear'></i> </div>"; 
    
}

while ($row = mysqli_fetch_row($resultLike)) {
    array_push($tasks_array, $row[0]);



    if ($row[1] == "undone") // check if the task is done
    {
        echo " <div class='container $counter'> "
            . " <div class='row py-4 '>"
            . "  <div  id='undone' class='col-9 ml-3  py-3  bg-light'> $row[0]  </div>"
            . " <div class='col-2 ml-2 py-1'>"
            . " <a href='' class='px-2' data-toggle='modal' data-target='#modal-check-$counter' > <i class='fas fa-check text-success'></i></a>"
            . " <a   href='' class='px-2' data-toggle='modal' data-target='#modal-edit-$counter' >  <i class='fas fa-edit text-dark'></i></a>"
            . "<a  href='' class='px-2' data-toggle='modal' data-target='#modal-delete-$counter' ><i class='fas fa-trash text-danger'></i></a>"
            . "</div>"
            . "</div>"

            . "</div>";
    } else {

        echo " <div class='container $counter'> "
            . " <div class='row py-4 '>"
            . "  <div  id='done' class='col-9 ml-3  py-3  '> $row[0]   </div>"
            . " <div class='col-2 ml-2 py-1'>"

            . " <a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-check-$counter'> <i class='fas fa-check '></i></a>"
            . " <a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-edit-$counter' > <i class='fas fa-edit '></i></a>"
            . "<a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-delete-$counter' ><i class='fas fa-trash '></i></a>"

            . "</div>"
            . "</div>"

            . "</div>";
    }

    $counter++;
}



    
}

// if ho ittem found for the task in select request should print the folowwing


    // centering the element just put it inside a container ther apply the text-center
   elseif (!$numberOfRows ) {
        echo "<div class='container text-center mt-5'>";
        echo " <p class='test-dark h2 display-4 text-center' >   you have no Task yet! </p>";
        echo "  <button type='button' id='new-task-empty' class='px-4 btn btn-outline-dark  center-block' data-target='.modal' data-toggle='modal' > New
           Task</button>"
            . "</div>";
    }

   else { while ($row = mysqli_fetch_row($result)) {
        array_push($tasks_array, $row[0]);



        if ($row[1] == "undone") // check if the task is done
        {
            echo " <div class='container $counter'> "
                . " <div class='row py-4 '>"
                . "  <div  id='undone' class='col-9 ml-3  py-3  bg-light'> $row[0]  </div>"
                . " <div class='col-2 ml-2 py-1'>"
                . " <a href='' class='px-2' data-toggle='modal' data-target='#modal-check-$counter' > <i id='reda' class='fas fa-check text-success'></i></a>"
                . " <a   href='' class='px-2' data-toggle='modal' data-target='#modal-edit-$counter' >  <i class='fas fa-edit text-dark'></i></a>"
                . "<a  href='' class='px-2' data-toggle='modal' data-target='#modal-delete-$counter' ><i class='fas fa-trash text-danger'></i></a>"
                . "</div>"
                . "</div>"

                . "</div>";
        } else {

            echo " <div class='container $counter'> "
                . " <div class='row py-4 '>"
                . "  <div  id='done' class='col-9 ml-3  py-3  '> $row[0]   </div>"
                . " <div class='col-2 ml-2 py-1'>"

                . " <a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-check-$counter'> <i class='fas fa-check '></i></a>"
                . " <a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-edit-$counter' > <i class='fas fa-edit '></i></a>"
                . "<a href='' id ='icon' class='px-2' data-toggle='modal' data-target='#modal-delete-$counter' ><i class='fas fa-trash '></i></a>"

                . "</div>"
                . "</div>"

                . "</div>";
        }

        $counter++;
    }
}
    ?>


    <!--  modal for adding a new task  -->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Task </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="adding_task" action="interface.php" method="post">
                    <div class="modal-body">
                        <p class="text-dark"> <i> Enter your task : </i> </p>

                        <input class="border border-info w-75" style="height:60px" type="text" name="task"
                            id="task_input" placeholder="ex : do my homework" autocomplete='off' required>

                        <p class="text-dark mt-3"><i>Scheduled for : </i></p>

                        <input type="date" name="DateForTheNewTask" id="custom" required>

                        </select>

                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" ">Close</button>
                    <button type=" button" class="add btn btn-outline-info" name="submit_add">
                            Add </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- modal to edit custom date -->
    <div class="modal" id="customModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Custom date </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="customDate" action="interface.php" method="get">
                    <div class="modal-body">
                        <p class="text-dark">Enter a custom date </p>
                        <input type="date" name="customDateForThePage" id="custom">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" ">Close</button>
                    <button type=" button" class="add btn btn-outline-info" name="submitCustomDate">
                            Go </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- create modals to change tasks status -->



    <!-- modal to check as done -->
    <?php
    for ($i = 1; $i < $counter; $i++) {
        echo  "   <div class='modal modal-check' id='modal-check-$i' tabindex='-1' role='dialog'>"
            . "  <div class='modal-dialog' role='document'>"
            . "     <div class='modal-content'>"
            . "       <div class='modal-header'>"
            . "          <h5 class='modal-title'>Check as Done </h5>"
            . "       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>"
            . "         <span aria-hidden='true'>&times;</span>"
            . "     </button>"
            . "  </div>"
            . "  <form id='customDate' action='interface.php' method='post'>"
            . "    <div class='modal-body'>"
            . "  <p class='text-dark'> today's Quote : </p>"
            . "  <p><i> ' If you want something Go Get it ' </i> </p>"

            . " </div>"
            . "<div class='modal-footer'>"
            . "       <button type='button' class='btn btn-outline-secondary' data-dismiss='modal' '> Not yet</button>"
            . " <button type=' button' class='add btn btn-outline-success' name='done_task_$i'>"
            . "Get It ! </button>"
            . " </div>"
            . " </form>"
            . "  </div>"
            . " </div>"
            . "</div>";
    }
    ?>

    <?php


    for ($i = 1; $i < $counter; $i++) {
        $taskInThatModal = $tasks_array[$i];
        if (isset($_POST["done_task_$i"])) {

            $query = "update tasksv2 set status='done' where   username='$username' and date='$pageDate'"
                . " and task='$taskInThatModal'";

            $resultDone = mysqli_query($connection, $query);
            if (!$resultDone) {
                die(" this done succesfully " . mysqli_error($connection));  # code...
            }
        }
    }
    ?>









    <!-- modal to edit a task  -->



    <?php
    for ($i = 1; $i < $counter; $i++) {
        echo   "<div class='modal' id='modal-edit-$i' tabindex='-1' role='dialog'>"
            . " <div class='modal-dialog' role='document'>"
            . "  <div class='modal-content'>"
            . "  <div class='modal-header'>"
            . " <h5 class='modal-title text-dark'>Edit task </h5>"
            . " <button type='button' class='close' data-dismiss='modal' aria-label='Close'>"
            . "  <span aria-hidden='true'>&times;</span>"
            . "</button>"
            . "</div>"
            . "<form id='customDate' action='interface.php' method='post'>"
            . "<p class='text-dark ml-3'> <i> Update my task : </i> </p>"

            . "<input class='border border-info w-75 ml-3' style='height:60px' type='text' name='editedTask$i'"
            . "   id='task_input' value='$tasks_array[$i]' placeholder='ex : do my homework' autocomplete='off' required>"

            . "<p class='text-dark mt-3 ml-3'><i> to be Re-Scheduled for : </i></p>"

            . "<input type='date' name='custom2' class='ml-4' id='custom' required>"

            . "</select>"
            . "<div class='modal-footer'>"
            . "   <button type='button' class='btn btn-outline-secondary' data-dismiss='modal' '>Cancel</button>"
            . "<button type=' button' class='add btn btn-outline-info' name='submitedEditedTask$i'>"
            . "       Update </button>"
            . "</div>"
            . "</form>"
            . "</div>"
            . "</div>"
            . "</div>";
    }
    ?>

    <?php

    for ($i = 1; $i < $counter; $i++) {

        $taskInThatModal = $tasks_array[$i];
        if (isset($_POST["submitedEditedTask$i"])) {
          
            $editTask = $_POST["editedTask$i"];
            $datteAfterEdit = $_POST["custom2"];
            $_SESSION['pageDate'] = $datteAfterEdit;

            $query = "update tasksv2 set task='$editTask',date='$datteAfterEdit' where username='$username' and date='$pageDate'"
                . " and task='$taskInThatModal'";

            $resultDone = mysqli_query($connection, $query);
            if (!$resultDone) {
                die(" this edited not succesfully " . mysqli_error($connection));  # code...
            }
        }
    }
    ?>






    <!-- modal to delete a task  -->


    <?php
    for ($i = 1; $i < $counter; $i++) {
        echo   "<div class='modal' id='modal-delete-$i' tabindex='-1' role='dialog'>"
            . "<div class='modal-dialog' role='document'>"
            . "<div class='modal-content'>"
            . "<div class='modal-header'>"
            . "<h5 class='modal-title '> delete a task </h5>"
            . "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"
            . "<span aria-hidden='true'>&times;</span>"
            . "</button>"
            . "</div>"
            . "<form id='customDate' action='interface.php' method='post'>"
            . "<div class='modal-body'>"
            . "<p class='text-danger'> Are you sure you want to delete the task? </p>"
            . "</div>"
            . "<div class='modal-footer'>"
            . "<button type='button' class='btn btn-outline-success' data-dismiss='modal' '>Cancel</button>"
            . "<button type=' button' class='add btn btn-outline-danger' name='delete_task_$i'>"
            . "Yes, Delete </button>"
            . "</div>"
            . "</form>"
            . "</div>"
            . "</div>"
            . "</div>";
    }
    ?>

    <?php

    for ($i = 1; $i < $counter; $i++) {
        $taskInThatModal = $tasks_array[$i];
        if (isset($_POST["delete_task_$i"])) {

            $query = "delete  from tasksv2 where username='$username' and date='$pageDate'"
                . " and task='$taskInThatModal'";

            $resultDelete = mysqli_query($connection, $query);
            if (!$resultDelete) {
                die(" this done succesfully " . mysqli_error($connection));  # 
            }
        }
    }
    ?>





































    <script src="interface.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>

</html>