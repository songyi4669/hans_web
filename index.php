<?php
 session_start();
 
 $s_uid = isset($_SESSION["s_uid"])?
 $_SESSION["s_uid"]:"";
 $s_uname = isset($_SESSION["s_uname"])?
 $_SESSION["s_uname"]:"";
?>
<!Doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
    <title>한스</title>
     <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script>
        
      $(document).ready(function(){
        $('.main_slider_image').bxSlider({
            mode:'horizontal',
            auto:true,
            touchEnabled : (navigator.maxTouchPoints > 0)
            
        });
        $('.news_slider_image').bxSlider({
            mode:'horizontal',
            auto:true,
            touchEnabled : (navigator.maxTouchPoints > 0)
        });
        $('.event_slider_image').bxSlider({
            mode:'horizontal',
            auto:true,
            touchEnabled : (navigator.maxTouchPoints > 0)
        });
          
      });
        
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
                location.href = "login/logout_ok.php";
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
        .full_menu{display:none}
        .close_full_menu{display:none}
        .header{width:1200px;height:195px;margin:auto;position:relative;border-top:1px solid #fff; z-index: 1000}
        h1{width:419px;height:67px;background:url(images/logo.jpg) no-repeat;text-indent:-9999px;margin:29px auto 29px}
        h1 a{display:block;height:100%}
        
       .gnb{height:70px; background:#fffdee;position:relative}
        .gnb h2{width:0;height:0;margin:-1px;overflow:hidden}
        .gnb>ul{width:1200px; margin:auto}
        .gnb>ul>li>a{display:block;height:100%}
        .gnb ul li ul li{text-indent:0}
        .gnb ul li ul li a{color:#874f2a;font-weight:bold;font-size:15px}
         
        .gnb_brand{width:120px;height:70px; background:url(images/gnb_brand.jpg) no-repeat;text-indent:-9999px;float:left;margin:0 64px 0 270px}
        .gnb_brand ul{background:#fffdee;padding:5px;width:140px;position:absolute;left:260px;top:70px;text-align:center}
        .gnb_brand ul li{line-height:30px}
        
        .gnb_menu{width:101px;height:70px; background:url(images/gnb_menu.jpg) no-repeat;text-indent:-9999px;float:left;margin-right:57px;}
        .gnb_menu ul{background:#fffdee;padding:5px;width:140px;position:absolute;left:435px;top:70px;text-align:center}
        .gnb_menu ul li{line-height:30px}
        
        .gnb_news_event{width:146px;height:70px;background:url(images/gnb_news_event.jpg) no-repeat;text-indent:-9999px;float:left;margin-right:57px}
        .gnb_news_event ul{background:#fffdee;padding:5px;width:140px;text-align:center}
        .gnb_news_event ul li{line-height:30px}
         
         
        .gnb_franchise{width:94px;height:70px;background:url(images/gnb_franchise.jpg) no-repeat;text-indent:-9999px;float:left}
        
        .gnb_brand_2depth a:hover{font-weight:bold;color:#522100}
        .gnb_menu_2depth a:hover{font-weight:bold;color:#522100}
        .gnb_news_event_2depth a:hover{font-weight:bold;color:#522100}
        
        
        
        .top_menu{width:1200px;margin:auto;position:relative}
        .user_menu>h2{position:absolute;left:-9999px;top:-9999px}
        .user_menu ul{position:absolute;right:1px;top:-115px}
        .user_menu ul a{color:#666666}
        .user_menu ul li{float:left;margin-right:17px}
        
        .family_site h2{position:absolute;left:-9999px;top:-9999px}
        .family_site ul{position:absolute;left:0;top:-115px}
        .family_site ul li{float:left;margin-right:16px}
        .delivery_site{width:31px;height:30px;background:url(images/delivery_page_icon.jpg) no-repeat;text-indent:-9999px;margin-left:15px}
        .delivery_site a{display:block;height:100%}
        .instargram_site{width:31px;height:30px;background:url(images/instagram_icon.jpg) no-repeat;text-indent:-9999px}
        .instargram_site a{display:block;height:100%}
        
        .main_image{width:1200px;height:407px;margin:0 auto 100px;position:relative}
        .main_image h2{width:0;height:0;overflow:hidden}
        .main_image li{width:1200px;height:407px;text-indent:-9999px}
        .main_image1 a{display: block; height: 100%}
        .main_image2 a{display: block; height: 100%}
        .main_image3 a{display: block; height: 100%}
        
        
        
        
        
        .menu{width:1200px;height:966px;margin:0 auto 100px}
        .menu h2{font-family:"Adobe 명조 std";font-size:36px;color:#522100;text-align:center;margin-bottom:50px}
        
        
          .menu ul img{width:350px;height:349px;display:block;transform:scale(1, 1); transform:all 1s;transition: all 0.3s ease-in-out;}
        .menu ul img:hover{transform:scale(1.1, 1.1)}
        
        .menu ul a{display:inline-block;position:relative;width:100%}
        
        .menu_cake{float:left;margin:0 34px 88px 41px;position:relative}
       .cake_img_wrap{overflow: hidden}
        .menu_cake span{width:190px;height:26px;background:url(images/menu_cake_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
        
       
        .menu_tarte{float:left;margin:0 34px 88px 0px;position:relative}
       .tarte_img_wrap{overflow: hidden}
        .menu_tarte span{width:195px;height:26px;background:url(images/menu_tarte_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
       
        
        .menu_rollpound{float:left;margin:0 0 88px 0;position:relative}
       .rollpound_img_wrap{overflow: hidden}
        .menu_rollpound span{width:304px;height:26px;background:url(images/menu_rollpound_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
        
        
        .menu_drink{float:left;margin:0 34px 88px 41px;position:relative}
       .drink_img_wrap{overflow: hidden}
        .menu_drink span{width:211px;height:26px;background:url(images/menu_dink_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
        
        
        .menu_giftset{float:left;margin:0 34px 88px 0px;position:relative}
       .giftset_img_wrap{overflow: hidden}
        .menu_giftset span{width:288px;height:26px;background:url(images/menu_giftset_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
        
        .menu_specialorder{float:left;margin:0 0 88px 0;position:relative}
       .specialorder_img_wrap{overflow: hidden}
        .menu_specialorder span{width:349px;height:26px;background:url(images/menu_specialorder_txt.jpg) no-repeat;text-indent:-9999px;display:block;margin-top:20px;background-size:contain}
        
        
        
        
        
        .news_event{width:1200px;height:445px;margin:0 auto 100px}
        .news_event h2{font-family:"Adobe 명조 std";font-size:36px;color:#522100;text-align:center;margin-bottom:50px}
        
        .news{width:595px;height:371px;position:relative;margin:0 10px 100px 0;float:left}
       
        .news dt{width:0;height:0;overflow:hidden} 
        .news dd{width:595px;height:371px;display:block}
        
        .news_content1 a{position:absolute;left:0;top:0;width:100%;height:100%}

        .news_content2 a{position:absolute;left:0;top:0;width:100%;height:100%}
        
       
        .event{width:595px;height:371px;position:relative;margin-bottom:100px;float:left}
        
        .event dt{width:0;height:0;overflow:hidden}
        .event dd{width:595px;height:371px;display:block}
       
        .event_content1 a{position:absolute;left:0;top:0;width:100%;height:100%}
       
        .event_content2 a{position:absolute;left:0;top:0;width:100%;height:100%}
       
       
        .search_call{width:1200px;margin:auto;overflow:hidden}
        
        .shop_search fieldset{border:none}
        .shop_search{width:595px;height:350px;float:left;position:relative;margin-right:10px}
        
        .shop_search dt{width:0;height:0;overflow:hidden}
        .shop_search>dd{width:300px;margin:auto;position:relative}
        
        .search_box{line-height:40px;border-radius:30px;width:300px;text-align:center;position:absolute;top:230px;right:122px}
        .shop_search button{width:72px;height:48px;background:url(images/search_button1_03.png) no-repeat;text-indent:-9999px;position:absolute;right:120px;top:230px;border:0 none}
        
        .franchise_call{width:595px;height:350px;float: left; position:relative;font-size:24px;font-weight:bold}
        .franchise_call dt{position:absolute;left:256px;top:204px;color:#a0a0a0}
        .franchise_call dd{position:absolute;left:215px;top:255px;color:#eeeeee}
        
        
        .footer{height:125px;background:#a0a0a0;color:#313131;font-size:12px}
        .footer_content{width:1200px;height:125px;box-sizing:border-box;padding: 35px 40px 35px 40px;margin:auto;position:relative}
        .footer h2{width:0;height:0;overflow:hidden}
        
        .site_map{width:103px;height:23px;background:url(images/sitemap.jpg) no-repeat;text-indent:-9999px}
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
      <a href="menu/hans_cake.php"><span>메뉴 소개 바로가기</span></a>
   <a href="board/hans_notice.php"><span>뉴스, 이벤트 바로가기</span></a>
   <a href="brand/hans_store.php"><span>매창 찾기 바로가기</span></a>
  </div>
   
   <header id="header" class="header">
    <h1><a href="index.php">한스</a></h1>
    
    
    <a href="#" class="full_menu">전체 메뉴 열기</a>
    <div class="gnb_user">
    <a href="#" class="close_full_menu">전체 메뉴 닫기</a>
   <nav class="gnb">
   
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
     <li><a href="login/login.php">로그인</a></li>
     <li><a href="members/hans_join.php">회원가입</a></li>
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
   
    <h2>주요메뉴</h2>
    <ul>
     <li class="gnb_brand"><a href="#">브랜드 소개</a>
    <ul class="gnb_brand_2depth">
      <li><a href="brand/hans_brandstory.php">브랜드 스토리</a></li>
      <li><a href="brand/hans_store.php">매장찾기</a></li>
    </ul>
    </li>
    
    <li class="gnb_menu"><a href="#">메뉴소개</a>
     <ul class="gnb_menu_2depth">
      <li><a href="menu/hans_cake.php">케익</a></li>
      <li><a href="menu/hans_tarte.php">타르트</a></li>
      <li><a href="menu/hans_rollpound.php">롤/파운드</a></li>
      <li><a href="#">음료</a></li>
      <li><a href="menu/hans_giftset.php">선물세트</a></li>
      <li><a href="#">스페셜주문</a></li>
    </ul>
    </li>
    
     <li class="gnb_news_event"><a href="#">뉴스, 이벤트</a>
     <ul class="gnb_news_event_2depth">
      <li><a href="board/hans_notice.php">뉴스</a></li>
      <li><a href="board/hans_event.php">이벤트</a></li>
    </ul>
    </li>
    
    <li class="gnb_franchise"><a href="board/hans_franchise.php">창업 문의</a>
    </li>
    </ul>
    </nav><!--gnb-->
    
       </div>
    </header><!--header-->

    
    <main id="content" class="content">
    <div class="main_image_wrap">
    <div class="main_image">
     <h2>주요소식</h2>
     <ul class="main_slider_image">
      <li class="main_image1"><a href="menu/hans_cake.php"><img src="images/main_images1.jpg" alt="프리미엄 초코 스트로베리 크림 케익"></a></li>
      <li class="main_image2"><a href="menu/hans_cake.php"><img src="images/main_images2.jpg" alt="망고 크림 케익"></a></li>
      <li class="main_image3"><a href="menu/hans_giftset.php"><img src="images/main_images3.jpg" alt="한스 프리미엄 구움과자"></a></li>
      </ul>
        </div><!--main_image-->
        </div>
        <section class="menu">
      <h2>MENU</h2>
      <ul>
       <li class="menu_cake"><a href="menu/hans_cake.php"><div class="cake_img_wrap"><div class="cake_img"><img src="images/menu_cake.jpg"  alt="케익"></div></div><span>케익</span></a></li>
       <li class="menu_tarte"><a href="menu/hans_tarte.php"><div class="tarte_img_wrap"><div class="tarte_img"><img src="images/menu_tarte.jpg" alt="타르트"></div></div><span>타르트</span></a></li>
       <li class="menu_rollpound"><a href="menu/hans_rollpound.php"><div class="rollpound_img_wrap"><div class="rollpound_img"><img src="images/menu_rollpound.jpg" alt="롤,파운드"></div></div><span>롤, 파운드</span></a></li>
       <li class="menu_drink"><a href="#"><div class="drink_img_wrap"><div class="drink_img"><img src="images/menu_drink.jpg" alt="음료"></div></div><span>음료</span></a></li>
       <li class="menu_giftset"><a href="menu/hans_giftset.php"><div class="giftset_img_wrap"><div class="giftset_img"><img src="images/menu_giftset.jpg" alt="선물세트"></div></div><span>선물 세트</span></a></li>
       <li class="menu_specialorder"><a href="#"><div class="specialorder_img_wrap"><div class="specialorder_img"><img src="images/menu_specialorder.jpg" alt="스페셜 주문"></div></div><span>스페셜 주문</span></a></li>
       </ul>
        </section><!--menu-->
        
        <section class="news_event">
      <h2>NEWS &amp; EVENT</h2>
      
      <section class="news">
      <div class="news_image_wrap">
      <dl>
      <dt>뉴스</dt>
      <div  class="news_slider_image">
       <dd class="news_content1"><a href="board/hans_notice.php"><img src="images/news_image1.jpg" alt="2020년 07월 25일 한스34호점, 왕십리점 오픈
       서울 성동구 왕십리로 390, 1층 104호(상왕십리동, 노블리안)"></a></dd>
       
      <dd class="news_content2"><a href="board/hans_notice.php"><img src="images/news_image2.jpg" alt="2018년 09월 20일
      경희궁 자이점 오픈
      서울 종로구 교남동 62-1 경희궁자이 팰리스에비뉴 4단지동 1층 20호"></a>
      </dd>
      </div>
      </dl>
          </div>
          
            </section><!--controlls_news-->
        
     <section class="event">
     <div class="event_image_wrap">
      <dl>
      <dt>이벤트</dt>
      <div class="event_slider_image">
       <dd class="event_content1"><a href="board/hans_event.php"><img src="images/event_image1.jpg" alt="한스케익몰 이벤트
       회원가입하는 모든 고객님께
       한스케익몰에서 사용할 수 있는
       3,000원 쿠폰을 드립니다."></a></dd>
       
       <dd class="event_content2"><a href="board/hans_event.php"><img src="images/event_image2.jpg" alt="추석 선물세트, 한스 케익몰에서 준비하세요."></a></dd>
       </div>
      </dl>
      </div>
            </section><!--controlls_news-->
       
       </section><!--news_enent-->
       
       
       <section class="search_call">
          <section class="shop_search">
           <form name="" id="" action="" method="">
           <fieldset>
             <img src="images/shop_search.jpg" alt="매장찾기">
              <dl>
                  <dt>매장찾기</dt>
                  <dd><input type="text" name="shop_search" id="shop_search" size="30" value="지역을 검색하세요." class="search_box"/>
                  <button type="button">검색</button></dd>
              </dl>
            </fieldset>
            </form>
         </section><!--shop_search-->
         
         
      <section class="franchise_call">
      <img src="images/franchise.jpg" alt="창업문의">
      <dl>
      <dt>창업문의</dt>
       <dd>☎ 031.463.3505</dd>
      </dl>
        </section><!--franchise_call-->
        </section>
      </main><!--content-->
      
      
      
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

