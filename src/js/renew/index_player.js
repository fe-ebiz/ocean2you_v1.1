var myPlayer, curTime, allTime, timeStr;
$(window).load(function(){
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
		//mobileFallbackImage: "http://img.ocean2you.co.kr/oc2y_vImg_m.jpg",
		playOnlyIfVisible: true
	};

	myPlayer = $(".vid").YTPlayer({align:"center,left"});
    
    $('#pcVid').on("YTPEnd", function(e){
        var currentTime = e.time;
        //console.log('end');
    });

    $('#pcVid').on("YTPTime", function(e){
        var currentTime = e.time;
        
        curTime = $("#pcVid").YTPGetTime(); 
        allTime = $("#pcVid").YTPGetTotalTime();
        timeStr = allTime.split(':'); 
        
        //console.log('time - ', curTime, '/ alltime - ', allTime, timeStr[1]);
        
        if( curTime == ('00 : '+ (Number(timeStr[1]) -2)) ){
            //console.log('true')
            $('#pcVid').css('opacity', '0');
            $('.txt-box').addClass('end');
            //.YTPStop()
        }
        
    });
});

