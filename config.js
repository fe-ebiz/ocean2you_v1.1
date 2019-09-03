module.exports = function() {

	var source       = 'src',
		development  = 'dist',
		remove       = ['.sass-cache', 'dist'],

		// 템플릿 경로
		template = {
//			src  : source + '/jade/**/!(_)*.jade',
//			parts: source + '/jade/**/_*.jade',
//			dest : development + '/views'
			src  : source + '/template/**/!(_)*.html',
			parts: source + '/template/**/_*.html',
			dest : development + '/views',
			src_m  : source + '/template_m/**/!(_)*.html',
			parts_m : source + '/template_m/**/_*.html',
			dest_m : development + '/views_m',
			src_en  : source + '/template_en/**/!(_)*.html',
			parts_en : source + '/template_en/**/_*.html',
			dest_en : development + '/views_en',
			src_jp  : source + '/template_jp/**/!(_)*.html',
			parts_jp : source + '/template_jp/**/_*.html',
			dest_jp : development + '/views_jp',
			src_m_jp  : source + '/template_m_jp/**/!(_)*.html',
			parts_m_jp : source + '/template_m_jp/**/_*.html',
			dest_m_jp : development + '/views_m_jp'
		},

		// Sass 경로
		sass = {
			src       : source + '/sass/**/*.{scss,sass}',
			compassSrc: source + '/sass',
			dest      : development + '/static/css'
		},

		// Css 경로
		css = {
			src : source + '/css/**/*.css',
			dest: development + '/static/css'
		},

		// JS 경로
		js = {
			src : source + '/js/**/*.js',
			dest: development + '/static/js'
		},

		// HTML 옵션
		htmlbeautify = {
			"indentSize": 4
		};

	return {
		del  : remove,
		src  : source,
		dev  : development,
		
		template : template,
		css  : css,
		sass : sass,
		js   : js,

		htmlbeautify : htmlbeautify
	};
};