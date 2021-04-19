<?php
 session_start();
 
 $s_uid = isset($_SESSION["s_uid"])?
 $_SESSION["s_uid"]:"";
 $s_uname = isset($_SESSION["s_uname"])?
 $_SESSION["s_uname"]:"";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>한스</title>
     <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
        
    $(".gnb_brand").mouseenter(function(){
             
        $(".gnb_brand_2depth").stop().slideDown();
          });
      
    $(".gnb_brand").mouseleave(function(){
        $(".gnb_brand_2depth").stop().slideUp();
    });
    
    $(".gnb_menu").mouseenter(function(){
             
        $(".gnb_menu_2depth").stop().slideDown();
          });
      
    $(".gnb_menu").mouseleave(function(){
        $(".gnb_menu_2depth").stop().slideUp();
    });

    
    $(".gnb_news_event").mouseenter(function(){
             
        $(".gnb_news_event_2depth").stop().slideDown();
          });
      
    $(".gnb_news_event").mouseleave(function(){
        $(".gnb_news_event_2depth").stop().slideUp();
    });
    
  });      
    </script>
     <?php if($s_uid){ ?>
    <script>
        function logout_check(){
            var rt = confirm("정말 로그아웃하시겠습니까?");
            if(rt){  // if(rt == true){
                location.href = "../login/logout_ok.php";
            };
        };
 </script>
<?php } ?>
    
     <style type="text/css">
         body,h1,h2,h3,p,div,ul,li,dl,dt,dd,form,fieldset,legend,input,button{margin:0;padding:0}
        ul,li{list-style:none}
        a{text-decoration:none;color:#000}
        input,button{vertical-align:middle}
        address{font-style:normal}
        body{font-family:"나눔고딕","돋움",serif,sans-serif;font-size:13px;line-height:1.5}
        
         .skip_menu{position:absolute}
        .skip_menu a{position:absolute;top:-60px;left:0;width:138px;border:1px solid #4ec53d;background:#333;text-align:center}
        .skip_menu a:active, .skip_menu a:focus{top:0;z-index:1000;text-decoration:none}
        .skip_menu span{display:inline-block;padding:2px 6px 0 0;color:#fff;letter-spacing:-1px;font-size:13px;line-height:26px}
        
        
         .skip_menu{position:absolute}
        .skip_menu a{position:absolute;top:-60px;left:0;width:138px;border:1px solid #4ec53d;background:#333;text-align:center}
        .skip_menu a:active, .skip_menu a:focus{top:0;z-index:1000;text-decoration:none}
        .skip_menu span{display:inline-block;padding:2px 6px 0 0;color:#fff;letter-spacing:-1px;font-size:13px;line-height:26px}
    
         .gnb ul ul{display:none}
        
        
         .header{width:1200px;height:195px;margin:auto;position:relative;border-top:1px solid #fff}
        h1{width:419px;height:67px;background:url(../images/logo.jpg) no-repeat;text-indent:-9999px;margin:29px auto 29px}
        h1 a{display:block;height:100%}
        
        .gnb{height:70px; background:#fffdee;position:relative}
        .gnb h2{width:0;height:0;margin:-1px;overflow:hidden}
        .gnb>ul{width:1200px; margin:auto}
        .gnb>ul>li>a{display:block;height:100%}
        .gnb ul li ul li{text-indent:0}
        .gnb ul li ul li a{color:#874f2a;font-weight:bold;font-size:15px}
         
        .gnb_brand{width:120px;height:70px; background:url(../images/gnb_brand.jpg) no-repeat;text-indent:-9999px;float:left;margin:0 64px 0 270px}
        .gnb_brand ul{background:#fffdee;padding:5px;width:140px;position:absolute;left:260px;top:70px;text-align:center}
        .gnb_brand ul li{line-height:30px}
        
        .gnb_menu{width:101px;height:70px; background:url(../images/gnb_menu.jpg) no-repeat;text-indent:-9999px;float:left;margin-right:57px;}
        .gnb_menu ul{background:#fffdee;padding:5px;width:140px;position:absolute;left:435px;top:70px;text-align:center}
        .gnb_menu ul li{line-height:30px}
        
        .gnb_news_event{width:146px;height:70px;background:url(../images/gnb_news_event.jpg) no-repeat;text-indent:-9999px;float:left;margin-right:57px}
        .gnb_news_event ul{background:#fffdee;padding:5px;width:140px;text-align:center}
        .gnb_news_event ul li{line-height:30px}
         
        .gnb_franchise{width:94px;height:70px;background:url(../images/gnb_franchise.jpg) no-repeat;text-indent:-9999px;float:left}
        
        .gnb_brand_2depth a:hover{font-weight:bold;color:#522100}
        .gnb_menu_2depth a:hover{font-weight:bold;color:#522100}
        .gnb_news_event_2depth a:hover{font-weight:bold;color:#522100}
        
        
        
        
        .top_menu{width:1200px;margin:auto;position:relative}
        .user_menu h2{position:absolute;left:-9999px;top:-9999px}
        .user_menu ul{position:absolute;right:0;top:-180px}
        .user_menu ul a{color:#666666}
        .user_menu ul li{float:left;margin-right:17px}
        
        .family_site h2{position:absolute;left:-9999px;top:-9999px}
        .family_site ul{position:absolute;left:0;top:-180px}
        .family_site ul li{float:left;margin-right:16px}
        .delivery_site{width:31px;height:30px;background:url(../images/delivery_page_icon.jpg) no-repeat;text-indent:-9999px;margin-left:15px}
        .delivery_site a{display:block;height:100%}
        .instargram_site{width:31px;height:30px;background:url(../images/instagram_icon.jpg) no-repeat;text-indent:-9999px}
        .instargram_site a{display:block;height:100%}
        
        
        
        .menu_category{width:1200px;height:370px;margin:0 auto 58px}
        .menu_category h2{width:1200px;height:220px;background:url(../images/sub_main.jpg) no-repeat;text-indent:-9999px;}
        .menu_category ul li{float:left;margin-right:35px;font-size:18px}
        .menu_category ul{width:1200px;height:150px;box-sizing:border-box;padding:60px 300px 60px 300px}
        
        .menu_category_rollpound{font-weight:bold;text-decoration:underline}
        
        
        .rollpound_menu{width:1200px;height:932px;margin:0 auto 95px;box-sizing:border-box;padding:0 107px 0 107px}
        .rollpound_menu h2{width:0;height:0;overflow:hidden}
        
        .rollpound_menu1{width:300px;height:432px;border:1px solid #522100;float:left;margin:0 43px 64px 0;box-sizing:border-box;padding:290px 20px 20px 20px;position:relative;text-align:center}
        
         .rollpound_menu1_image_wrap{width:290px;height:250px;position:absolute;left:0;top:0;overflow: hidden}
        .rollpound_menu1_image{width:290px;height:250px;background:url(../images/menu_rollpound1.jpg) no-repeat;position:absolute;left:0;top:0;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .rollpound_menu1_image:hover {transform:scale(1.1, 1.1)}
        .rollpound_menu1:hover {border:3px solid #522100}
        
        .rollpound_menu1 dt{font-size:18px;font-weight:bold;margin-bottom:13px}
        .rollpound_menu1 dt a{position:absolute;left:0;top:0;width:100%;height:100%;box-sizing:border-box;padding:260px 20px 20px 20px}
        .rollpound_menu1_txt{color:#959595;margin-bottom:20px}
        .rollpound_menu1_price{font-weight:bold;position:absolute;left:124px; top:380px}
         
        .rollpound_menu2{width:300px;height:432px;border:1px solid #522100;float:left;margin:0 43px 64px 0;box-sizing:border-box;padding:290px 20px 0 20px;position:relative;text-align:center}
        
        .rollpound_menu2_image_wrap{width:290px;height:250px;position:absolute;left:0;top:0;overflow: hidden}
        .rollpound_menu2_image{width:290px;height:250px;background:url(../images/menu_rollpound2.jpg) no-repeat;position:absolute;left:0;top:0;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .rollpound_menu2_image:hover {transform:scale(1.1, 1.1)}
        .rollpound_menu2:hover {border:3px solid #522100}
        
        .rollpound_menu2 dt{font-size:18px;font-weight:bold;margin-bottom:13px}
        .rollpound_menu2 dt a{position:absolute;left:0;top:0;width:100%;height:100%;box-sizing:border-box;padding:260px 20px 0 20px}
        .rollpound_menu2_txt{color:#959595;margin-bottom:20px}
        .rollpound_menu2_price{font-weight:bold;position:absolute;left:124px; top:380px}
        
        .rollpound_menu3{width:300px;height:432px;border:1px solid #522100;float:left;margin-bottom:64px;box-sizing:border-box;padding:290px 20px 0 20px;position:relative;text-align:center}
        
        .rollpound_menu3_image_wrap{width:290px;height:250px;position:absolute;left:0;top:0;overflow: hidden}
        .rollpound_menu3_image{width:290px;height:250px;background:url(../images/menu_rollpound3.jpg) no-repeat;position:absolute;left:0;top:0;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .rollpound_menu3_image:hover {transform:scale(1.1, 1.1)}
        .rollpound_menu3:hover {border:3px solid #522100}
        
        .rollpound_menu3 dt{font-size:18px;font-weight:bold;margin-bottom:13px}
        .rollpound_menu3 dt a{position:absolute;left:0;top:0;width:100%;height:100%;box-sizing:border-box;padding:260px 20px 0 20px}
        .rollpound_menu3_txt{color:#959595;margin-bottom:20px}
        .rollpound_menu3_price{font-weight:bold;position:absolute;left:124px; top:380px}
        
         .rollpound_menu4{width:300px;height:432px;border:1px solid #522100;float:left;margin:0 43px 64px 0;box-sizing:border-box;padding:290px 20px 20px 20px;position:relative;text-align:center}
        
        .rollpound_menu4_image_wrap{width:290px;height:250px;position:absolute;left:0;top:0;overflow: hidden}
        .rollpound_menu4_image{width:290px;height:250px;background:url(../images/menu_rollpound4.jpg) no-repeat;position:absolute;left:0;top:0;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .rollpound_menu4_image:hover {transform:scale(1.1, 1.1)}
        .rollpound_menu4:hover {border:3px solid #522100}
        
        .rollpound_menu4 dt{font-size:18px;font-weight:bold;margin-bottom:13px}
        .rollpound_menu4 dt a{position:absolute;left:0;top:0;width:100%;height:100%;box-sizing:border-box;padding:260px 20px 20px 20px}
        .rollpound_menu4_txt{color:#959595;margin-bottom:20px}
        .rollpound_menu4_price{font-weight:bold;position:absolute;left:124px; top:380px}
        
        .rollpound_menu5{width:300px;height:432px;border:1px solid #522100;float:left;margin:0 43px 64px 0;box-sizing:border-box;padding:290px 20px 20px 20px;position:relative;text-align:center}
        
        .rollpound_menu5_image_wrap{width:290px;height:250px;position:absolute;left:0;top:0;overflow: hidden}
        .rollpound_menu5_image{width:290px;height:250px;background:url(../images/menu_rollpound5.jpg) no-repeat;position:absolute;left:0;top:0;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .rollpound_menu5_image:hover {transform:scale(1.1, 1.1)}
        .rollpound_menu5:hover {border:3px solid #522100}
        
        .rollpound_menu5 dt{font-size:18px;font-weight:bold;margin-bottom:13px}
        .rollpound_menu5 dt a{position:absolute;left:0;top:0;width:100%;height:100%;box-sizing:border-box;padding:260px 20px 20px 20px}
        .rollpound_menu5_txt{color:#959595;margin-bottom:20px}
        .rollpound_menu5_price{font-weight:bold;position:absolute;left:124px; top:380px}
    
        
        
        .next_page{width:1200px;height:32px;margin:0 auto 88px;position:relative}
        .next_page p{width:0;height:0;overflow:hidden}
    
        .next_page1{width:32px;height:32px;background:url(../images/page_button1.jpg) no-repeat;text-indent:-9999px;display:inline-block;position:absolute;left:580px}
        
        
        
        
        
        
         .footer{height:125px;background:#a0a0a0;color:#313131;font-size:12px}
        .footer_content{width:1200px;height:125px;box-sizing:border-box;padding: 35px 40px 35px 40px;margin:auto;position:relative}
        .footer h2{width:0;height:0;overflow:hidden}
        
        
        
        .site_map{width:103px;height:23px;background:url(../images/sitemap.jpg) no-repeat;text-indent:-9999px;position:absolute;left:840px}
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
</head>
<body>
      <div class="skip_menu">
      <a href="hans_cake.php"><span>메뉴 소개 바로가기</span></a>
   <a href="../board/hans_notice.php"><span>뉴스, 이벤트 바로가기</span></a>
   <a href="../brand/hans_store.php"><span>매창 찾기 바로가기</span></a>
  </div>
   
   <header id="header" class="header">
    <h1><a href="../index.php">한스</a></h1>
    
   <nav class="gnb">
    <h2>주요메뉴</h2>
    <ul>
     <li class="gnb_brand"><a href="#">브랜드소개</a>
    <ul class="gnb_brand_2depth">
      <li><a href="../brand/hans_brandstory.php">브랜드 스토리</a></li>
      <li><a href="../brand/hans_store.php">매장찾기</a></li>
    </ul>
    </li>
    
    <li class="gnb_menu"><a href="#">메뉴소개</a>
     <ul class="gnb_menu_2depth">
      <li><a href="hans_cake.php">케익</a></li>
      <li><a href="hans_tarte.php">타르트</a></li>
      <li><a href="hans_rollpound.php">롤/파운드</a></li>
      <li><a href="#">음료</a></li>
      <li><a href="hans_giftset.php">선물세트</a></li>
      <li><a href="#">스페셜주문</a></li>
    </ul>
    </li>
    
     <li class="gnb_news_event"><a href="#">뉴스, 이벤트</a>
     <ul class="gnb_news_event_2depth">
      <li><a href="../board/hans_notice.php">뉴스</a></li>
      <li><a href="../board/hans_event.php">이벤트</a></li>
    </ul>
    </li>
    
    <li class="gnb_franchise"><a href="../board/hans_franchise.php">창업문의</a>
    </li>
    </ul>
    </nav><!--gnb-->
    
   <div class="top_menu">
  <div class="user_menu">
   <h2>사용자 메뉴</h2>
    <?php
        if($s_uid){
            ?>
     <ul>
     <li><a href="#none" onclick="logout_check()">로그아웃</a></li>
     <li><a href="#">마이페이지</a></li>
     <li><a href="#">고객센터</a></li>
      </ul>
    <?php
        } else{
            ?>
    <ul>
     <li><a href="../login/login.php">로그인</a></li>
     <li><a href="../members/hans_join.php">회원가입</a></li>
     </ul>
     <?php } ?>
     </div>
     
     <div class="family_site">
    <h2>관련 사이트</h2>
    <ul>
     <li class="delivery_site"><a href="#">한스배송 사이트 바로가기</a></li>
     <li class="instargram_site"><a href="#">한스 인스타그램 바로가기</a></li>
     </ul>
      </div><!--family_site-->
       </div><!--top_menu-->
    </header><!--header-->
    
    <main id="content">
    <section class="menu_category">
    <h2>메뉴 카테고리</h2>
    <ul>
     <li class="menu_category_cake"><a href="hans_cake.php">케익</a></li>
     <li class="menu_category_tarte"><a href="hans_tarte.php">타르트</a></li>
     <li class="menu_category_rollpound"><a href="hans_rollpound.php">롤/파운드</a></li>
     <li class="menu_category_drink"><a href="#">음료</a></li>
     <li class="menu_category_giftset"><a href="hans_giftset.php">선물세트</a></li>
     <li class="menu_category_specialorder"><a href="#">스페셜 주문</a></li>
     </ul>
    </section><!--menu_category-->
     
     <section class="rollpound_menu">
    <h2>롤,파운드 메뉴</h2>
     
     <dl class="rollpound_menu1">
      <dt><a href="#"><div class="rollpound_menu1_image_wrap">
     <div class="rollpound_menu1_image"></div></div>오렌지 파운드</a></dt>
        <dd class="rollpound_menu1_txt">향긋한 오렌지 맛의 파운드</dd>
        
        <dd class="rollpound_menu1_price">23,000원</dd>
      </dl>
    
     <dl class="rollpound_menu2">    
      <dt><a href="#"><div class="rollpound_menu2_image_wrap">
     <div class="rollpound_menu2_image"></div></div>레몬 파운드</a></dt>
       <dd class="rollpound_menu2_txt">싱그러운 레몬 맛의 파운드</dd>
       
         <dd class="rollpound_menu2_price">23,000원</dd>
      </dl> 
     
     <dl class="rollpound_menu3">
     <dt><a href="#"><div class="rollpound_menu3_image_wrap">
     <div class="rollpound_menu3_image"></div></div>치즈 롤 케이크</a></dt>
      <dd  class="rollpound_menu3_txt">부드러운 화이트 시트와 산딸기 잼,<br />
      달콤한 치즈 크림이<br />
      한층 조화로운 롤 케이크</dd>
       
       <dd class="rollpound_menu3_price">24,000원</dd>
      </dl> 
       
    <dl class="rollpound_menu4">   
      <dt><a href="#"><div class="rollpound_menu4_image_wrap">
     <div class="rollpound_menu4_image"></div></div>초코 롤 케이크</a></dt>
       <dd class="rollpound_menu4_txt">촉촉한 초코 시트와 크림이 조화로운<br />
       롤 케이크</dd>
       
     <dd class="rollpound_menu4_price">24,000원</dd>
    </dl> 
       
      <dl class="rollpound_menu5">    
       <dt><a href="#"><div class="rollpound_menu5_image_wrap">
     <div class="rollpound_menu5_image"></div></div>녹차 롤 케이크</a></dt>
        <dd class="rollpound_menu5_txt">진한 녹차 맛과 팥의 조화로운<br />
        부드러운 맛을 내는 한스 롤 케이크</dd>
        
        <dd class="rollpound_menu5_price">24,000원</dd>
       </dl> 
        
    </section><!--cake_menu-->
    
    <div class="next_page">
    <p>다음페이지</p>
     <a href="#" class="next_page1">1</a>
    </div><!--next_page-->
    </main><!--content-->
     
     <footer class="footer">
      <div class="footer_content">
      <h2>사이트 이용안내</h2>
      
      <p class="site_map"><a href="#">사이트맵</a></p>
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
      </div>
    </footer><!--footer-->
    
    
</body>
</html>
