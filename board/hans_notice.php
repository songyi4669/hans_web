<?php
 session_start();
 
 $s_uid = isset($_SESSION["s_uid"])?
 $_SESSION["s_uid"]:"";
 $s_uname = isset($_SESSION["s_uname"])?
 $_SESSION["s_uname"]:"";
?>



<?php


    // DB 연결
    include "../inc/dbcon.php";

    // 쿼리 작성
    $sql = "select * from notice;";

    // 쿼리 전송
    $result = mysqli_query($con, $sql);

    // 전체 데이터 개수
    //// pager : 전체 데이터 개수
    $num = mysqli_num_rows($result);

    //// pager : 한 페이지 당 글 개수
    $list_num = 5;

    //// pager : 한 블럭 당 페이지 수
    $page_num = 3;

    //// pager : 현재 페이지
    $page = isset($_GET["page"])? $_GET["page"] : 1;

    //// pager : 전체 페이지 수
    // 전체 글 개수 / 한 페이지 당 글 개수
    // ceil(숫자) = 올림값
    $total_page = ceil($num/$list_num);
    // echo "전체 페이지 수 : ".$total_page;

    //// pager : 총 블럭 수
    // 전체 페이지 수 / 한 블럭 당 페이지 수
    $total_block = ceil($total_page/$page_num);
    // echo "전체 페이지 수 : ".$total_block;

    //// pager : 현재 블럭 번호
    // 현재 페이지 번호 / 블럭 당 페이지 수
    $now_block = ceil($page/$page_num);

    //// pager : 블럭 당 시작 페이지 번호
    // (해당 글의 블럭번호-1) * 블럭 당 페이지 수 + 1
    $s_pageNum = ($now_block-1) * $page_num + 1;
    // 페이지 수가 0인 경우 1로 설정
    if($s_pageNum <= 0){
        $s_pageNum = 1;
    };
    
    //// pager : 블럭 당 종료 페이지 번호
    // 현재 블럭 번호 * 블럭 당 페이지 수
    $e_pageNum = $now_block * $page_num;
    // 종료 페이지 번호가 최대 페이지 수를 넘지 않도록 설정
    if($e_pageNum > $total_page){
        $e_pageNum = $total_page;
    };
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
      
      
      .content h2{font-family:"Adobe 명조 std";font-size:36px;color:#522100;text-align:center;margin-bottom:50px}
      .content>img{width:1200px;height:219px; margin:0 auto 100px;display:block}
      
      
      .news_search{width:1200px;display:block;border:none 0;text-indent:-9999px;margin:0 auto 60px;text-align:center}
      .news_search input{width:350px;height:30px}
      .news_search button{width:70px;height:34px;border:none 0;background:#522100;color:#eeeeee}
      
      .news_list{width:1000px;margin:0 auto 50px; font-size:16px;border-collapse:collapse;text-align:center;border-top:1px solid #999999}
      .news_list td{border-bottom:1px solid #dbdbdb;line-height:40px}
      .news_title{background-color:#f7f7f7;font-weight:bold}
      .paging{text-align:center;margin-bottom:100px;font-size:16px}
      

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
      <a href="../menu/hans_cake.php"><span>메뉴 소개 바로가기</span></a>
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
      <li><a href="../menu/hans_cake.php">케익</a></li>
      <li><a href="../menu/hans_tarte.php">타르트</a></li>
      <li><a href="../menu/hans_rollpound.php">롤/파운드</a></li>
      <li><a href="#">음료</a></li>
      <li><a href="../menu/hans_giftset.php">선물세트</a></li>
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


<main id="content" class="content">
<img src="../images/store_main.jpg" alt="">
<h2>NEWS</h2>

<div class="form_wrap">
<form name="news_search_form" action="" method="post">
<fieldset class="news_search">
<legend>뉴스 검색</legend>
<input type="text" name="news_search" id="news_search">
<button type="button">검색</button>
</fieldset>
</form>
</div>

<table class="news_list">
<tr class="news_title">
<td>글번호</td>
<td>제목</td>
<td>날짜</td>
</tr>
 <?php
        
        //// pager : 시작 번호 
        // (현재 페이지 번호 -1) * 페이지 당 보여질 개수
        $start = ($page - 1) * $list_num;

        //// pager : 쿼리 작성
        // $sql = "select * from members limit 몇번부터(배열), 몇개;";
        $sql = "select * from notice limit $start, $list_num;";
        
        //// pager : 쿼리 전송
        $result = mysqli_query($con, $sql);
        
        //// pager : 글번호
        // 전체 데이터 수 - ((현재 페이지 번호 - 1) * 페이지 당 보여질 개수)  --  역순
        // (현재 페이지 번호 - 1) * 페이지 당 보여질 개수 + 1  --  오름차순
        $cnt = $start + 1;
        while($array = mysqli_fetch_array($result)){  
            
        ?>
<tr>
 <td><?php echo $cnt; ?></td>
 <td><a href="notice_view.php?idx=<?php echo $array["idx"]; ?>"><?php echo $array["notice_title"]; ?></a></td>
 <td><?php echo $array["write_date"]; ?></td>
</tr>
<?php  
            $cnt++;
        };  
        ?>
</table>

<p class="paging">
        <?php
            //// pager : 이전 페이지
            if($page <= 1){
        ?>
        <a href="hans_notice.php?page=1">이전</a>
        <?php
            } else{
        ?>
        <a href="hans_notice.php?page=<?php echo ($page-1); ?>">이전</a>
        <?php
            };
        ?>
        
        <?php
        //// pager : 번호 & 링크 출력
        for( $print_page = $s_pageNum;  $print_page <= $e_pageNum;  $print_page++){
        ?>
        <a href="hans_notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
        <?php
        };
        ?>
        
        <?php
            //// pager : 다음 페이지
            if($page >= $total_page){
        ?>
        <a href="hans_notice.php?page=<?php echo $total_page; ?>">다음</a>
        <?php
            } else{
        ?>
        <a href="hans_notice.php?page=<?php echo ($page+1); ?>">다음</a>
        <?php
            };
        ?>
        
    </p>
    
</main>



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