<?php
$connection=mysqli_connect('localhost','root','','todolist');
$query="select * from users";
$resuslt=mysqli_query($connection,$query);
if (!$resuslt) {
    die("not successful".$connection->error);
    # code...
}
$number=mysqli_fetch_lengths($resuslt) ;
if ($number!==0) {
echo "<h1>Success </h1>";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>