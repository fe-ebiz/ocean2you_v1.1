		<link rel="stylesheet" href="<?=ocean_gocss?>/mobile_layout_goco.css" type="text/css">
		<script type="text/javascript" src="<?=ocean_gojs?>/swiper.min.js"></script>
		<?php 
		//이미지
		$p_no = "332279";
		$img_qry = $go_db->queryfetch("select * from n_product_img where p_no = '517'");
		for($k = 1; $k < 13; $k++) {
			if(!empty($img_qry["out_img".$k])) {
				$img_array[] = "out_img".$k;
			}

			if(!empty($img_qry["in_img".$k])) {
				$img_array[] = "in_img".$k;
			}

			if(!empty($img_qry["add_img".$k])) {
				$img_array[] = "add_img".$k;
			}
		}
		$fimg = file_img;
		$rent_tel = "010-8817-1634";


		?>
		<!-- 190109 장단기숙박 -->
        <!--상품이미지-->
        <!--<div id="info_img">
            <div class="swiper-container">
				<div class="swiper-wrapper">
                    <?php 
					$total = (count($img_array) > 10) ? 10 : count($img_array); 
					for($j = 0;$j < $total;$j++) { 
						$img = $img_qry[$img_array[$j]];
						$img_full = $fimg."/".$img_qry[$img_array[$j]];

						$img_full = $go_util->cache_url($img_full, 1000);

						if(!empty($img_full)) {
					?>
					
					<div class="swiper-slide">
						<div style="background:url('<?=$img_full?>') 100% 100%; background-size:cover">
							<img src="<?=total_mimg?>/dummy_img.png" width="100%" />
						</div>
					</div>
					<?php 
						}
					}
					?>
			</div>
                <div class="swiper-scrollbar"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"><img src="<?=ocean_goimg?>/mobile/btn_Next3.png" style="width:38%"></div>
                <div class="swiper-button-prev"><img src="<?=ocean_goimg?>/mobile/btn_Prev3.png" style="width:38%;"></div>
                <input type="hidden" name="total_cnt" id="total_cnt" value="<?=$j+1?>">
            </div>

        </div>
        
        <!-- 상품소개 -->
        <!--<table id="product_info">
			<colgroup>
				<col width="25%">
				<col width="75%">
			</colgroup>
			<tbody>
				<tr>
					<td colspan="2" id="pruduct_title" style="border-bottom:0">
						<p class="pruduct_title_t">오션투유리조트속초설악비치호텔앤콘도 단기임대 / 장기숙박</p>
					</td>
				</tr>
				<tr>
					<td height="30" valign="top" colspan="2">
						<img src="<?=ocean_goimg?>/mobile/btn_detail_goSNS.jpg" width="190" height="32" alt="SNS 공유하기" class="detail_page">
						<p class="popup">
							<a href="javascript:share_sns('mobile_mail', '', '')" class="send_email"><img src="<?=ocean_goimg?>/mobile/sns_mail_s.jpg" width="30px" height="30" alt="이메일 보내기"></a>
						</p>
						<a href="javascript:share_sns('facebook', '', 'Gk1yEWkf')" class="send_facebook"><img src="<?=ocean_goimg?>/mobile/sns_fb_s.jpg" width="30px" height="30" alt="페이스북 보내기"></a>
						<?php	/*include	"./sns_mail_m.php";*/	?>
					</td>
					

					<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>		
				</tr>
				<tr>
					<td colspan="2" height="35" class="product_info_detailLink" onclick="javascript:location.href='/view/'" style="text-align:center;">
						객실 상세정보 보러가기 &gt;
					</td>
				</tr>
			</tbody>
		</table>-->
       
        <!-- 이용가능 ~ 예상요금 -->
        <!-- 190109 .type-2 클래스 추가 -->
        <table id="product_info" class="type-2">
            <colgroup>
                <col width="25%">
                <col width="75%">
            </colgroup>
            <tbody>
                <tr>
                    <!-- 스타일 수정 -->
                    <td colspan="2" height="35" class="product_info_title" style="padding:0; font-weight:bold; font-size:16px; text-align: center; color: #000; background: #fff">
                        7일부터 6개월까지 이용가능!
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="roomINFO" width="100%">
                            <colgroup>
                                <col width="40%">
                                <col width="30%">
                                <col width="30%">
                            </colgroup>
                            <tbody>
                            <tr>
                                <td class="tit">상품정보</td>
                                <td class="tit">숙박기간</td>
                                <td class="tit">특혜</td>
                            </tr>
                            <tr class="bd-b0">
                                <th rowspan="4">전 객실타입<br>(23평형)</th>
                                <th>7일
                                </th><td rowspan="4" style="font-weight:bold; letter-spacing: -1px; color:#ff0000;">
                                    <span style="font-size:14px;">공과금 일체 포함</span>
                                    <span style="display: block; font-size:10px;">(전기,수도,가스요금 등)</span>
                                </td>
                            </tr>
                            <tr class="bd-b0">
                                <th>14일</th>
                            </tr>
                            <tr class="bd-b0">
                                <th>1개월</th>
                            </tr>
                            <tr class="bd-b0">
                                <th>6개월</th>
                            </tr>
							<tr>
								<td colspan="4" class="ta-left">
									<p class="row">
										<span class="dot">※</span>
										<span class="txt">
											장/단기 이용시 주중은 저렴하게 제공기능하나, <span class="co-blue">주말(토요일, 5월5일, 12월31일 등 극성수일)에는 상시 만실</span>이며 평균 20만원 내외에 판매되는 점 고려 후 판단 부탁드립니다.
										</span>
									</p>
								</td>
								<style>
									#product_info.type-2 .roomINFO td .row { 
										padding: 0 5px; word-break: keep-all;
									}
									#product_info.type-2 .roomINFO td .row .dot {
										position: absolute; left: 5px;
									}
									#product_info.type-2 .roomINFO td .row .txt {
										display: inline-block; padding-left: 15px;
									}
									#product_info.type-2 .roomINFO td .row .co-blue {
										color: #0060FF;
									}
								</style>
							</tr>
                        </tbody>
                        </table>
                    </td>
                </tr>
				<?php
					$rent_room = array();
					$rent_room[0]["no"] = "2299";	$rent_room[0]["name"] = "디럭스 마운틴뷰";
					$rent_room[1]["no"] = "35735";	$rent_room[1]["name"] = "디럭스 오션뷰";
					$rent_p_no = "517";
					include "./rent_price_m.php";
				?>
                <tr>
                    <td height="40" colspan="2" align="center" class="info_title">소개</td>
                </tr>
                <tr>
                    <th height="37">주소</th>
                    <td>강원도 고성군 죽왕면 삼포해길 9</td>
                </tr>
                <tr>
                    <th height="37">홈페이지</th>
                    <td class="link">
                        <a href="http://www.ocean2you.co.kr" title="오션투유 홈페이지" target="_blank">http://www.ocean2you.co.kr</a>
                    </td>
                </tr>
                <tr>
                    <th height="37">건축규모</th>
                    <td>전 객실 23평형 / 오션뷰, 마운틴뷰, 콘도테라스</td>
                </tr>
                <tr>
                    <th height="37">총 객실수</th>
                    <td>241개 객실</td>
                </tr>
                <tr>
                    <th height="57">기본시설</th>
                    <td>화장실 / 싱크대 / 전기밥솥 / 인덕션 / 냉장고 / 에어컨 / TV
        </td>
                </tr>
                <tr>
                    <th height="57">부대시설</th>
                    <td>한식당 / 노래방 / 편의점 / 카페 / 세미나실 / 로비라운지 / 바베큐장</td>
                </tr>
                <tr>
                    <th height="57">주변안내</th>
                    <td>삼포해수욕장 / 설악워터피아 / 설악산 / 송지호 / 천학정 / 청간정 / 울산바위 / 건봉사 / 화진포 / 통일전망대 등</td>
                </tr>

                <tr>
                    <td height="40" colspan="2" align="center" class="info_title info_detail">상세정보 <img src="<?=ocean_goimg?>/mobile/icon_arrow_open.jpg" width="10"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!-- 호텔 상세이미지 -->
                        <img src="http://img.ocean2you.co.kr/lodgment/detail/01.jpg" alt="오션투유리조트소개이미지" style="width:400%">
                        <img src="http://img.ocean2you.co.kr/lodgment/detail/02.jpg" alt="오션투유리조트소개이미지" style="width:400%">
                        <img src="http://img.ocean2you.co.kr/lodgment/detail/03.jpg" alt="오션투유리조트소개이미지" style="width:400%">
                        <img src="http://img.ocean2you.co.kr/lodgment/detail/04.jpg" alt="오션투유리조트소개이미지" style="width:400%">
                        <img src="http://img.ocean2you.co.kr/lodgment/detail/05.jpg" alt="오션투유리조트소개이미지" style="width:400%">
                    </td>
                </tr>
                <tr>
                    <td height="40" colspan="2" align="center" class="info_title">인사말 <img src="<?=ocean_goimg?>/mobile/icon_arrow_open.jpg" width="10"></td>
                </tr>
                <tr>
                    <td colspan="2" class="info_text">
                        <div id="" class="text"><?=nl2br($hinfo["introduce"])?></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="btn_search"><a href="tel:<?=str_replace("-", "", $rent_tel)?>" title="전화걸기">전화문의 <?=$rent_tel?> </a></div>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- 상단 슬라이드 -->
        <script text="text/javascript">
            $(function() {

                var swiper = new Swiper('.swiper-container', {
                    scrollbar: '.swiper-scrollbar',	// 스크롤
                    scrollbarHide: false,	// 스크롤 안할때도 스크롤바 숨기지 않음
                    uniqueNavElements: true,
                    loop:true,
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',

                    autoplayDisableOnInteraction: false,
                    paginationBulletRender: function (index, className) { 
                        return '<span class="' + className + '"></span>'; 
                    }
                });

            });
            </script>
        <!--//190109 장단기숙박 -->

<div class="clr"></div>

<div style="" class="rWing rent">
    <a href="http://www.onbiz.co.kr" target="_blank"><img src="http://img.ocean2you.co.kr/lodgment/detail/bn_onbiz.png "alt="온비즈오피스이동"></a>
</div>

<script type="text/javascript">
var user_flag = "<?=device_flag?>";
function share_sns(gubun, e, pno) {
	switch(gubun) {
		case "mobile_mail":
			utils.basic_l_on("email_pop");
			navigate.move("email_pop", "id");

			break;
		
		case "mobile_share":
			if($("#share_pop").hasClass("pop_on") == false) {
				on("#share_pop");
			}
			$("#email_box").hide();
			$("#mobile_box").show();
			$("#share_email").removeClass("email_on");
			$("#share_mobile").addClass("mobile_on");
			$("#share_pop").addClass("pop_on");
			$("#share_pop").css("z-index","100");
			break;
		
		case "twitter":
		case "facebook":
		case "kakao":
			if(user_flag == "ios") {
				location.href="<?=base_url?>/rent/sns_click.php?p_no="+pno+"&sns_val="+gubun;
			} else { 
				utils.pop_open("<?=base_url?>/rent/sns_click.php?p_no="+pno+"&sns_val="+gubun+"", "sns");
			}
			break;
	}
}
</script>