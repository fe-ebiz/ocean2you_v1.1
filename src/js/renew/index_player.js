var myPlayer;
jQuery(function () {
	var isIframe = function () {
		var a = !1;
		try {
			self.location.href != top.location.href && (a = !0)
		} catch (b) {
			a = !0
		}
		return a
	};

	var options = {
		mobileFallbackImage: "http://img.ocean2you.co.kr/oc2y_vImg_m.jpg",
		playOnlyIfVisible: true
	};

	myPlayer = jQuery(".vid").YTPlayer({align:"center,left"});
});