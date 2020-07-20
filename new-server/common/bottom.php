		<?php 
		if($top_show_st == "N") { 
			echo "<div class=\"clr\"></div>";
		} 

		?>
		<?php if($page == "intro" || $page == "facil" || $page == "amenities" || $page == "event") { ?>
		<!-- 오른쪽 날개 배너 -->
		<div class="rBn-box">
			<a href="http://ocean2you.co.kr/view/"><img src="http://img.ocean2you.co.kr/renew/group/group_bn_01.png" alt="일반예약하러가기"></a>
			<!--<a href="javascript:;" onclick="$('#pop-bustour').show()"><img src="http://img.ocean2you.co.kr/renew/banner/right/bn_bus_1.png" alt="속초관광버스투어상품안내"></a>-->
		</div>
		<?php }else if($page == "group"){ ?>
		<div class="rBn-box">
			<!-- <a href="http://ocean2you.co.kr/view/"><img src="http://img.ocean2you.co.kr/renew/group/group_bn_01.png" alt="일반예약하러가기"></a> -->
			<a href="javascript:;" onclick="$(window).scrollTop($('#etcSetTop').offset().top - $('#gnb-header').height());"><img src="<?=base_img?>/group/group_bn_02.png" alt="단체행사문의하기"></a>
		</div>
		<?php } ?>
		<?php if($page != "kendo") { ?>
		<footer class="footer">
			<div class="container">
				<?php #if($ebiz_ip == true){ ?>
					<ul class="f_menu">
						<!--171218 레이어팝업노출-->
						<li><a href="javascript:;" onclick="$('#privacy-bg, #privacy-bg .term-wrap').show(); $('body').css('overflow', 'hidden');">이용약관</a></li>
						<li><a href="javascript:;" onclick="$('#privacy-bg, #privacy-bg .privacy-wrap').show(); $('body').css('overflow', 'hidden');">개인정보처리방침</a></li>
						<li><a href="http://ocean2you.co.kr/?go_scroll=wayto">오시는 길</a>
            </li>
					</ul>
				<?php #} ?>
				<div class="flt-1 clr">
					<img class="f-logo" src="<?=base_img?>/f_logo.png" alt="오션투유리조트">
				</div>
				<div class="flt-2 clr">
					<address>
						<p class="nth-1">
							<!--180528 사업자명 변경-->
							(주)이스턴월드<br>
							대표자 : 최종일<br />
							주소 : <?=SITE_addr?><br>
							사업자등록번호 : <?=SITE_company_num1?><span class="i-l"></span>통신판매업 : <?=SITE_company_num2?>
						</p>
					</address>
					<!--171127 예약문의 변경-->
					<div class="cf-box">
						<p class="p-0">&lt;고객센터 안내&gt;</p>
						<div class="cf-in">
							<div class="callFor cf0">
								<span class="f-bd">고객센터 안내</span>
								문의에 따라 해당 고객센터로<br>
								전화주시면,문의사항을<br>
								해결해 드리겠습니다.
							</div>
							<?php
								$href1 = "";
								$href2 = "";
								$href3 = "";
								if(USER_FLAG == 'M') {
									$href1 = 'href="tel:1666-1243"';
									$href2 = 'href="tel:033-630-9200"';
									$href3 = 'href="tel:010-3066-4665"';
								}
							?>
							<a class="callFor cf1" <?=$href1;?>>
								<span class="s1">예약문의</span>
								<span class="mg-"></span>
								<span class="s1-2"><span class="xs-hidden">&#40;</span>확정, 변경, 취소<span class="xs-hidden">&#41;</span><span class="xs-block"></span>/이벤트 문의</span>
								<span class="s3"><img src="<?=base_img?>/i_call.png" alt="전화아이콘"> 1666-1243</span>
								<!--<span class="s1-2">주중 09~18시<span class="hidden-xs"> </span>/<span class="hidden-xs"> </span>주말 09~17시</span>-->
								<span class="s1-2">주중 09:30 ~ 25:00<br>주말 09:30 ~ 24:00</span>
							</a>
							<a class="callFor cf2" <?=$href2;?>>
								<span class="s1">프론트</span>
								<span class="mg-"></span>
								<span class="s1-2"><span class="xs-hidden">&#40;</span>체크인, 체크아웃<span class="xs-block"></span>시설이용문의<span class="xs-hidden">&#41;</span></span>
								<span class="s3"><img src="<?=base_img?>/i_call.png" alt="전화아이콘"> 033-630-9200</span>
								<span class="s1-2">주중/주말 06시 ~ 02시</span>
							</a>
							<a class="callFor cf3" <?=$href3;?>>
								<span class="s1">단체문의</span>
								<span class="mg-"></span>
								<span class="s1-2"><span class="xs-hidden">&#40;</span>워크샵, 학생단체,<span class="xs-block"></span> 산업단체 등<span class="xs-hidden">&#41;</span></span>
								<span class="s3"><img src="<?=base_img?>/i_call.png" alt="전화아이콘"> <?=group_tel?></span>
								<!-- <span class="s1-2">주중/주말 24시간 상담가능</span> -->
								<span class="s4"><img class="i-mail" src="http://img.ocean2you.co.kr/renew/group/icon_mail.jpg" alt="메일"> help@ocean2you.co.kr</span>
							</a>
						</div>
					</div>
					
					
				</div>
				<div class="clr"></div>
				<div class="flt-1 clr">
					<img class="f-gcLogo" src="<?=base_img?>/f_gcLogo.png" alt="오션투유리조트">
					<div id="family-wrapper" class="family-wrapper">
						<div class="family-site">
							<span class="family-site-label" onclick="$(this).next().toggle()">패밀리사이트&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▲</span>
							<ul class="site" style="display: none;">
								<li class="group-name">
									<div class="fam_btn">[호텔/리조트]</div>
								</li>
								<li>
									<div class="fam_btn"><a href="http://ocean2you.co.kr/" target="_blank">오션투유리조트</a></div>
								</li>
								<li>
									<div class="fam_btn"><a href="http://seabay.co.kr/" target="_blank">씨베이호텔</a></div>
									<div class="fam_btn"><a href="http://hotelairsky.co.kr/" target="_blank">에어스카이호텔</a></div>
								</li>
								<li class="group-division" style="border-top: 1px dashed #a3a3a3; margin: 5px 10px"></li>
								<li class="group-name">
									<div class="fam_btn">[호텔위탁운영사]</div>
								</li>
								<li>
									<div class="fam_btn"><a href="http://ebiznetworks.co.kr/home/program/?dd=WQwvfDZJKkYs" target="_blank">이비즈네트웍스</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="flt-2 clr">
					<address>
						<?php if("aa" == "bb") { ?>
						<p class="nth-1 mt">
							<?=GOCO_company?><br>
							주소 : <?=GOCO_addr?><br>
							사업자등록번호 : <?=GOCO_company_num1?><span class="i-l"></span>통신판매업 : <?=GOCO_company_num2?><br>
							여행업등록번호 : <?=GOCO_company_num3?><span class="i-l"></span>여행영업보증서 : <?=GOCO_company_num4?><br>
						</p>
						* 바로네트웍스는 오션투유리조트의 공식 온라인 총판으로서 온라인 예약 및 결제를 대행합니다.
						<?php } else { ?>
						<p class="nth-1 mt">
							(주)이비즈네트웍스<br>
							대표이사 : 박기범<br>
							주소 : 서울특별시 강남구 테헤란로82길 15, (대치동, 디아이타워)<br>
							사업자등록번호 : 220-87-30865 <span class="i-l"></span> 통신판매업 : 제 강남-11501호 <br />
							여행업등록번호 : 제2015-44호 <span class="i-l"></span> 여행영업보증서 : 국내여행 제100-000-201804161009호 <br />
						</p>
						* 이비즈네트웍스는 오션투유리조트의 공식 온라인 총판으로서 온라인 예약 및 결제를 대행합니다.
						<?php } ?>
						<!--180528 텍스트 수정-->
						<br><br>
						<p class="nth-2">
							Copyright 2016  <?=strtoupper(site_buns)?> CONE. ALL RIGHTS RESERVED
						</p>

					</address>
				</div>
			</div>
		</footer>
		<a href="javascript:;" id="goTop"><img src="<?=base_img?>/goTop.jpg" alt="위로"></a>
		<?php } else { ?>
		<footer class="footer">
			<div class="footer-area clr">
				<!-- 문의 영역 -->
				<div class="call-area clr">
					<div class="call-box">
						<p class="p-1">예약문의</p>
						<p class="p-2">확정/변경/취소/<span class="show-xs"></span>이벤트문의</p>
						<p class="p-call">1666-1243</p>
						<p class="p-2">
							<span class="bul">주중 09:30 ~ 25:00</span>
							<span class="bul">주말 09:30 ~ 24:00</span>
						</p>
					</div>
					<div class="call-box">
						<p class="p-1">프론트</p>
						<p class="p-2">체크인, 체크아웃시설<span class="show-xs"></span>이용문의</p>
						<p class="p-call">033-630-9200</p>
						<p class="p-2">
							<span>주중/주말 06시 ~ 02시</span>
						</p>
					</div>
					<div class="call-box">
						<p class="p-1">단체문의</p>
						<p class="p-2">워크샵, 학생단체, <span class="show-xs"></span>산업단체 등</p>
						<p class="p-call">010-9094-0396</p>
						<p class="p-2">
							<span>help@ocean2you.co.kr</span>
						</p>
					</div>
				</div>

				<!-- 사업자 -->
				<div class="adr-area">
					<!-- 오션투유리조트 -->
					<div class="adr-box">
						<figure class="f-logo">
							<img src="http://img.ocean2you.co.kr/renew/landing-brand/f_logo.png" alt="오션투유리조트 로고">
							<span class="f-logo-txt">설악삼포비치 호텔앤콘도</span>
						</figure>
						<address>

					<em>(주)이스턴월드</em>

					대표자 : 김흥기<span class="i-l"></span>주소 : <?=SITE_addr?><br>

					사업자등록번호 : <?=SITE_company_num1?><span class="i-l"></span>통신판매업 : <?=SITE_company_num2?>

				</address>
					</div>
					<!-- 오션투유리조트 -->
					<div class="adr-box">
						<figure class="f-logo">
							<img src="http://img.ocean2you.co.kr/renew/landing-brand/f_gcLogo.png" alt="고코투어 로고">
						</figure>
						<address>

					<em><?=GOCO_company?></em>

					주소 : <?=GOCO_addr?><span class="x-i-l"></span>

					사업자등록번호 : <?=GOCO_company_num1?><span class="i-l"></span>통신판매업 : <?=GOCO_company_num2?><br>

					여행업등록번호 : <?=GOCO_company_num3?><span class="i-l"></span>여행영업보증서 : <?=GOCO_company_num4?><br>

					* 바로네트웍스는 오션투유리조트의 공식 온라인 총판으로서 온라인 예약 및 결제를 대행합니다. 

				</address>
					</div>
				</div>

				<p class="copy">Copyright 2016 <?=strtoupper(site_buns)?> CONE. ALL RIGHTS RESERVED</p>
			</div>
		</footer>
		<?php } ?>
		<?php	if($page != "reserve" && $page != "view" && USER_FLAG != "W" && $page != "kendo" && $page != "rent") {	?>
		<?php
			$reserve_button = ($page == "group") ? "javascript:faq_move();" : "javascript:location.href='/view/'"; 
		?>
		<a href="<?=$reserve_button?>" class="rtBookingBn" id="rtBookingBn">
			<img src="http://img.ocean2you.co.kr/renew/i_cal_2.png" alt="달력"><br>
			<?php if($page == "group"){ ?>
			단체견적<br>받기
			<?php }else{ ?>
			실시간<br>예약
			<?php } ?>
		</a>
		<style type="text/css">
			@media (max-width: 979px) {
				#rtBookingBn {display:block}
			}
			@media (min-width: 980px) {
				#rtBookingBn {display:none}
			}
		</style>
		<?php	}	?>
	</div>

	<!-- 단체 문의 팝업 리뉴얼로 인해 기존 팝업 삭제-->
	<!--<div class="layer-pop-bg" id="group_opop" style="display:none;">
	<div class="ocean_pop">
		<div class="ocean_pop_top">
			<p>단체 예약 문의</p>
			<a href="#"class="close i-x" onclick="$('#group_opop').hide();"><img src="http://img.ocean2you.co.kr/close.png"></a>
		</div>
			<div class="ocean2_pop_up_contents">
				<ul>
					<li>
						<p class="tel_txt"><span class="tel_icon"><img src="http://img.ocean2you.co.kr/call.png"></span><span>단체 예약 문의 전용번호</span></p>
						<p class="call_txt">010-8844-0409</p>
					</li>
					<li class="txt_s_wr">
						<p class="txt_s">
							워크샵, 단합대회, 단체행사, 세미나, 야유회 등<br/>
							단체이용과 관련된 모든 상담이 가능합니다.
						</p>
					</li>							
				</ul>
			</div>
		</div>
	</div>
	</div>-->
	<?php
		//if($ebiz_ip == true && $page != "kendo"){
		if($page != "kendo"){
	?> 
		<!-- 171218 이용약관, 개인정보처리방침 -->
		<div class="layer-pop-bg privacy-bg" id="privacy-bg">
			<!--이용약관-->
			<div class="term-wrap cm-s">
				<div class="d-top"><strong>이용약관</strong><a href="javascript:;" class="a-i-x a-x" onclick="$('#privacy-bg, #privacy-bg .term-wrap').hide(); $('body').css('overflow', 'auto');"></a></div>
				<div class="d-cont">
					<div class="txt">
						<?php include_once(INC_DIR."/ocean2you/web-home/policy/policy_ver2.php"); ?>
					</div>
				</div>
			</div>
			
			<!-- 개인정보처리방침 -->
			<div class="privacy-wrap cm-s">
				<div class="d-top"><strong>개인정보처리방침</strong><a href="javascript:;" class="a-i-x a-x" onclick="$('#privacy-bg, #privacy-bg .privacy-wrap').hide(); $('body').css('overflow', 'auto');"></a></div>
				<div class="d-cont">
					<?php include_once(INC_DIR."/ocean2you/web-home/policy/privacy_ver2.php"); ?>
				</div>
			</div>
		</div>
	<?php } ?>

	<script type="text/javascript">
	$(window).load(function(){ 
		<?php if(!empty($_GET["go_scroll"])) { ?>
			go_scroll("<?=$_GET['go_scroll']?>");
		<?php } ?>
	});

	function go_scroll(id) {
		var offset = $("#"+id).offset();
		var num = 0;

		<?php if(USER_FLAG == "W") { ?>
			switch(id) {
				case "wayto": 
				case "tourist": 
					num = 100; break;
				default: num = 200; break;
			}
		<?php } else { ?>
			switch(id) {
				case "wayto":
				case "tourist":
					num = 78; break;
				default: num = 200; break;
			}
		<?php } ?>


		$('html, body').animate({scrollTop : offset.top-parseInt(num)}, 400);
	}

	$(function() {
		$(window).scroll(function (){
			if($(window).scrollTop() > 200){
				$("#bannertop_layer").hide();
				$.cookie("bannertop_chk", "Y", {domain: '<?=base_cookie?>', path : '/', expires:1});				
			} 
		});
	});
	</script>
	
	<script>
		/* 고객리뷰 페이지로 스크롤 */
		$(document).ready(function(){
        let page_url = window.location.href;
        let page_id = page_url.substring(page_url.lastIndexOf("?go-oc2-fun"));
        if(page_id=="?go-oc2-fun"){
            let header_height = $('.header').outerHeight();
            $('html, body').animate({
                scrollTop: $('#oc2-fun').offset().top -header_height
            }, 400);
        }
    });
	</script>
</body>
</html>

<?php
include_once(INC_DIR."/ocean2you/web-home/common/log_count.php"); 
include_once ("/home/ebizdev/ocean2you.co.kr/config/closedb.php");
?>