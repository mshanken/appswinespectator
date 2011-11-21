// Prefix for amazon
yepnope.addPrefix('amazon', function(resourceObj) {
	resourceObj.url = 'https://s3.amazonaws.com/toolkit.mshanken.com/' + resourceObj.url;
	return resourceObj;
});
var _gaq = [['_setAccount','UA-23484466-5'],['_trackPageview']];
yepnope([
{
	load: '//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js', // Jquery
	complete: function () {
		if (!window.jQuery) {
			yepnope('amazon!toolkit/js/jquery.min.js');
		}
	}
},
{
	test: Modernizr.mq('only all'), // Testing if browser supports mq
	nope: {
		'respondJS' : 'amazon!js/respond.min.js'
	}
},
{
	test: document.getElementById('fb'), // Fancybox
	yep: {
		'MousewheelJS': 'amazon!plugins/fancybox/jquery.mousewheel-3.0.4.pack.js',
		'FancyboxJS': 'amazon!plugins/fancybox/jquery.fancybox-1.3.4.pack.js',
		'FancyboxCSS': 'amazon!plugins/fancybox/jquery.fancybox-1.3.4.css'
	},
	callback: {
		'FancyboxJS' : function(url, result, key){
			$("a#fb").fancybox();
		}
	}
},
{
	load : 'ielt7!https://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js',
	callback : function () {
		window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})});
	}
},
{
	load : 'http://www.google-analytics.com/ga.js'
}
]);