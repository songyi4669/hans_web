<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>아이디 검색</title>
    <style type="text/css">
        body,input,button{font-size:24px}
        span{font-size:14px;color:#f00}
    </style>
    <script type="text/javascript">
        function id_check(frm){
            var uid = document.getElementById("uid");
            var txt = document.querySelector("span");
            var len = uid.value.length;
            
            if(uid.value == ""){
                txt.textContent = "아이디를 입력하세요.";
                uid.focus();
                return false;
            };
            
            if((len < 2) || (len > 20)){
                txt.textContent = "아이디는 5~20글자만 입력할 수 있습니다.";
                uid.focus();
                return false;
            };
            
            frm.submit();
        };
    </script>
</head>
<body>
    <form name="id_check_form" action="id_search.php" method="post">
        <fieldset>
            <legend>아이디 검색</legend>
            <p>
                <label for="uid">입력</label>
                <input type="text" id="uid" name="uid">
                <button type="button" onclick="id_check(this.form)">검색</button>
                <br>
                아이디는 5~20글자만 입력할 수 있습니다.
                <br><span></span>
            </p>
        </fieldset>
    </form>
</body>
</html>