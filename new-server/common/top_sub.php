<?php

switch($page) { 
	case "main": ?>
		<section class="main" id="main">
			
			<div class="txt-box" id="txt-box">
				<p class="p0">
					청정 자연과 프라이빗 전용해변의 만남<br>
					강원도 설악, 속초, 고성에 위치한
				</p>
				<div class="mg-"></div>
				<p class="p1"><img src="<?=base_img?>/main_tit.png" alt="<?=SITE_NAME_K_short?>"></p>
				<p class="p2">속초설악비치 호텔앤콘도</p>
				<a href="javascript:;" class="more-a">자세히보기<img src="http://img.ocean2you.co.kr/renew/i_gt.png" alt="화살표" class="gt"></a>
				<a href="javascript:location.href='/view/';" class="more-a booking-a show-xs"><img class="cal" src="http://img.ocean2you.co.kr/renew/i_cal_2.png" alt="달력아이콘">실시간 객실예약</a>

				<?php
					//180306 날씨추가 : 이준혁
					//include_once(INC_DIR."/ocean2you/web-home/common/weather.php");//api key 유효기간 : ~2020/03/06
				?>
				<!--20180228 날씨 추가-->
				<a href="javascript:;" class="weath-wrap" style="cursor:default">
					<div class="weath-box">
						<p class="weath-img">
							<!-- 이미지명 : 맑음 clear / 구름조금 cloud / 흐림 cloud2 / 비 rain / 눈 snow -->
							<img class="sky_img" src="http://img.ocean2you.co.kr/renew/weather/clear.png" alt="날씨">
						</p>
						<p class="weath-txt">
							<span class="day"><?=date("Y.m.d")?> (<span class="view_week" style="display: inline;">--</span>)</span>
							<span class="location">고성날씨 : <span class="sky_view" style="display: inline;">--</span></span>
						</p>
						<p class="tem-txt">
							<span class="tem-num ondo_view">--</span>
							<span class="tem-cel">°C</span>
						</p>
					</div>
				</a>
				<script>
					$.ajax({
						url: "/common/weather.php",
						type: "get",
						data: "nx=<?=$nx?>&ny=<?=$ny?>&dust_area=<?=$dust_area?>&api=Y",
						success: function(e) {
							e = e.split("||");
							$(".weath-box .view_week").html(e[0]);
							$(".weath-box .sky_view").html(e[1]);
							$(".weath-box .ondo_view").html(e[2]);
							$(".weath-box .sky_img").attr("src", "http://img.ocean2you.co.kr/renew/weather/"+e[3]);
							// $(".weath-box .grade").html(e[4]);
						}
					});
				</script>
				<!--// -->
			</div>
			
			<div id="scr-box">
				<img src="<?=base_img?>/i_mouse.png" alt="아래로스크롤하세요" class="nth-1">
				<img src="<?=base_img?>/i_dArr.png" alt="아래로" class="nth-2">
				<img src="<?=base_img?>/i_dArr.png" alt="아래로" class="nth-3">
			</div>
			
		</section>		
		<?php
		break;

	case "intro": ?>
			
		<section class="title" id="intro_pro">
		
			<div class="container tit-box">
				<h2><?=SITE_NAME_K_short?> 소개</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/intro/intro_title.png" alt="<?=SITE_NAME_K_short?>소개"></div>
				<p class="p0">반짝이는 백사장 위로 쏟아지는 별빛을 볼 수 있는 <?=SITE_NAME_K_short?>로 초대합니다.</p>
			</div>
							
		</section>
		<?php
		break;
	
	/*case "package":
			
		<section class="title" id="package_top">
		
			<div class="container tit-box">
				<h2>오션투유 부대시설 안내</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/package/pkg_title.png" alt="<?=SITE_NAME_K_short?>소개"></div>
					<!-- 1800614 수정 -->
                    <ul class="pkg-tab tab-wid clr" id="pkg-tab">
                        <li class="nth-1"><a href="javascript:;">조식뷔페 다연</a></li>
                        <li class="nth-2"><a href="javascript:;" class="line-two">오션숯불갈비&amp;<span></span>바베큐</a></li>
                        <li class="nth-4"><a href="javascript:;">속초횟집</a></li>
                        <li class="nth-5"><a href="javascript:;">전동바이크</a></li>
                        <li class="nth-6"><a href="javascript:;">룸서비스</a></li>
                        <li class="nth-7"><a href="javascript:;" class="line-two">반데라바베큐<span></span>플레이츠</a></li>
                        <li class="nth-8"><a href="javascript:;" class="line-two">오션투유 <span></span>노래방</a></a></li>
                        <!-- 동절기 이후 다시 쓸 가능성 있음 -->
                        <!-- <li class="nth-4"><a href="javascript:;">조개 잡기 패키지</a></li> -->
                    </ul>				
			</div>
			
		</section>
		<?php
		break;*/
	case "package": ?>
			
		<section class="title" id="package_top">
			
                <!-- 190226 서브 메뉴 변경 -->
				<div class="container tit-box">
					<?php	if($_GET["type"] == "dining") {	?>
					<h2>다이닝</h2>
					<?php	} else {	?>
					<h2>연회&amp;부대시설</h2>
					<?php	}	?>
					<div class="mg-"></div>
					<div class="titTxt"><img src="http://img.ocean2you.co.kr/renew/facil/facil_title.png" alt="시설소개"></div>
                    <ul class="pkg-tab tab-wid clr" id="pkg-tab">
						<?php	if($_GET["type"] == "dining") {	?>
						<li class="nth-1"><a href="javascript:bottom_menu('1');">조식뷔페 다연</a></li>
                        <li class="nth-2"><a href="javascript:bottom_menu('2');" class="line-two">오션숯불갈비&amp;<span></span>바베큐장</a></li>
                        <li class="nth-3"><a href="javascript:bottom_menu('3');">속초횟집</a></li>
                        <li class="nth-4"><a href="javascript:bottom_menu('4');" class="line-two">반데라바베큐<span></span>플레이츠</a></li>
                        <li class="nth-5"><a href="javascript:bottom_menu('5');">룸서비스</a></li>
						<?php	} else {		?>
                        <li class="nth-1"><a href="javascript:bottom_menu('1')">연회장</a></li>
                        <li class="nth-2"><a href="javascript:bottom_menu('2');">노래방</a></li>
                        <li class="nth-3"><a href="javascript:bottom_menu('3');">전동바이크</a></li>
                        <li class="nth-10"><a href="javascript:bottom_menu('10');">불꽃놀이</a></li>
                        <li class="nth-11"><a href="javascript:bottom_menu('11');">조개잡이</a></li>
                        <li class="nth-12"><a href="javascript:bottom_menu('12');">코인세탁실</a></li>
                        <li class="nth-4"><a href="javascript:bottom_menu('4');">라바짜 카페</a></li>
                        <li class="nth-5"><a href="javascript:bottom_menu('5');">GS편의점</a></li>
                        <li class="nth-9"><a href="javascript:bottom_menu('9');">낚시도구</a></li>
						<?php	}	?>
                    </ul>
					
				</div>
								
			</section>
		<?php
		break;
	
	case "facil": ?>
		<?php if($_GET["room"] >= 1 && $_GET["room"] <= 6) { ?>
		<section class="title">
			<div class="container tit-box">
				<h2>객실 안내</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="http://img.ocean2you.co.kr/renew/facil/facil_title.png" alt="시설소개"></div>
				<!-- 190321 객실별 자세히보기 -->
				<ul class="facil-tab clr" id="fcdetail-tablist">
					<li class="nth-1"><a href="javascript:;">로얄스위트 오션뷰 테라스</a></li>
					<li class="nth-2"><a href="javascript:;">리노베이션 오션뷰 테라스</a></li>
					<li class="nth-3"><a href="javascript:;">리노베이션 콘도 오션뷰</a></li>
					<li class="nth-4"><a href="javascript:;">리노베이션 호텔 오션뷰</a></li>
					<li class="nth-5"><a href="javascript:;">일반콘도 오션뷰</a></li>
					<li class="nth-6"><a href="javascript:;">일반콘도 마운틴뷰</a></li>
				</ul>
			</div>
		</section>
		<?php } else { ?>
		<section class="title" id="facil_top">
		
			<div class="container tit-box">
				<h2>시설 소개</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/facil/facil_title.png" alt="시설소개"></div>
				<!--<ul class="facil-tab clr" id="facil-tab">
					<li class="nth-1"><a href="javascript:;">객실안내</a></li>
					<li class="nth-2"><a href="javascript:;">부대시설안내</a></li>
				</ul>-->
				
			</div>
							
		</section>
		<?php } ?>
		<?php
		break;
	case "amenities": ?>
			
		<section class="title" id="facil_top">
		
			<div class="container tit-box">
				<h2>연회&부대시설</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/facil/facil_title.png" alt="시설소개"></div>
				<!-- 180614 수정 -->
				<ul class="facil-tab clr" id="facil-tab">
					<!--<li class="nth-1"><a href="<?=base_url?>/package/?pack_go=1">조식뷔페 다연</a></li>
					<li class="nth-2"><a href="<?=base_url?>/package/?pack_go=2" class="line-two">오션숯불갈비&amp;<span></span>바베큐장</a></li>
					<li class="nth-4"><a href="<?=base_url?>/package/?pack_go=4">속초횟집</a></li>
					<li class="nth-5"><a href="<?=base_url?>/package/?pack_go=5">전동바이크</a></li>
					<li class="nth-6"><a href="<?=base_url?>/package/?pack_go=6">룸서비스</a></li>
					<li class="nth-7"><a href="<?=base_url?>/package/?pack_go=7" class="line-two">반데라바베큐<span></span>플레이츠</a></li>
					<li class="nth-8"><a href="<?=base_url?>/package/?pack_go=8" class="line-two">오션투유 <span></span>노래방</a></li>-->

					<li class="nth-1"><a href="<?=base_url?>/package/?pack_go=1">연회장</a></li>
					<li class="nth-2"><a href="<?=base_url?>/package/?pack_go=2">노래방</a></li>
					<li class="nth-3"><a href="<?=base_url?>/package/?pack_go=3">전동바이크</a></li>
					<li class="nth-10"><a href="<?=base_url?>/package/?pack_go=10">불꽃놀이</a></li>
					<li class="nth-11"><a href="<?=base_url?>/package/?pack_go=11">조개잡이</a></li>
					<li class="nth-12"><a href="<?=base_url?>/package/?pack_go=12">코인세탁실</a></li>
					<li class="nth-4"><a href="javascript:bottom_menu('4');">라바짜 카페</a></li>
					<li class="nth-5"><a href="javascript:bottom_menu('5');">GS편의점</a></li>
					<li class="nth-9"><a href="<?=base_url?>/package/?pack_go=9">낚시도구</a></li>
				</ul>
			</div>
		</section>
		<?php
		break;
	case "amenities_renew": ?>
			
		<section class="title" id="facil_top">
		
			<div class="container tit-box">
				<h2>연회&amp;부대시설</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/facil/facil_title.png" alt="시설소개"></div>
				<!-- 180614 수정 -->
				<ul class="facil-tab clr" id="facil-tab">

					<!-- span태그가 있는 부모요소 a태그에 line-two 클래스 추가 -->
					<li class="nth-1"><a href="<?=base_url?>/package/?pack_go=8" class="line-two">오션투유리조트 <span></span>연회장</a></li>
					<li class="nth-2"><a href="<?=base_url?>/package/?pack_go=8" class="line-two">오션투유리조트 <span></span>노래방</a></li>
					<li class="nth-3"><a href="<?=base_url?>/package/?pack_go=5">전동바이크 대여</a></li>
					<li class="nth-4"><a href="<?=base_url?>/package/?pack_go=8" class="line-two">라바짜 <span></span>속초설악비치점</a></li>
					<li class="nth-5"><a href="<?=base_url?>/package/?pack_go=8">GS편의점 입점</a></li>

					<!--<li class="nth-1"><a href="<?=base_url?>/package/?pack_go=1">조식뷔페 다연</a></li>
					<li class="nth-2"><a href="<?=base_url?>/package/?pack_go=2" class="line-two">오션숯불갈비&amp;<span></span>바베큐장</a></li>
					<li class="nth-4"><a href="<?=base_url?>/package/?pack_go=4">속초횟집</a></li>
					<li class="nth-5"><a href="<?=base_url?>/package/?pack_go=5">전동바이크</a></li>
					<li class="nth-6"><a href="<?=base_url?>/package/?pack_go=6">룸서비스</a></li>
					<li class="nth-7"><a href="<?=base_url?>/package/?pack_go=7" class="line-two">반데라바베큐<span></span>플레이츠</a></li>
					<li class="nth-8"><a href="<?=base_url?>/package/?pack_go=8" class="line-two">오션투유 <span></span>노래방</a></li>-->
				</ul>
			</div>
		</section>
		<?php
		break;

	case "event": ?>
			
		<section class="title">
			
			<div class="container tit-box">
				<h2>오션투유리조트 이벤트 / 축제</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/event/event_title.png" alt="예약하기"></div>
				<p class="p0">반짝이는 백사장 위로 쏟아지는 별빛을 볼 수 있는 오션투유 리조트로 초대합니다.</p>
			</div>
							
		</section>
		<?php
		break;

	case "view": 
	case "reserve": ?>
			
		<section class="title">
		
			<div class="container tit-box">
				<h2>실시간 예약 / 예약확인</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/reservation/res_title.png" alt="예약하기"></div>
				<ul class="facil-tab clr" id="facil-tab">

					<?php
					/*
					if($login_mode == false) {
						//echo "<li class=\"nth-1 on\"><a href=\"".base_url."/member/\"><img class=\"i-user\" src=\"".base_img."/reservation/i-user.png\" alt=\"유저\">로그인</a></li>";
						echo "<li class=\"nth-2\" style=\"margin: 0 auto; float: none;\"><a href=\"".base_url."/member/?dd=".$go_util->XOREncode('login')."&rurl=".$go_util->XOREncode(base_url."/history/?dd=".$go_util->XOREncode('buylist'))."\"><img class=\"i-cal\" src=\"".base_img."/reservation//i-cal.png\" alt=\"달력\">예약내역조회</a></li>";
					} else { 
						//echo "<li class=\"nth-1 on\"><a href=\"".base_url."/member/logout.php?rtn=".$go_util->XOREncode(base_url.$_SERVER["REQUEST_URI"])."\"><img class=\"i-user\" src=\"".base_img."/reservation/i-user.png\" alt=\"유저\">로그아웃</a></li>";
						echo "<li class=\"nth-2\" style=\"margin: 0 auto; float: none;\"><a href=\"".base_url."/history/?dd=".$go_util->XOREncode('buylist')."\"><img class=\"i-cal\" src=\"".base_img."/reservation//i-cal.png\" alt=\"달력\">예약내역조회</a></li>";
					}
					*/

					?>
				</ul>			
			</div>	
		</section>

		<?php
		break;

	case "member": ?>	
		<section class="title">
		
			<div class="container tit-box">
				<h2>로그인</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/member/login_title.png" alt="로그인"></div>
				<p class="p0"><span class="xs-block">내 소셜 아이디로 간편하게 </span> <?=SITE_NAME_K?> 가입과 로그인이 가능합니다.</p>
				<p class="p0 under">신규가입시 <?=number_format(app_cou)?>원 쿠폰팩 지급, 결제금액 1% 적립</p>
				
			</div>
							
		</section>

		<?php
		break;

	case "customer": ?>	
		<section class="title">
		
			<div class="container tit-box">
				<?php if(!empty($_GET["dd"]) && $go_util->XORDecode($_GET["dd"]) == "faq_event") { ?>
				<h2>고코투어 이벤트 당첨 자주 묻는 질문</h2>
				<div class="mg-"></div>
				<?php } else { ?>
				<h2>고객센터</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/customer/customer_title.png" alt="로그인"></div>
				<?php } ?>
			</div>
							
		</section>

		<?php
		break;

	case "history": ?>	
		<section class="title">					
			<div class="container tit-box">
				<h2>예약내역조회</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/history/history_title.png" alt="예약내역조회"></div>
				<p class="p0">예약하신 내역을 확인하실수 있습니다.</p>
				<p class="p0" style="word-break: break-all;">고코투어는 <?=SITE_NAME_K_short?>의 공식온라인 총판입니다. 예약은 고코투어를 통해서 진행됩니다.</p>				
			</div>								
		</section>

		<?php
		break;
	case "group": ?>
			
		<section class="title" id="intro_pro">
		
			<div class="container tit-box">
				<h2><?=SITE_NAME_K_short?> 단체 행사문의</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/group/group_title.png" alt="<?=SITE_NAME_K_short?> 단체 행사문의"></div>
			</div>
		</section>
		<?php
		break;
	case "rent":
?>
		<section class="title">
			<div class="container tit-box">
				<h2>장기숙박 / 단기임대 소개</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/reservation/res_title.png" alt="예약하기"></div>
			</div>	
		</section>
<?php
	break;
	case "dining":
?>
		<section class="title">
			<div class="container tit-box">
				<h2>다이닝</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/facil/facil_title.png" alt="시설소개"></div>
				<ul class="facil-tab clr" id="facil-tab">
					<li class="nth-1"><a href="<?=base_url?>/package/?type=dining">조식뷔페 다연</a></li>
					<li class="nth-2"><a href="<?=base_url?>/package/?pack_go=2&type=dining" class="line-two">오션숯불갈비&amp;<span></span>바베큐장</a></li>
					<li class="nth-3"><a href="<?=base_url?>/package/?pack_go=3&type=dining">속초횟집</a></li>
					<li class="nth-4"><a href="<?=base_url?>/package/?pack_go=4&type=dining" class="line-two">반데라바베큐<span></span>플레이츠</a></li>
					<li class="nth-5"><a href="<?=base_url?>/package/?pack_go=5&type=dining">룸서비스</a></li>
				</ul>
				
			</div>
		</section>
<?php
	break;
	case "tourist":
?>
		<section class="title">
			<div class="container tit-box">
				<h2>주변 관광지 안내</h2>
				<div class="mg-"></div>
				<div class="titTxt"><img src="<?=base_img?>/tourist/tour_title.png" alt="시설소개"></div>
				<ul class="pkg-tab clr" id="pkg-tab">
					<li class="nth-1 on"><a href="javascript:;">고성지역 관광지</a></li>
					<li class="nth-2"><a href="javascript:;">속초지역 관광지</a></li>
				</ul>
				
			</div>
		</section>
<?php
	break;
} 
?>
</div>
<?php
switch($page) {
	case "intro":
	case "facil":
	case "amenities":
	case "event": ?>
<?php /* 190712 08월 19일 이후 다시 살려낼 수도 있다고 함 : 성다솜 */ ?>
<!--<div class="banner-box bf">
	<img src="<?=base_img?>/tbn_breakfast.jpg" alt="평일아침조식무료" class="show-sm-gte">
	<img src="<?=base_img?>/tbn_breakfast_m.jpg" alt="평일아침조식무료" width="100%" class="show-xs">
</div>-->

<div class="banner-box pets" onclick="location.href = '/view/?pet=Y'" style="cursor: pointer;">
	<img src="<?=base_img?>/tbn_pet.jpg" alt="애완동물 동반 투숙 가능" class="show-sm-gte">
	<img src="<?=base_img?>/tbn_pet_m.jpg" alt="애완동물 동반 투숙 가능" width="100%" class="show-xs">
</div>

<?php break; } ?>