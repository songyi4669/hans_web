<?php
include "../inc/dbcon.php";


$store_name = $_POST["store_name"];
$tell = $_POST["tell"];
$addr = $_POST["addr"];
$hours = $_POST["hours"];
$images = $_POST["images"];
$map = $_POST["map"];

$sql = "insert into store(
        store_name, tell, addr, hours, images, map)values('$store_name', '$tell', '$addr', '$hours', '$images', '$map');";

$result = mysqli_query($con, $sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
        location.href = 'hans_store.php';
    </script>
";


?>