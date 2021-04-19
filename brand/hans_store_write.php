<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>한스 매장 정보 입력</title>
      <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script>
     function form_check(frm){
         frm.submit();
    };
    </script>


  <style type="text/css">
body,h1,h2,h3,p,div,ul,li,dl,dt,dd,form,fieldset,legend,input,button{margin:0;padding:0}
        ul,li{list-style:none}
        a{text-decoration:none;color:#000}
        input,button{vertical-align:middle}
        address{font-style:normal}
        body{font-family:"나눔고딕","돋움",serif,sans-serif;font-size:13px;line-height:1.5}
        

   
      .store_write_form{width:1200px;margin:100px auto 180px;position:relative}
      legend{width:0;height:0;overflow:hidden}
      fieldset{border:none 0}
      fieldset label{font-size:20px}
      input{width:800px; height:50px;position:absolute;left:200px}
      .store_write_form section{margin-bottom:30px;padding-bottom:60px;border-bottom:1px solid #eeeeee}

    .store_write_button{width:170px;height:40px;background:#522100;color:#eeeeee;font-size:18px;font-weight:bold;border:none 0;position:absolute;left:520px}


        </style>
</head>
<body>

    <form name="store_write_form" action="hans_store_insert.php" method="post" class="store_write_form">
       <fieldset>
       <legend>매장 정보 입력</legend>
       
       <section class="store_name">
        <label for="store_name">매장명</label>
        <input type="text" name="store_name" id="store_name">
        </section>
        
        <section class="tell">
           <label for="tell">전화번호</label>
            <input type="text" name="tell" id="tell">
            
            <section class="addr">
        <label for="addr">주소</label>
        <input type="text" name="addr" id="addr">
        </section>
        
            <section class="hours">
        <label for="hours">영업시간</label>
        <input type="text" name="hours" id="hours">
        </section>
        
            <section class="images">
        <label for="images">매장사진경로</label>
        <input type="text" name="event_title" id="images">
        </section>
        
            <section class="map">
        <label for="map">지도주소</label>
        <input type="text" name="map" id="map">
        </section>
       
          </section>
        
     <p>
         <button type="button" class="store_write_button" onclick="form_check(this.form)">글쓰기</button>
        
     </p>
    

        </fieldset>
    </form>

    
</body>
</html>