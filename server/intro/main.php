
		
<section class="resort" id="setTop">
	<div class="container" >
		<figure class="resortImg"><img src="<?=base_img?>/intro/resort.jpg" alt="리조트사진"></figure>
		
		<h3 class="p0">해변의 명물인 호미섬의 낭만이 있는곳 <?=SITE_NAME_K?></h3>
		<div class="mg-"></div>
		<p class="p1">
		천혜의 절경, 삼포해수욕장을 배경으로 한 우리 오션투유는<br class="hidden-xs">
		전 객실 23평형의 250객실로 수련회, 단합대회, 야유회 등 학교 및 기업의 단체 숙박에 최적의 장소입니다.
		</p>

		<p class="p2">
		오션투유리조트에는 워크숍, 세미나, 교육연수 등 단체 활동을 위한 다양한 부대시설이 준비되어 있습니다.<br>
		지하 1층 125평의 소 연회장, 지상 2층 145평의 대 연회장, 지상1층에 마련된 200명이 앉을 수 있는 255평의 바비큐장 뿐 아니라<br>
		특급호텔 30년 근무 경력의 조리장 3명이 근무하는 품격 있는 뷔페 서비스를 저렴한 가격으로 이용 할 수 있습니다.
		</p>
	
		<!-- <a href="<?=base_url?>/view/" class="rv-a"><span class="s0">예약하기</span><img src="<?=base_img?>/i_gt.png" alt="" class="gt"></a> -->
		<div class="btn-area">
				<?php // 171218단체예약문의 오픈?>
				<a href="<?=base_url?>/group/" class="rv-a a1"><img class="i_user" src="http://img.ocean2you.co.kr/renew/i_user.png" alt=""><span class="s0">단체예약 문의 하기</span><img src="http://img.ocean2you.co.kr/renew/i_gtB.png" alt="" class="gt"></a>

				<!--<a href="#" onclick="$('#group_opop').show();$('#bannertop_layer').css({'z-index':'120'});" class="rv-a a1"><img class="i_user" src="http://img.ocean2you.co.kr/renew/i_user.png" alt=""><span class="s0">단체예약 문의 하기</span><img src="http://img.ocean2you.co.kr/renew/i_gtB.png" alt="" class="gt"></a>-->
			<a href="<?=base_url?>/view/" class="rv-a"><span class="s0">예약하기</span><img src="http://img.ocean2you.co.kr/renew/i_gt.png" alt="" class="gt"></a>
		</div>
	</div>
</section>
<!--
<section class="oc2point">
	<div class="container">
		<ul class="ul0 clr">
			<li class="nth-1" id="intro_etc1"><img src="<?=base_img?>/intro/clam.jpg" alt="은빛모래"></li>
			<li class="l-1 nth-2">
				<div class="txt-box">
					<p class="p0">Oceantoyou Resort Point 1.</p>
					<h3>반짝이는 은빛 모래 속 가득한 보물</h3>
					<p class="p1">
						<span class="xs-inline"><?=SITE_NAME_K_short?> 앞에 펼쳐진 삼포해변은 반짝거리는 아름다운</span>
						모래사장으로 유명합니다.
					</p>
					<p class="p1">
						이 삼포해변에는 숨은 보물을 찾는 재미로 가득합니다.
					</p>
					<p class="p1">
						<span class="xs-inline">삼포 해변의 고운 백사장이 숨겨놓은 보물, 조개를 잡으며 즐거운</span>
						하루를 만들어보세요.
					</p>
				</div>
			</li>
			===190125 도서 추가====
			<li class="book-list clr">
				<div class="book-area">
				   <div class="book-box clr">
						<figure class="img-book"><img src="http://img.ocean2you.co.kr/renew/evt_book.jpg" alt="도서 : 죽기전에 꼭 가봐야할 국내 여행 1001"></figure>
						<div class="book-txt-box">
							<p class="p-0">베스트 여행서에 소개된 ‘삼포해수욕장’</p>
							<p class="p-1">여행서 '죽기 전에 꼭 가봐야 할 국내여행 1001'</p>
							<p class="p-2">
								해당화와 울창한 소나무 솔숲으로 유명한 삼포해수욕장은 길이 800m, 폭 75m가 되는 모래사장과, <br class="hidden-xs">
								경사도 2~3도의 바닷가는 물깊이가 1~2m 정도로서 어느 곳에서도 해수욕의 즐거움을 한껏 누릴 수 있습니다.
							</p>
							<a href="http://sampobeach.co.kr/" target="_blank" class="btn-link" title="페이지 이동">삼포해수욕장 공식홈페이지<span class="ic-rArrow"></span></a>
						</div>
				   </div>
				</div>
			</li>
			<li class="nth-3-0 xs-visible" <?php if(USER_FLAG == "M") { echo "id=\"intro_etc2\""; } ?>><img src="<?=base_img?>/intro/coast.jpg" alt="탁트인해안선"></li>
			<li class="l-1 nth-3" <?php if(USER_FLAG == "W") { echo "id=\"intro_etc2\""; } ?>>
				<div class="txt-box">
					<p class="p0">Oceantoyou Resort Point 2.</p>
					<h3>별빛이 쏟아지는 환상적인 뷰</h3>
					<p class="p1">
						<?=SITE_NAME_K_short?> 오션뷰에서 바라본, 탁트인 해안선은<br>
						꽉막힌 가슴을 시원하게 만들어 줍니다.
					</p>
					<p class="p1">
						하얀 백사장 위로 매일밤 쏟아지는 별빛을 볼 수 있는<br>
						<span class="xs-inline"><?=SITE_NAME_K_short?>는 매일밤 당신을 환상적인 한폭의 그림 속으로</span>
						초대합니다.
					</p>
				</div>
			</li>
			<li class="nth-4 xs-hidden"><img src="<?=base_img?>/intro/coast.jpg" alt="탁트인해안선"></li>
		</ul>
	</div>
</section>
-->


<!--오셔투유 포인트-->
<section class="oc2-point">
	<div class="point-container">
		<ul class="point-ul">
			<li>
				<div class="point-img-box img-left"><img src="http://img.ocean2you.co.kr/renew/intro/clam.jpg" alt="은빛모래"></div>
				<div class="txt-box">
					<p class="p00">Oceantoyou Resort Point 1.</p>
					<h3>반짝이는 은빛 모래 속 가득한 보물</h3>
					<p>
						<span class="xs-inline">오션투유 리조트 앞에 펼쳐진 삼포해변은 반짝거리는 아름다운</span>
						모래사장으로 유명합니다.
					</p>
					<p>
						이 삼포해변에는 숨은 보물을 찾는 재미로 가득합니다.
					</p>
					<p>
						<span class="xs-inline">삼포 해변의 고운 백사장이 숨겨놓은 보물, 조개를 잡으며 즐거운</span>
						하루를 만들어보세요.
					</p>
				</div>
			</li>
			<li>
				<div class="txt-box">
					<p class="p00">Oceantoyou Resort Point 2.</p>
					<h3>별빛이 쏟아지는 환상적인 뷰</h3>
					<p>
						오션투유 리조트 오션뷰에서 바라본, 탁트인 해안선은<br>
						꽉막힌 가슴을 시원하게 만들어 줍니다.
					</p>
					<p>
						하얀 백사장 위로 매일밤 쏟아지는 별빛을 볼 수 있는<br>
						<span class="xs-inline">오션투유 리조트는 매일밤 당신을 환상적인 한폭의 그림 속으로</span>
						초대합니다.
					</p>
				</div>
				<div class="point-img-box img-right" ><img class="img-correction" src="http://img.ocean2you.co.kr/renew/intro/coast.jpg" alt="탁트인해안선"></div>
			</li>
		</ul>
		<div class="book-introduce">
			<div class="book-img-box"><img src="http://img.ocean2you.co.kr/renew/evt_book.jpg" alt="도서 : 죽기전에 꼭 가봐야할 국내 여행 1001"></div>
			<div class="book-title-box">
				<h4>베스트 여행서에 소개된 ‘삼포해수욕장’</h4>
				<p class="p00">여행서 '죽기 전에 꼭 가봐야 할 국내여행 1001'</p>
			</div>
			<div class="book-txt-box">
				<p>
					해당화와 울창한 소나무 솔숲으로 유명한 삼포해수욕장은 길이 800m, 폭 75m가 되는 모래사장과, <br class="hidden-xs">
					경사도 2~3도의 바닷가는 물깊이가 1~2m 정도로서 어느 곳에서도 해수욕의 즐거움을 한껏 누릴 수 있습니다.
				</p>
			</div>
			<a class="btn-go-sampo" href="http://sampobeach.co.kr/" target="_blank" class="btn-link" title="페이지 이동">삼포해수욕장 공식홈페이지 <span class="ic-rArrow"></span></a>
		</div>
	</div>
</section>
<!--//-->
<!--오션튜유 즐기기!!-->
<section class="oc2-fun" id="oc2-fun">
	<div class="fun-container">
		<div class="fun-title-box">
			<h3>슬기로운 오션투유 10배 즐기기!</h3>
			<p class="p-sub">조개잡이, 조개캐기 등의 체험은 무료</p>
			<div class="title-bar"></div>
			<p class="p-sub">게, 멍개 해삼, 전복, 가리비, 낙지, 문어, 멸치, 미역새우, 비단조개, 모시조개, 불가사리가 잡히는 이곳 삼포해변</p>
			<p class="p-tag">
				#오션뷰 #씨뷰 #바다뷰 #고래뷰 #리모델링객실</span>
				<br>
				<span>#펫룸 #강아지동반 #애견동반여행 #애견동반리조트 #반려견동반호텔</span>
			</p>
		</div>
		<ul class="fun-ul">        
			<li>
				<a href="https://blog.naver.com/bunddo/221547032286" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review01.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">강원도 고성 삼포해변, 올해 첫 조개수확</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>조개잡이, 조개캐기 체험</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>검정고무신</span></p>
						</div>
					</div>
				</a>
			</li><li>
				<a href="https://blog.naver.com/ggujibbong/221329866263" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review02.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">아이들과 조개잡이 하기 좋은 곳 강원도 고성, 삼포해수욕장</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>비단조개잡이, 물놀이</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>주도와</span></p>
						</div>
					</div>
				</a>
			</li><li>
				<a href="https://blog.naver.com/ktmbada/221404850019" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review03.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">강원도 고성여행, 삼포해수욕장 오션투유리조트</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>서핑, 게잡이, 게낚시, 일출, 캠프</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>아스크라</span></p>
						</div>
					</div>
				</a>
			</li><li>
				<a href="https://blog.naver.com/queen77577/221607348275" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review04.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">강원도 고성 삼포해수욕장 당일치기 조개잡기 추천!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>조개잡이. 조개캐기 체험, 여름해변</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>날아라마녀씨</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/jeseram/221301339747" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review05.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">삼포해수욕장 멸치출몰 + 조개잡기, 미역따기</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>멸치, 조개, 미역따기, 물놀이, 불꽃놀이</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>미니둥이</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/fsglcahu/221978147288" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review06.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">속초 오션투유리조트 후기!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>조개잡이, 넓은객실, 풍부한부대시설</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>문</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/heetai0417/221975623708" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review07.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">애견과 함께 1박2일 고성(속초)여행</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>애견동반, 펫룸, 바베큐, 라바짜, 조식</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>heetai0417</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/wlyssj/221762692693" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review08.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">아이들과 함께 급으로떠난 강원여행 코스추천</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>야경, 룸서비스, 불꽃놀이, 청결한객실</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>앙쥬랑공간스케치</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/bunddo/221555700035" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review09.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">속초 가족여행 먹방투어</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>룸서비스, 조개잡이, 주변관광</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>검정고무신</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/ggujibbong/221331180284" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review10.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">삼포해변 오션투유리조트 &amp; 조식 이용후기</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>풍부한조식, 다연레스토랑</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>주도와</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://fsglcahu.blog.me/221783028297" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review11.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">오션투유리조트 1박 후기 만족만족</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>오션뷰, 조식메뉴</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>문</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/sst0920/221721176422" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review12.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">가족 호캉스는 오션투유리조트 강추!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>호캉스, 좋은객실, 오션뷰</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>공구지기</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/fjvfeewt/221741460365" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review13.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">오션투유리조트 가성비 최고!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>무인판매기, 넓은객실, 오션뷰</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>개냥이세상</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/surrr4/221755313881" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review14.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">강원도 고성 삼포해변 오션투유리조트</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>겨울여행, 오션뷰, 넓은객실</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>청담하이푸클리닉</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/lsukhee0311/221726793093" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review15.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">고성 오션투유리조트 오션뷰 엄지척!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>넓은객실, 오션뷰, 룸서비스</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>다나음한의원</span></p>
						</div>
					</div>
				</a>
			</li><li style="display: list-item;">
				<a href="https://blog.naver.com/lthddd/221753950961" target="_blank">
					<div class="fun-img-box">
						<img src="http://img.ocean2you.co.kr/renew/review/review16.jpg" alt="이미지">
					</div>
					<div class="fun-txt-box">
						<div class="fun-txt-title">
							<h5><span class="span-title">오션투유리조트 마운틴뷰 이용후기!</span><span class="span-review"> &nbsp;[리뷰보기]</span></h5>
						</div>
						<div class="txt-small txt-keyword">
							<p class="p-tit"><span>키워드</span></p>
							<p class="p-content"><span>마운틴뷰, 리모델링, 넓은객실</span></p>
						</div>
						<div class="txt-small txt-blogger">
							<p class="p-tit"><span>블로거</span></p>
							<p class="p-content"><span>미소</span></p>
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>
</section>
<script>
	$(document).ready(function(){
		//오션튜유 즐기기 스크롤 보기
		let hideList = $('.oc2-fun .fun-ul>li:nth-of-type(n+5)');
		//리스트 숨기기
		hideList.hide();
		let scrollShow = $('.oc2-fun .fun-ul>li:nth-of-type(4)');
		//스크롤 바텀기준
		if(scrollShow.length > 0){
			let scrollShowPos = $(document).height() - scrollShow.offset().top - scrollShow.height() - 180;
		
			//스크롤시 작동
			$(window).on('scroll',function(){
				let currentScroll = $(document).height() -$(window).height() - $(window).scrollTop();
				//리스트 보이기
				if(scrollShowPos > currentScroll){
					hideList.show();
				}
			});
		}
	});
</script>
