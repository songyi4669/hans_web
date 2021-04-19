<?php
include "../inc/dbcon.php";


$event_title = $_POST["event_title"];
$event_write = $_POST["event_write"];
$write_date = date("Y-m-d");

$sql = "insert into event(
        event_title, event_write, write_date)values('$event_title', '$event_write', '$write_date');";

$result = mysqli_query($con, $sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
        location.href = 'event_write.php';
    </script>
";


?>