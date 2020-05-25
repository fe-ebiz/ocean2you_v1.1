<?php

include_once ("/home/ebiztour/brand/config/config.php");
include_once (INC_DIR."/class/go_basic.class.php");

$ebiz_ip = $go_util->ebiz_ip($_SERVER["REMOTE_ADDR"]);
$hinfo = $go_db->queryfetch("select * from n_product where no='".p_no."'");
$img_qry = $go_db->queryfetch("select * from n_product_img where p_no = '".p_no."'");
$sinfo2 = $go_db->queryfetch("select * from site_info_sub where sflag='".S_FLAG."'");

$travle_chk = array("OCEAN", "CIS", "MAY", "HYUN", "HOTELM", "GANG");	//주변여행지 있는 시설
$logoimg = ($site_info_sub["img_dchk"] == "N") ? "logo/logo_b_".site_buns.".png" : "logo_b.png";
$etctitle = (in_array(S_FLAG, $travle_chk)) ? "주변여행지" : "객실안내";
$etcclick = (in_array(S_FLAG, $travle_chk)) ? "travel_etc" : "room_imgscroll";

$is_page = $go_util->XORDecode($_GET["dd"]);
$top_show_st = "Y";
// 상단 메뉴내용 제거(ex 모바일 결제하기 페이지)
$no_top_arr = array("reservation_01", "reservation_03", "list2", "write", "faq", "view");
if((in_array($is_page, $no_top_arr) || $page == "landing" || ($page == "customer" && !empty($_GET["tgubun"]))) && USER_FLAG == "M") {
	$top_show_st = "N";
}


?>

<!DOCTYPE html>
<!--[if IE 8]><html lang="ko-KR" class="no-js ie8 lt-ie10"><![endif]-->
<!--[if IE 9]><html lang="ko-KR" class="no-js ie9 lt-ie10"><![endif]-->
<!--[if !IE]><!-->
<html lang="ko-KR">
	<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
	<meta name="description" content="<?=site_description?>">
	<title><?=SITE_NAME_K?></title>
	
	<meta property="og:locale" content="ko_KR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?=SITE_NAME_K?>">
	<meta property="og:description" content="<?=site_description?>">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="<?=SITE_NAME_K?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="<?=site_description?>">
	<meta name="twitter:title" content="<?=SITE_NAME_K?>">

	<meta http-equiv="Pragma" content="no-cache"> 
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT"> 
	<meta http-equiv="Expires" content="-1"> 

	<!--<link rel="canonical" href="도메인">-->
	<?php if($page != "kendo") { ?>
	<link rel="stylesheet" href="/common/fonts/NanumBarunGothic/nanumbarungothic.css">	
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
	<?php } else { ?>
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosanskr.css">
	<?php 
	}
	$page_no = array("view", "reserve", "customer", "history");
	if(!in_array($page, $page_no)) { ?>	
	<link rel="stylesheet" href="<?=base_css?>/reset_custom.css?ver=<?=date("YmdHis")?>">
	<?php } ?>


	<?php if($page == "main") { ?>
	<link rel="stylesheet" href="<?=base_css?>/jquery.mb.YTPlayer.css?ver=<?=date("YmdHis")?>">
	<?php } ?>

	<?php 
	$default_parr = array("view", "reserve", "customer", "history", "landing");
	if(in_array($page, $default_parr)) { ?>

		<?php if(USER_FLAG == "M") { ?>
			<link rel="stylesheet" href="<?=total_css?>/moblie_reset.css" type="text/css">
			<link rel="stylesheet" href="<?=total_css?>/mobile_layout3.css" type="text/css">
			<link rel="stylesheet" href="//static.go.co.kr/css/totalmobile.css?ver=<?=date("YmdHis")?>" type="text/css">
		<?php } else { ?>
			<link rel="stylesheet" type="text/css" href="<?=total_css?>/reset.css">
			<link rel="stylesheet" type="text/css" href="<?=total_css?>/layout2.css">
			<link rel="stylesheet" href="//static.go.co.kr/css/totalweb.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="http://static.ocean2you.co.kr/css/layout_init.css?ver=20170904133210">
		<?php } ?>
	<?php } ?>


	<?php	//171212 안쓰는거같아 jquery-ui 주석	?>
	<link rel="stylesheet" href="<?=total_css?>/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?=total_css?>/swiper.min.css?ver=<?=date("YmdHis")?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.css?ver=<?=date("YmdHis")?>">
	<?php	if(USER_FLAG == "W") {	?>
	<link rel="stylesheet" href="<?=ocean_gocss?>/faq-v1.1.css" />
	<?php	}	?>
	<?php if($page != "kendo") { ?>
	<link rel="stylesheet" href="<?=base_css?>/common.css?ver=<?=date("YmdHis")?>">
	<?php } ?>


	<?php
	// 페이지별로 css, js 다름(순서 변경 x)
	switch($page) { 
		case "main": $default_css = "main/init"; $default_js = "main/init"; break;	// 메인
		case "intro": $default_css = "intro/init"; $default_js = ""; break;	// 소개
		case "package": $default_css = "package/init"; $default_js = "package/init"; break; // 패키지
		case "facil": $default_css = "facil/init"; $default_js = "facil/init"; break; // 시설안내
		case "event": $default_css = "event/init"; $default_js = "event/init"; break; // 이벤트/축제
		case "view":
		case "reserve":
		case "customer":
		case "rent":
			// 상세, 결제하기 
			if(USER_FLAG == "M") {
				if($top_show_st == "N") {
					$default_css = "";	// 모바일 결제하기 페이지에서는 신규 CSS 제거
				} else { 
					$default_css = "reservation/init_m"; 
				}
			} else { 			
				$default_css = "reservation/init"; 
			}

			$default_js = ""; 
			break; 
		case "member": $default_css = "member/init"; $default_js = ""; break; // 회원
		case "history": // 예약내역조회
				if(USER_FLAG == "M") {
					$default_css = "history/init_m";
					$default_js = "history/init_m"; 
				} else { 
					$default_css = "history/init";
					$default_js = ""; 
				}
			break;
		case "group": $default_css = "group/init"; $default_js = "group/init"; break; // 단체예약
		case "amenities": case "dining": $default_css = "amenities/init"; $default_js = "facil/init"; break; // 시설안내
		case "tourist": $default_css = "tourist/init"; $default_js = "tourist/init"; break; // 단체예약
		case "kendo": $default_css = "landing-brand/init"; $default_js = "landing-brand/init"; break; // 단체예약
		default: $default_css = ""; $default_js = ""; break;
	} 	

	if(!empty($default_css)) { ?>
		<link rel="stylesheet" href="<?=base_css?>/<?=$default_css?>.css?ver=<?=date("YmdHis")?>">
	<?php } ?>

	
	<script type="text/javascript" src="<?=base_js?>/jquery-1.10.2.min_new.js?ver=<?=date("YmdHis")?>"></script>
	<script src="<?=base_js?>/jquery.easing.min.js?ver=<?=date("YmdHis")?>"></script>
	<script type="text/javascript" src="<?=goco_static?>/js/jwSlide_ver2.js"></script>
	<script type="text/javascript" src="<?=goco_js?>/swiper.min.js"></script>

	<!-- totalweb -->
	<link rel="stylesheet" href="http://static.ocean2you.co.kr/css/renew/totalweb.css">
	<script src="http://static.ocean2you.co.kr/js/renew/totalweb.js"></script>

	<?php if($top_show_st == "Y" && $page != "kendo") { ?>
	<script src="<?=base_js?>/common_ocean.js?ver=<?=date("YmdHis")?>"></script>
	<?php } ?>

	<?php if(!empty($default_js)) { ?>
		<script src="<?=base_js?>/<?=$default_js?>.js?ver=<?=date("YmdHis")?>"></script>		
	<?php } ?>

	<?php if(USER_FLAG == "M") { ?>
		<script type="text/javascript">

		$( document ).on( "mobileinit", function() {
		  $.extend( $.mobile , {
			autoInitializePage: false,
		  });
		});

		var burl = "<?=base_domain?>";
		var agent = "<?=USER_FLAG?>";
		</script>

		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script type="text/javascript" src="<?=goco_static?>/js/iscroll.js?ver=<?=date("YmdHis")?>"></script>
		<script type="text/javascript" src="<?=total_js?>/jquery.raty.js"></script>
		<script type="text/javascript" src="<?=total_js?>/all_common_ocean.js?ver=<?=date("YmdHis")?>"></script>
		<script type="text/javascript" src="<?=total_js?>/common_ver2.js?ver=<?=date("YmdHis")?>"></script>
	<?php } else { ?>

		<script type="text/javascript">
		<?php if($third_chk == "Y") { ?>
			var base_url = "<?=$tdomain?>";
			var base_url2 = "<?=$tdomain?>";
		<?php } else { ?>
			var base_url = "www.<?=$tdomain?>";
			var base_url2 = "<?=$tdomain?>";
		<?php } ?>
		</script>

		<script type="text/javascript" src="<?=total_js?>/common.js?ver=<?=date("YmdHis")?>"></script>

		<?php if($page == "view" || $page == "reserve") { ?>
			<script type="text/javascript" src="<?=total_js?>/reserve_pc.js?ver=<?=date("YmdHis")?>"></script>
			<script type="text/javascript" src="<?=total_js?>/picker_pc.js?ver=<?=date("YmdHis")?>"></script>
		<?php } ?>

	<?php } ?>

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<script src="http://static.ocean2you.co.kr/js/jquery.min.js"></script>
	<?php //jquery_ui파일 변경 ?>
	<script type="text/javascript" src="<?=total_js?>/jquery_ui.js"></script>

	<script src="<?=total_js?>/datepicker_ko.js"></script>
	<script src="<?=goco_static?>/js/select_product.js"></script>	
	<script type="text/javascript" src="<?=total_js?>/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?=total_js?>/jquery.number.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js?ver=<?=date("YmdHis")?>"></script>		

	<?php if(USER_FLAG == "M" && $page == "history") { 
		//다른부분은 다 바꿔야해서 여기만 일단 바꿔줌.
	?>
	<link rel="stylesheet" href="//static.go.co.kr/css/m/history/history_m.css">
	<script src="//static.go.co.kr/js/m/history/history_m.js"></script>
	<?php } ?>

	<?php if($page == "main") { ?>
		<!--[if gte IE 9]><!--> 
		<script src="<?=base_js?>/jquery.mb.YTPlayer.min_custom.js?ver=<?=date("YmdHis")?>"></script>
		<script src="<?=base_js?>/index_player.js?ver=<?=date("YmdHis")?>"></script>
		<!--<![endif]-->
	<?php } ?>


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?=base_css?>/common_ie8.css?ver=<?=date("YmdHis")?>">
		<link rel="stylesheet" href="<?=base_css?>/<?=$default_css?>_ie8.css?ver=<?=date("YmdHis")?>">
		<script src="http://static.ocean2you.co.kr/js/renew/common_ocean_ie8.js"></script>
		<script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?ver=<?=date("YmdHis")?>"></script>
	<![endif]-->
	
	<script type="text/javascript">
	function button_count(pno, bt_type) {
		$.ajax({
			url : "../reservation/state.php",
			type: "post",
			data: "mode=bt_count&pno="+pno+"&bt_type="+bt_type+"&abr=",
			success: function(e) {
			
			}
		}); 
	}
	$(function(){
		var pos = true;
		if(pos == true) {
			slide.start2('tour/img1');
		}
	});
	</script>
</head>
<body>

<?php
if($_COOKIE["pop_mob"] != "chk_y" && USER_FLAG == "W" && $cur_pos == 1) { 

$uips = explode(".", $_SERVER["REMOTE_ADDR"]);
$uip_str = $uips[0].".".$uips[1].".".$uips[2];

if(($_COOKIE["c_adsort1"] == "S" || $_COOKIE["c_adsort1"] == "J" || $_COOKIE["c_adsort1"] == "M")  && $uip_str != "121.140.159") {
	

	$t_sdate = date("Y-m-d", strtotime("-1 day"));
	$t_edate = date("Y-m-d", strtotime("-1 day"));

	$order_qr_l = " and wdate between '".$t_sdate."' and '".$t_edate."'";
	$order_qr_l2 = " and wdate between '".$t_sdate." 00:00:00' and '".$t_edate." 23:59:59'";

	$go_log = new go_db;
	$go_log->count_db();
	
	if($abr_val == "true") {			
		$add_query1_l = $go_log->queryfetch("SELECT uv as uniqu_cnt FROM all_product_view_abr where p_no='".p_no."' ".$order_qr_l."");				
	} else {
		$add_query1_l = $go_log->queryfetch("SELECT uv as uniqu_cnt FROM all_product_view WHERE p_no = '".p_no."' ".$order_qr_l."");			
	}		
	
	$go_log->db_close();

	$add_query2_l = $go_db->queryfetch("SELECT COUNT(CASE WHEN state='Y' THEN num ELSE NULL END) AS cnt2 FROM reserve_list where state='Y' ".$order_qr_l2." and p_no='".p_no."'");

	$contact_p_l = ($add_query1_l["uniqu_cnt"] != 0) ? ($add_query2_l["cnt2"] / $add_query1_l["uniqu_cnt"]) * 100 : 0;
	
	/*
	if($contact_p_l <= 0.5) {
		if(!empty($_COOKIE["pop_lclose"])) {
			$layer_cls = "";
			$layer_cls2 = "off";
			$layer_sty = "style=\"display:none;z-index:9999\"";
			$layer_close = "javascript:utils.app_layer_new('bannertop_layer', '');";
		} else {
			$layer_cls = " on";
			$layer_cls2 = "on";
			$layer_sty = "style=\"z-index:9999\"";
			$layer_close = "javascript:utils.app_layer_new('bannertop_layer', 'Y');";
		}
	} else {
		$layer_cls = "";
		$layer_cls2 = "off";
		$layer_sty = "style=\"display:none;z-index:9999\"";
		$layer_close = "javascript:utils.app_layer_new('bannertop_layer', '');";
	} */

	//스크롤 내리기 전까지 하루 쿠키 펼치기
	/*if(empty($_COOKIE["bannertop_chk"])) {
		$layer_cls = " on";
		$layer_cls2 = "on";
		$layer_sty = "style=\"z-index:9999\"";
		$layer_close = "javascript:utils.app_layer_new('bannertop_layer', 'Y');";

	} else { */
		$layer_cls = "";
		$layer_cls2 = "off";
		$layer_sty = "style=\"display:none;z-index:9999\"";
		$layer_close = "javascript:utils.app_layer_new('bannertop_layer', '');";
	// }

} else {
	/*if(empty($_COOKIE["bannertop_chk"])) {
		$layer_cls = " on";
		$layer_cls2 = "on";
		$layer_sty = "style=\"z-index:9999\"";
		$layer_close = "javascript:utils.app_layer_new('bannertop_layer', 'Y');";

	} else { */
		$layer_cls = "";
		$layer_cls2 = "off";
		$layer_sty = "style=\"display:none;z-index:9999\"";
		$layer_close = "javascript:utils.app_layer_new('bannertop_layer', '');";
	// }
}

$app_guide = "on";

if("aa" == "bb") { //190111오션 bs 라마다평택 앱설치유도 관련 전부 제거

?>
<style type="text/css">
#bannerTop {position:relative; width:100%; height:80px;text-align:center}
#bannerTop .close {position:absolute; top:0; right:0}
#bannerTop .contents {position:absolute; z-index:9999; top:80px; right:0; width:100%; height:392px; background:#fff; border-bottom:2px solid #003157; text-align:center}
#bannerTop .btn {position:relative; margin:auto; width:1001px; height:80px}
#bannerTop .btn .detail {position:absolute; top:50px; right:0; z-index:9}
#bannerTop .contents .shopLink {margin:auto; position:relative; width:1001px; height:392px; background:url(<?=ocean_goimg?>/bn_app04_2.jpg) no-repeat}
#bannerTop .contents .shopLink .text {position:absolute; top:100px; left:310px; font-weight:600; font-size:24px; text-align:left; line-height:1.3; letter-spacing:-1px}
#bannerTop .contents .shopLink .text span {display:inline-block; background:#fdff6c; color:#ff4800; text-decoration:underline; font-size:28px}
#bannerTop .contents .shopLink .download_btn {position:absolute; top:285px; left:310px}
</style>
<!-- 고코 앱설치배너 -->
<div id="bannerTop">
	<div class="close"><a href="javascript:utils.appbn('', 'bannerTop');" title="닫기"><img src="<?=total_img?>/bn_app05.jpg?ver=<?=date("YmdHis")?>"></a></div>
	<div class="btn">
		<div class="detail">
			
			<a href="<?=$layer_close?>" title="자세히보기"><img src="<?=total_img?>/bn_app01.jpg?ver=<?=date("YmdHis")?>" id="bannertop_btn" <?php if($layer_cls2 == "on") { ?>style="display:none"<?php } ?>></a>
			<!--레이어팝업 노출시 버튼명 변경  <a href="" title="닫기"><img src="<?=base_img?>/bn_app02.jpg"></a>-->
		</div>
		<a href="<?=$layer_close?>" title="고코투어앱 혜택보기"><img src="<?=total_img?>/bn_app03.jpg?ver=<?=date("YmdHis")?>"/></a>
	</div>

	

	<div class="contents<?=$layer_cls?>" <?=$layer_sty?> id="bannertop_layer">
		<div class="shopLink">
			<div class="text">
				고코투어앱 설치하고 <br/>
				<span><?=SITE_NAME_K_short?> <?=@number_format(app_cou)?>원 쿠폰팩</span>으로 할인받으세요!
			</div>
			<div class="download_btn">
				<a href="<?=base_url?>/_appclick.php?val=android" target="_blank"><img src="<?=total_img?>/bn_app_btn01.jpg?ver=<?=date("YmdHis")?>" alt="안드로이드 다운로드" style="margin-right:10px"/></a>
				<a href="<?=base_url?>/_appclick.php?val=ios" target="_blank"><img src="<?=total_img?>/bn_app_btn02.jpg?ver=<?=date("YmdHis")?>" alt="앱스토어 다운로드" style="margin-right:10px"/></a>
				<a href="<?=base_url?>/_appclick.php?val=one" target="_blank"><img src="<?=total_img?>/bn_app_btn03.jpg?ver=<?=date("YmdHis")?>" alt="원스토어 다운로드"/></a>				
			</div>
			<div class="detail" style="position:absolute;bottom:0;right:-110px">
				<?php if($layer_cls2 == "on") { $bt_img_name = "bn_app02.jpg";	} else { $bt_img_name = "bn_app01.jpg"; }	?>
				<a href="<?=$layer_close?>" title="자세히보기"><img src="<?=total_img?>/<?=$bt_img_name?>?ver=<?=date("YmdHis")?>" id="bannertop_btn2" <?php if($layer_cls2 != "on") { ?>style="display:none"<?php } ?>></a>
				<!--레이어팝업 노출시 버튼명 변경  <a href="" title="닫기"><img src="<?=base_img?>/bn_app02.jpg"></a>-->
			</div>
		</div>	
		
		
	</div>
</div>
<?php } } ?>



<?php if($ebiz_ip == true) { ?>
<div style="position:absolute; top:300px; margin-right:650px;right:50%;z-index:9999">
	<!--iframe id="ebiz_counter" src="<?=base_url?>/common/ebiz_counter.php" width="160" height="210" allowtransparency="true"  frameborder="0" marginheight="0" marginwidth="0" scrolling="0" style="text-align:left;z-index:10;"></iframe--> 
</div>
<?php } ?>

	<?php if($top_show_st == "N") { ?>
	<div>
		<div id="top_box" style="top:0px;z-index:9999;width:100%;background:#ffffff">
		<div id="headTitle">
			<?php if($is_page != "reservation_03") { 
				$prev_link = ($is_page == "reservation_01") ? base_url."/view/" : "javascript:history.back(-1);";
				if($page == "customer" && !empty($_GET["tgubun"])) {
					$prev_link = base_url;
				}
			?>
			<span class="back"><a href="<?=$prev_link?>"><img src="<?=goco_img?>/mobile/btn_back.png"  height="17" alt="뒤로"/></a></span>
			<?php } ?>
			<?=SITE_NAME_K_short?>
		</div>
		</div>
	<?php } else if($page != "kendo") { ?>

	<h1 class="hidden"><?=SITE_NAME_K?></h1>
	<div id="wrap">

		<?php 
		if(USER_FLAG == "W") {
			//include_once (INC_DIR."/ocean2you/web-home/common/faq_b.php");
			//if($_SERVER["REMOTE_ADDR"]=="61.74.233.194") { //181114 적용 : 양경식
				include_once (INC_DIR."/ocean2you/web-home/common/faq_f_renew.php");//무료숙박권용으로 변경, 기존꺼 삭제하지말랬음(faq_b), 181126 디비화했다;
			//}
			$faq_link = "#";
		} else { 
			$faq_link = base_url."/customer/?dd=".$go_util->XOREncode('faq_event');
		}
		$banner_top = "Y";
		include INC_DIR."/ocean2you/web-home/common/banner.php";
		$banner_top = "N";
		?>
		 <!-- 181211 상단띠배너 추가 및 팝업 추가 -->
	    <!--<div class="topbn-wrap clr">
	        <ul class="slide-banner clr">
	            <li class="bn-list-1 bn-ocean">
	                <a href="javascript:;" target="_blank" class="bn-link" title="오션투유리조트 BUS왕복이용권"></a>
	            </li>
	        </ul>
	    </div>-->
	    
		<?php
			//181214 디쟌 전팀장님 요청으로 버스투어 이용권 클릭시 해당 주의 토요일로 금액 노출
			$now_yoile = date("w");
			if($now_yoile == "6") {	//토요일이면 연산없이 바로 링크이동
				$bus_link = base_url."/view/?sub_sdate=".date("Y-m-d")."&sub_edate=".date("Y-m-d")."&package=bus";
			} else {
				$chk_yoile = 6-$now_yoile;
				$bus_link = base_url."/view/?sub_sdate=".date("Y-m-d", strtotime(date("Y-m-d")." +".$chk_yoile."day"))."&sub_edate=".date("Y-m-d", strtotime(date("Y-m-d")." +".$chk_yoile."day"))."&package=bus";
			}
		?>
	    <div class="layer-pop-bg" id="pop-bustour" style="display: none;">
            <div class="bus-pop-wrap">
                <div class="bus-pop-con">
                    <a href="<?=$bus_link?>"  title="예약 페이지로 이동">
                        <img src="http://img.ocean2you.co.kr/renew/pop_bustour2.jpg" alt="오션투유리조트 버스투어 이용권 구매하기">
                    </a>
                </div>
                <a href="javascript:;" class="btn-pop-close"></a>
            </div>
        </div>
        <!-- // END : 181211 상단띠배너 추가 및 팝업 추가 -->



		<div class="vid-wrap">
			<?php	/*if(USER_FLAG == "M") {*/	?>
			<?php	if($page == "main") {	?>
			<?php	/*<!-- 181017 모바일 배경용 태그 및 스크립트 추가 -->*/	?>
			<section class="m-vid">
			    <video id="bgMov" playsinline="" webkit-playsinline="" preload="" autoplay="" muted=""> 
			        <source src="http://img.ocean2you.co.kr/renew/movie_m/ocean2you_mobile.mp4" type="video/mp4"> 
			    </video>
			</section>
			<?php	/*}*/	?>
			<?php	}	?>
			<?php	//190917 영상 url 백업 videoURL:'oZrehVk6uFY' : 성다솜	?>
			<section id="pcVid" class="vid"
            data-property="{videoURL:'xPx-uKiJucw', containment:'#pcVid', showControls:false, autoPlay:true, loop:false, mute:true, startAt:0, opacity:1, addRaster:true, quality:'default', stopMovieOnBlur: false, showYTLogo: false, addRaster: true}">
			</section>
			
			<?php	//190115 main일 경우 헤더에 클래스 추가 (무료숙박권 위치조정 때문에) : 성다솜	?>
			<?php if($page != "main") { ?>
			<header class="header" id="gnb-header">
			<?php } ?>

			<?php if($page == "main") { ?>
			<header class="header type-2" id="gnb-header">
			<?php } ?>
				<div class="container">
					<a href="<?=base_url?>" class="logo-box">
						<img class="logo" src="<?=base_img?>/logo.png" alt="<?=SITE_NAME_K_short?>">
						<p class="logo-txt">
						    오션투유리조트
                            <span>속초설악비치 호텔앤콘도</span>
						</p>
						<!--
						<span class="mg-l"></span>
						<img class="gcLogo" src="<?=base_img?>/oc2_gcLogo.png" alt="고코투어">
						-->
					</a>
					
					<button class="mNav-btn" id="mNav-btn" type="button">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<nav class="nav-bar">						
						<div class="d1">
							<?php if($page == "main") { ?>
							<a class="faq-a" id="faq-a" href="<?=$faq_link?>">고코투어 이벤트 당첨안내</a>
							<a class="mFaq-a" id="mFaq-a" href="<?=$faq_link?>"><span><img src="http://img.ocean2you.co.kr/renew/m_icon.png">이벤트 안내</span></a>
							<?php } ?>
						</div>
						<ul class="nav clr">
							<li class="fst"><a href="<?=base_url?>/intro/">오션투유소개</a></li>
							<li><a href="<?=base_url?>/facil/">객실안내</a></li>
							<li><a href="<?=base_url?>/dining">다이닝</a></li>
							<li><a href="<?=base_url?>/amenities/">연회&amp;부대시설</a></li>
							<li><a href="<?=base_url?>/event/">이벤트/축제</a></li>
							<li><a href="<?=base_url?>/tourist">관광지</a></li>
							<!-- <li><a href="<?=base_url?>/?go_scroll=wayto">오시는길</a></li> -->
							<li><a href="http://ocean2you.co.kr/intro/?go-oc2-fun">고객리뷰</a></li>
							<li><a href="<?=base_url?>/group/">단체문의</a></li>
							<?php /* <li><a href="<?=base_url?>/rent/">장기/단기숙박</a></li> */ ?>
							<li class="lst" onclick="location.href='<?=base_url?>/view/';" style="cursor:pointer"><a href="javascript:;">예약/예약확인</a></li>
						</ul>
					</nav>
                    <div class="bk-menu ocean">
                        <a href="/view" class="btn-bk">예약하기</a>
                        <ul class="bk-list">
                            <li class="item item-1 fst"><a href="/view">객실예약</a></li>
                            <li class="item item-2"><a href="/history/?dd=<?=$go_util->XOREncode("buylist")?>">예약확인</a></li>
                            <li class="item item-3"><a href="/group">단체예약</a></li>
                            <?php /* <li class="item item-4"><a href="/rent">장기/단기예약</a></li> */ ?>
                        </ul>
                    </div>
				</div>
				<nav class="mNav-box" id="mNav-box">
					<h2 class="logo-m"><a href="<?=base_url?>"><img src="http://img.ocean2you.co.kr/renew/logo_m.png" alt="오션투유리조트"></a></h2>
					 <!-- 190226 예약하기 메뉴 추가 -->
                    <ul class="bk-menu-m ocean clr">
                        <li>
                            <a href="/view/">객실예약</a>
                        </li>
                        <li>
                            <a href="/history">예약확인</a>
                        </li>	
                    </ul>
					<ul class="mNav">
						<li class="fst"><a href="<?=base_url?>/intro/">오션투유소개</a></li>
						<li><a href="<?=base_url?>/facil/">객실안내</a></li>
						<li><a href="<?=base_url?>/dining">다이닝</a></li>
                        <li><a href="<?=base_url?>/amenities/">연회&amp;부대시설</a></li>
						<li><a href="<?=base_url?>/event/">이벤트/축제</a></li>
						<li><a href="<?=base_url?>/tourist">주변관광지</a></li>
						<!-- <li><a href="<?=base_url?>/?go_scroll=wayto">오시는길</a></li> -->
						<li><a href="http://ocean2you.co.kr/intro/?go-oc2-fun">고객리뷰</a></li>
						<li><a href="<?=base_url?>/group/">단체행사문의</a></li>
						<?php /* <li><a href="<?=base_url?>/rent/">장기/단기숙박</a></li> */ ?>
						<!--<li class="lst" onclick="location.href='<?=base_url?>/view/';" style="cursor:pointer"><a href="javascript:;">예약/예약확인</a></li>-->
					</ul>
				</nav>
			</header>


			<?php 
			include_once INC_DIR."/ocean2you/web-home/common/top_sub.php";

	} else { ?>
	<script>
		$("body").addClass("Main");
	</script>
	<div class="wrapper">
		<h1 class="hidden">오션투유리조트 설악비치 호텔앤콘도</h1>

		<header class="header">
			<div class="header-area">
				<h1 class="logo-box">

			<a href="/" class="logo-img"><img src="http://img.ocean2you.co.kr/renew/landing-brand/logo.png" alt="오션투유리조트"></a>

		</h1>
				<!-- 모바일 타이틀 메뉴 -->
				<div class="tit-box">
					<p class="tit">2019년 전국 중·고등학교검도대회 안내</p>
					<ul class="bk-menu-m brand-ld clr">
						<li>
							<a href="/view" target="_blank">숙소예약</a>
						</li>
					</ul>
				</div>

				<!-- 메뉴 -->
				<nav class="nav">
					<ul class="nav-list clr">
						<li class="list-1"><a href="#info">대회안내</a>
						</li>
						<li class="list-2"><a href="#loca">대회장 위치안내</a>
						</li>
						<li class="list-3"><a href="#visit">숙소안내</a>
						</li>
						<li class="list-4"><a href="#view">숙소예약 문의</a>
						</li>
					</ul>
				</nav>

				<!-- 예약하기 메뉴 / 오션투유 메뉴와 같은 링크주소 -->
				<div class="bk-menu brand-ld">
					<a href="/view" class="btn-bk">숙소예약하기</a>
					<ul class="bk-list" style="display: none;">
						<li class="item item-1 fst"><a href="/view">객실예약</a>
						</li>
						<li class="item item-2"><a href="/history/?dd=<?=$go_util->XOREncode("buylist")?>">예약확인</a>
						</li>
						<li class="item item-3"><a href="/group">단체예약</a>
						</li>
						<li class="item item-4"><a href="/rent">장기/단기예약</a>
						</li>
					</ul>
				</div>
			</div>
		</header>

	<?php } ?>