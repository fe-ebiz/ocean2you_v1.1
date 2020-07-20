<?php
if($_GET["room"] >= 1 && $_GET["room"] <= 6) {
	include_once (INC_DIR."/ocean2you/web-home/facil/room_detail.php");
	return;
}
?>
<div class="facil-wrap" id="setTop">
	<div class="container" id="facil-box">
		<section class="facil-2 on">
			<h3>Accommodations</h3>
			<p class="p0">오션투유 리조트만의 편안하고 아늑한 객실에서 격이 다른 휴식과 여유를 경험해보세요.</p>
			<div class="mg-"></div>

			<div class="bn-amenity-area">
				<div class="bn-box">
					<img src="http://img.bscondo.co.kr/gallery/amenity.png" alt="어메니티" class="bn-img">
					<p class="txt">
                        <span class="c-blue">최상급 GALRTEM 어메니티 제공!</span><br>
                        오션투유는 해외 유수의 호텔에 공급되는 갈르템 리프레쉬 보타니컬 라인 어메니티를 제공해 드리고 있습니다.<br>
                        <span class="hidden-xs">엄격한 품질의</span> 최고급 어메니티로 휴식의 품격을 전해드립니다.
					</p>
			   </div>
			</div>
            
			<ul class="fc-list" id="room-list">
				<!--171115 내용추가 및 클래스 수정-->
				<li class="nth-1">
					<h4>리노베이션 오션뷰 테라스 / 오션 사이드뷰 테라스</h4>
					<div class="bxBox">
                        <ul class="bxS">
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_01.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_02.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_03.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_04.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_05.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_06.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_07.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_08.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_09.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_10.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_11.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_12.jpg" alt="리노베이션코도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ov_tera_13.jpg" alt="리노베이션코도"></li>
                        </ul>
						<div class="txt-box">
							<p class="p1">리노베이션 오션뷰 테라스 / 오션 사이드뷰 테라스</p>
							<p class="p2"><span class="xs-block">바다가 한폭의 그림처럼 펼쳐지며,</span> 원목의 테라스가 있는 프라이빗한 콘도형 디럭스룸 </p>
							<p class="btn-row">
								<a href="/facil/?room=1" class="more-a"><span class="s0">자세히보기</span></a>
								<a href="<?=base_url?>/view/" class="more-a"><span class="s0">예약하기</span></a>
							</p>
						</div>
					</div>
				</li>
				<!-- 180710 카라반 호텔 추가 -->
				<!-- 190107 카라반 호텔 비노출 --><?php	/*191017 여행 유미란대리님 요청으로 비노출*/	?>
				<!--<li class="nth-4">
					<h4>카라반 호텔</h4>
					<div class="bxBox">
						<ul class="bxS">
							<li><img src="<?=base_img?>/facil/caravan_01.jpg" alt="카라반 호텔"></li>
							<li><img src="<?=base_img?>/facil/caravan_02.jpg" alt="카라반 호텔"></li>
						</ul>
						<div class="txt-box">
							<p class="p1">카라반 호텔</p>
							<p class="p2"><span class="xs-block">낭만 가득한 바다 풍경 속에서</span> 바다 내음과 햇살에 반짝이는 백사장, 그리고 카라반! </p>
							<a href="http://ocean2you.co.kr/view/" class="more-a"><span class="s0">예약하기</span></a>
						</div>
					</div>
				</li>-->
				<li class="nth-2">
					<h4>오션투유 리노베이션 콘도</h4>
					<div class="bxBox">
						<ul class="bxS">
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_01.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_02.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_03.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_04.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_05.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_06.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_07.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_08.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_09.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_10.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_11.jpg" alt="리노베이션콘도"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_co_ov_12.jpg" alt="리노베이션콘도"></li>
                        </ul>
						<div class="txt-box">
							<p class="p1">리노베이션 콘도 오션뷰</p>
							<p class="p2"><span class="xs-block">고급스러운 색채와 편안한 분위기의 침실,</span> 넓은 공간 활용이 매력적이며 취사가 가능한 콘도형 룸</p>
							<p class="btn-row">
								<a href="/facil/?room=2" class="more-a"><span class="s0">자세히보기</span></a>
								<a href="<?=base_url?>/view/" class="more-a"><span class="s0">예약하기</span></a>
							</p>
						</div>
					</div>
				</li>
				<li class="nth-2">
					<h4>오션투유 리노베이션 호텔</h4>
					<div class="bxBox">
						<ul class="bxS">
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_01.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_02.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_03.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_04.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_05.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_06.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_07.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_08.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_09.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_10.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_11.jpg" alt="리노베이션호텔"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_re_ho_ov_12.jpg" alt="리노베이션호텔"></li>
                        </ul>
						<div class="txt-box">
							<p class="p1">리노베이션 호텔 오션뷰</p>
							<p class="p2"><span class="xs-block">편안하고 아늑한 분위기의 침실과</span> 독립적 공간 활용이 매력적인 호텔형 오션뷰 룸</p>
							<p class="btn-row">
								<a href="/facil/?room=3" class="more-a"><span class="s0">자세히보기</span></a>
								<a href="<?=base_url?>/view/" class="more-a"><span class="s0">예약하기</span></a>
							</p>
						</div>
					</div>
				</li>
				<li class="nth-3 condo">
					<h4><span class="hidden-xs">오션투유</span> <span class="show-xs-inb">스탠다드 / 슈페리어 / 디럭스</span> 콘도 오션뷰</h4>
					<div class="bxBox">
						<ul class="bxS">
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_01.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_02.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_03.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_04.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_05.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_06.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_07.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_08.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_09.jpg" alt="일반콘도오션뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_ov_10.jpg" alt="일반콘도오션뷰"></li>
                        </ul>
						<div class="txt-box">
							<p class="p1">스탠다드 / 슈페리어 / 디럭스 콘도 오션뷰</p>
							<p class="p2">
								<span class="xs-block">편안한 인테리어와 아름다운</span> 삼포해변이 한눈에 보이는 콘도형 오션뷰 룸<br>
								23평/ 4인실(최대7명)
							</p>
							<p class="btn-row">
								<a href="/facil/?room=4" class="more-a"><span class="s0">자세히보기</span></a>
								<a href="<?=base_url?>/view/" class="more-a"><span class="s0">예약하기</span></a>
                            </p>
                            <p class="p3 hidden-xs">
                                현재 <span class="hidden-xs">오션투유는</span> 고객님의 편의를 위해 전 객실을 <span class="hidden-xs">꾸준하게</span> 리모델링 중입니다.<br class="hidden-xs">
                                리모델링의 완료 단계에 따라 스탠다드와 디럭스로 구분 정의하고 있습니다.
                            </p>
						</div>
                    </div>
                    <div class="cmt-box hidden-sm-and-up">
                        <p class="p3">
                            현재 <span class="hidden-xs">오션투유는</span> 고객님의 편의를 위해 전 객실을 <span class="hidden-xs">꾸준하게</span> 리모델링 중입니다.<br class="hidden-xs">
                            리모델링의 완료 단계에 따라 스탠다드와 디럭스로 구분 정의하고 있습니다.
                        </p>
                    </div>
                </li>
                <li class="nth-3 condo">
                    <h4><span class="hidden-xs">오션투유</span> <span class="show-xs-inb">스탠다드 / 슈페리어 / 디럭스</span> 콘도 마운틴뷰</h4>
                    <div class="bxBox">
						<ul class="bxS">
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_01.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_02.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_03.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_04.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_05.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_06.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_07.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_08.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_09.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_10.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_11.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_12.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_13.jpg" alt="일반콘도마운틴뷰"></li>
                            <li><img class="img" src="<?=base_img?>/facil/roomtype_st_su_dx_mv_14.jpg" alt="일반콘도마운틴뷰"></li>
                        </ul>
						<div class="txt-box">
                            <p class="p1">스탠다드 / 슈페리어 / 디럭스 콘도 마운틴뷰</p>
							<p class="p2">
								<span class="xs-block">편안한 인테리어와 아름다운 설악산의</span> 웅장함이 보이는 콘도형 마운틴뷰 룸<br>
								23평/ 4인실(최대7명)
							</p>
							<p class="btn-row">
								<a href="/facil/?room=5" class="more-a"><span class="s0">자세히보기</span></a>
								<a href="<?=base_url?>/view/" class="more-a"><span class="s0">예약하기</span></a>
                            </p>
                            <p class="p3 hidden-xs">
                                현재 <span class="hidden-xs">오션투유는</span> 고객님의 편의를 위해 전 객실을 <span class="hidden-xs">꾸준하게</span> 리모델링 중입니다.<br class="hidden-xs">
                                리모델링의 완료 단계에 따라 스탠다드와 디럭스로 구분 정의하고 있습니다.
                            </p>
						</div>
                    </div>
                    <div class="cmt-box hidden-sm-and-up">
                        <p class="p3">
                            현재 <span class="hidden-xs">오션투유는</span> 고객님의 편의를 위해 전 객실을 <span class="hidden-xs">꾸준하게</span> 리모델링 중입니다.<br class="hidden-xs">
                            리모델링의 완료 단계에 따라 스탠다드와 디럭스로 구분 정의하고 있습니다.
                        </p>
                    </div>
                </li>
			</ul>
				<!--171024 오션투유 자세히 보기 추가-->
				<section class="facil-1" style="margin-top:100px;">
					<?php include (INC_DIR."/ocean2you/web-home/facil/budae.php"); ?>
					<!-- <div class="d-area-2" id="d-area-2"><a href="javascript:$(window).scrollTop(0);" class="btn-a">오션투유 리조트 객실 자세히 보기</a></div> -->
				</section>

				<!--171024 오션투유 자세히 보기 추가-->
				<!--<div class="d-area-1" id="d-area-1"><a href="javascript:;" class="btn-a">오션투유 리조트 부대시설 자세히 보기</a></div>
				<section class="facil-1">
					<?php //include (INC_DIR."/ocean2you/web-home/facil/budae.php"); ?>
					<div class="d-area-2" id="d-area-2"><a href="javascript:$(window).scrollTop(0);" class="btn-a">오션투유 리조트 객실 자세히 보기</a></div>
				</section>-->
		</section>

		<!-- <div class="area-arctic cf">
			<div class="d-1">
				<img src="<?=base_img?>/facil/arctic.jpg" alt="북극보호마크" class="hidden-xs">
				<img src="<?=base_img?>/facil/arctic_m.jpg" alt="북극보호마크" class="show-xs">
			</div>
			<div class="d-2">
				환경 운동가인 비비안 웨스트우드(Vivienne Westwood)의 북극보호(Save The Arctic) 캠페인을 적극 지지하는 저희 리조트는 일회용품으로 이뤄지는 객실 어메니티를 제공하지 않는 방법으로 환경보호에 동참하고 있습니다. <br>
				고객님의 이해와 협조를 부탁 드립니다. 감사합니다.
			</div>
		</div> -->

		<?php /* 1903011 고그린 캠페인 추가 */ ?>
		<div class="area-arctic green cf">
			<div class="d-1">
				<img src="<?=base_img?>/facil/gogreen.png" alt="Go Green">
			</div>
			<div class="d-2">
				<p class="fc-green">
					오션투유는 쓰레기 및 플라스틱 배출을 최소화하는 환경운동에 동참하고 있습니다.<br>
					운영에 따른 포장재, 일회용품 사용을 지양하고 재활용 분리수거 구역을 설정하여 실질적인 환경 보호에 동참하고 있습니다.<br>
					일회용품 사용 안하기와 같은 작은 생활 습관에서부터 시작하는 친환경 경영 가치 창출을 위해 노력하겠습니다.
				</p>
				<p>
					저희 리조트는 2박까지의 객실이용시 객실 정비를 해드리지 않고 있습니다.<br>
					단, 3박 이상 투숙시 객실 정비 1회 무료 진행 (프론트에 사전 요청 필수)<br>
					어메니티(객실용품) 및 수건은 인원수에 맞춰 추가로 제공해 드립니다.<br>
					사용하신 어메니티 및 수건의 교체가 필요하신 경우 프론트에서 1:1로 교환하여 드립니다.
				</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function() {
	<?php if(!empty($_GET["facil_go"])) { ?>

		$("#facil-tab > li").removeClass("on");		
		
		var num_id = "<?=$_GET['facil_go']?>";
		var id_chk = num_id.split("_");

		if(id_chk[0] == "etc") {					
			// 부대시설
			$("#facil-tab > .nth-2").addClass("on");					
			$(".facil-1").addClass("on");	
			var offset = $("#"+id_chk[0]+"_"+id_chk[1]).offset();
		} else { 
			// 객실안내
			$("#facil-tab > .nth-1").addClass("on");					
			$(".facil-2").addClass("on");		

			var offset = $("#facil-box").offset();
		}
	
		$('html, body').animate({scrollTop : offset.top}, 400);

	<?php } else { ?>
		// 객실안내(기본)
		$("#facil-tab > .nth-1").addClass("on");					
		$(".facil-2").addClass("on");		
	<?php } ?>

});
</script>
