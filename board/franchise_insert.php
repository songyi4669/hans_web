<?php
include "../inc/dbcon.php";


$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$inquiry = $_POST["inquiry"];
$write_date = date("Y-m-d");

$sql = "insert into franchise(
        name, mobile, email, inquiry, write_date)values('$name', '$mobile', '$email', '$inquiry', '$write_date');";

$result = mysqli_query($con, $sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
        location.href = 'hans_franchise.php';
    </script>
";


?>