<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>한스</title>
      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
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
        body{font-family:"나눔고딕""돋움",serif,sans-serif;font-size:13px;line-height:1.5}
        

   
      .event_write_form{width:1200px;margin:100px auto 180px;position:relative}
      legend{width:0;height:0;overflow:hidden}
      fieldset{border:none 0}
      fieldset label{font-size:20px}
      input{width:800px; height:50px;position:absolute;left:200px}
      .event_write_form section{margin-bottom:30px;padding-bottom:60px;border-bottom:1px solid #eeeeee}
      .event_write{height:190px}
      .event_write input{width:800px;height:200px}

    .event_write_button{width:170px;height:40px;background:#522100;color:#eeeeee;font-size:18px;font-weight:bold;border:none 0;position:absolute;left:520px}


        </style>
</head>
<body>

    <form name="event_write_form" action="event_insert.php" method="post" class="event_write_form">
       <fieldset>
       <legend>공지사항 글쓰기</legend>
       <section class="event_title">
        <label for="event_title">제목</label>
        <input type="text" name="event_title" id="event_title">
        </section>
        
        <section class="event_write">
           <label for="event_write">내용</label>
         
            <input type="text" name="event_write" id="event_write">
       
          </section>
        
     <p>
         <button type="button" class="event_write_button" onclick="form_check(this.form)">글쓰기</button>
        
     </p>
    

        </fieldset>
    </form>

    
</body>
</html>