<?php
include "../inc/dbcon.php";


$notice_title = $_POST["notice_title"];
$notice_write = $_POST["notice_write"];
$write_date = date("Y-m-d");

$sql = "insert into notice(
        notice_title, notice_write, write_date)values('$notice_title', '$notice_write', '$write_date');";

$result = mysqli_query($con, $sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
        location.href = 'notice_write.php';
    </script>
";


?>