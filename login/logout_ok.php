<?php

session_start();

mysqli_set_charset($con,"utf8");

$res=session_destroy();

echo "
    <script>
        alert(\"로그아웃 되었습니다.\");
        location.href = \"../index.php\";
    </script>
";

?>
