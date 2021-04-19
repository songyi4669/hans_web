<?php

include "../inc/dbcon.php";


$uname = $_POST["uname"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$postalCode = $_POST["postalCode"];
$addr1 = $_POST["addr1"];
$addr2 = $_POST["addr2"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$birth = $_POST["birth"];
$reg_date = date("Y-m-d");


$sql = "insert into members(
            uname, uid, pwd, mobile, postalCode, addr1, addr2, email, birth, reg_date) 
            values(
            '$uname', '$uid', '$pwd', '$mobile', 
            '$postalCode', '$addr1', '$addr2', '$email','$birth', '$reg_date'    
            );";


$result = mysqli_query($con, $sql);

mysqli_close($con);



echo "
    <script type='text/javascript'>
        location.href = 'welcome.php';
    </script>
";


?>