<!Doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
    <title>한스</title>
     <style type="text/css">
    
     body,h1,h2,h3,p,div,ul,li,dl,dt,dd,form,fieldset,legend,input,button{margin:0;padding:0}
        ul,li{list-style:none}
        a{text-decoration:none;color:#000}
        input,button{vertical-align:middle}
        address{font-style:normal}
        body{font-family:"나눔고딕","돋움",serif,sans-serif;font-size:13px;line-height:1.5}
        input[type=checkbox]{width:18px;height:18px}
         option{font-size:14px}

         .header{width:1200px;height:100px;margin:0 auto 50px;position:relative;border-top:1px solid #fff}
        h1{width:419px;height:67px;background:url(../images/logo.jpg) no-repeat;text-indent:-9999px;margin:29px auto 0}
        h1 a{display:block;height:100%}
        
         .main{width:500px;height:770px;margin:0 auto 100px}
         legend{margin:0 auto 50px;font-size:30px;color:#522100;font-weight:bold}
         .wrap{width:550px;height:580px; border:1px solid #cbcbcb;padding:20px}
         fieldset{border:none 0}
         fieldset label{font-size:18px}
         input {height:25px}
        
         .name{margin-bottom:20px}
         .uid{margin-bottom:20px}
         .pwd{margin-bottom:20px}
         .repwd{margin-bottom:20px}
         .mobile{margin-bottom:20px}
         .addr{margin-bottom:20px}
         .addr1{margin-bottom:20px}
         .email{margin-bottom:20px}
         .birth{margin-bottom:20px}
         .apply{margin-bottom:50px}
         
         .addr input{margin:0 5px 5px 0}
         .join_button{width:170px;height:40px;background:#522100;color:#eeeeee;font-size:18px;font-weight:bold;display:block;margin:20px auto 0}
         
         .footer{height:100%;background:#a0a0a0;color:#313131;font-size:12px}
        .footer_content{box-sizing:border-box;padding: 35px 40px 35px 40px;margin:auto;position:relative}
        .footer h2{width:0;height:0;overflow:hidden}
        
        
        
        .site_map{width:103px;height:23px;background:url(../images/sitemap.jpg) no-repeat;text-indent:-9999px}
        .site_map a{display:block}
        
        
        .footer_cont_bottom1{overflow:hidden}
        .footer_cont_bottom1_txt1{float:left}
        .footer_cont_bottom1_txt1:after{content:" / ";margin:0 5px 0 3px}
        
        .footer_cont_bottom2{overflow:hidden}
        .footer_cont_bottom2_txt1{float:left}
        .footer_cont_bottom2_txt1:after{content:" / ";margin:0 6px 0 3px}
        .footer_cont_bottom2_txt2{float:left}
        .footer_cont_bottom2_txt2:after{content:" / ";margin:0 6px 0 3px}
       
    </style>
    <script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
    <script type="text/javascript">
    function form_check(frm){
        var uname=document.getElementById("uname");
        var uid=document.getElementById("uid");
        var pwd=document.getElementById("pwd");
        var pwd_len=pwd.value.length;
        var repwd=document.getElementById("repwd");
        var mobile=document.getElementById("mobile");
        var apply = document.getElementById("apply");
        var email_dns = document.getElementById("email_dns");
        
        if(uname.value==""){
            alert("이름을 입력하세요.");
            uname.focus();
            return false;
        };
        
        if(uid.value==""){
            alert("아이디를 입력하세요.");
            uid.focus();
            return false;
        };
        
        if(pwd.value==""){
            alert("비밀번호를 입력하세요.");
             pwd.focus();
            return false;
        };
        
        if((pwd_len < 8)||(pwd_len > 16)){
            alert("비밀번호는 8~16자 영문, 숫자를 사용하세요.")
            pwd.focus();
            return false;
        }
        
        if(repwd.value!=pwd.value){
            alert("비밀번호가 일치하지 않습니다.");
            repwd.focus();
            return false;
        };
        
        if(mobile.value==""){
            alert("핸드폰 번호를 입력하세요.")
            mobile.focus();
            return false;
        };
        
        var reg=/^[0-9]+$/g;
        if(reg.test(mobile.value)==false){
            alert("핸드폰 번호는 숫자만 입력할 수 있습니다.");
            mobile.focus();
            return false;
        };
        
        if(email_dns.value==""){
            alert("이메일을 입력하세요.");
             email_dns.focus();
            return false;
        };
        
        if(!apply.checked){
            alert("약관 동의가 필요합니다.")
            apply.focus();
            return false;
        }
     frm.submit();   
    };
        
        function id_check(){
            window.open("id_check.php","idCheck","width=400,height=200,left=0,top=0");
        }
        
     function change_email(){
         var email_dns=document.getElementById("email_dns");
         var email_sel=document.getElementById("email_sel");
         
         var idx = email_sel.options.selectedIndex;
         
         if(email_sel.options[idx].value==""){
             email_dns.focus();
         }
         email_dns.value = email_sel.options[idx].value;
     } ;  
        
function openZipSearch() {
        new daum.Postcode({
            oncomplete: function(data) {

                var addr = ''; 
                var extraAddr = ''; 


                if (data.userSelectedType === 'R') { 
                    addr = data.roadAddress;
                } else {
                    addr = data.jibunAddress;
                }

                if(data.userSelectedType === 'R'){

                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }

                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
 
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }

                    document.getElementById("extraaddr").value = extraAddr;
                
                } else {
                    document.getElementById("extraaddr").value = '';
                }


                document.getElementById('postalCode').value = data.zonecode;
                document.getElementById("addr1").value = addr;

                document.getElementById("addr2").focus();
            }
        }).open();
    };
    </script>
   
    
</head>



<body>
   
   <header id="header" class="header">
    <h1><a href="../index.php">한스</a></h1>
    </header><!--header-->
    
    
    <main class="main">
    <form name="join_form" action="insert.php" method="post" class="join_form">
       <fieldset>
       <legend>회원가입</legend>
       <div class="wrap">
       <section class="name">
        <label for="uname">이름</label>
        <input type="text" name="uname" id="uname">
        </section>
        
        
         <section class="uid">
       <label for="uid">아이디</label>
        <input type="text" name="uid" id="uid">
       <button type="button" onclick="id_check()">중복확인</button>
       <br>5~20자의 영문 소문자, 숫자만 사용 가능합니다.
        </section>
       
        <section class="pwd">
        <label for="pwd">비밀번호</label>
        <input type="password" name="pwd" id="pwd"> 
        <br>8~16자 영문, 숫자를 사용하세요.
        </section>
        
        <section class="repwd">
        <label for="repwd">비밀번호 확인</label>
        <input type="password" name="repwd" id="repwd">
         </section>
    
    
         <section class="mobile">
          <label for="mobile">핸드폰 번호</label>
           <input type="text" name="mobile" id="mobile">
           "-"없이 숫자만 입력
       </section>
        
        
             <section class="addr">
            <input type="text" name="postalCode" id="postalCode" size="15" placeholder="우편번호">
            <button type="button" onclick="openZipSearch()">우편번호 검색</button> <br />
            <input type="text" name="addr1" id="addr1" size="50" placeholder="주소"><br />
            <input type="text" name="addr2" id="addr2" size="40" placeholder="상세주소">
            <input type="text" name="extraaddr" id="extraaddr" size="30" placeholder="참고항목">
            </section>
        
         <section class="email">
           <label for="email_id">이메일</label>
           <input type="text" name="email_id" id="email_id">@
           <input type="text" name="email_dns" id="email_dns">
           <select name="email_sel" id="email_sel" onchange="change_email()">
               <option value="">직접 입력</option>
               <option value="naver.com">네이버</option>
               <option value="hanmail.net">다음</option>
               <option value="gmail.com">구글</option>
           </select>
        </section>
        
        <section class="birth">
           <label for="birth">생년월일</label>
            <input type="text" name="birth" id="birth">
            ex) 20201015
          </section>
          
          <section class="apply">
          <input type="checkbox" name="apply" id="apply" value="y">
          <label for="apply">약관 동의</label>
          </section>
          </div>
     <p>
         <button type="button" class="join_button" onclick="form_check(this.form)">가입하기</button>
        
     </p>
    

        </fieldset>
    </form>
    </main>
    
   <footer class="footer">
      <div class="footer_content">
      <h2>사이트 이용안내</h2>
      
      <div class="footer_cont_bottom1">
    <address class="footer_cont_bottom1_txt1">경기 안양시 동안구 시민대로 401 대룡테크노타운 15차 B111호 (관양2동 224-5) (주)한스제과</address>
      <p class="footer_cont_bottom1_txt2">사업자등록번호 214-88-63183</p>
      </div>
      
      <div class="footer_cont_bottom2">
      <p class="footer_cont_bottom2_txt1">통신판매신고 제2013-경기안양-0039호</p>
      <p class="footer_cont_bottom2_txt2">대표이사 안영식, 한성훈, 안주태</p>
      <p>TEL 031-463-3505</p>
       </div>
      <p>Copyright 2011 ⓒ HANS CAKE. ALL Right Reserved</p>
     <p class="site_map"><a href="#">사이트맵</a></p>
      </div>
    </footer><!--footer-->                     
</body>
</html>




