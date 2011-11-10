// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};
(function(b){function c(){}for(var d="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

// Prefix for amazon
yepnope.addPrefix('amazon', function(resourceObj) {
	resourceObj.url = 'https://s3.amazonaws.com/toolkit.mshanken.com/' + resourceObj.url;
	return resourceObj;
});

// Jquery
yepnope([{
	load: '//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js',
	complete: function () {
		if (!window.jQuery) {
			yepnope('amazon!toolkit/js/jquery.min.js');
		}
	}
}, {
	complete: function () {		
		console.info('Loaded: jQuery');
	}
}]);

// Fancybox
yepnope({
	test: document.getElementById('fb'),
	yep: {
		'MousewheelJS': 'amazon!plugins/fancybox/jquery.mousewheel-3.0.4.pack.js',
		'FancyboxJS': 'amazon!plugins/fancybox/jquery.fancybox-1.3.4.pack.js',
		'FancyboxCSS': 'amazon!plugins/fancybox/jquery.fancybox-1.3.4.css'
	},
	callback: {
		'MousewheelJS' : function(url, result, key){
			console.info('Loaded: MousewheelJS');
		},
		'FancyboxJS' : function(url, result, key){
			console.info('Loaded: FancyboxJS');
			$("a#fb").fancybox();
		},
		'FancyboxCSS' : function(url, result, key){
			console.info('Loaded: FancyboxCSS');
		}
	}
});

// Tipsy
yepnope({
	test: document.getElementsByClassName('tip').length,
	yep: {
		'TipsyJS': 'amazon!plugins/tooltip/tooltip.js',
		'TipsyCSS': 'amazon!plugins/tooltip/tooltip.css'
	},
	callback: {
		'TipsyJS' : function(url, result, key){
			console.info('Loaded: TipsyJS');
			$('.tip').tipsy({fade: true});
		},
		'TipsyCSS' : function(url, result, key){
			console.info('Loaded: TipsyCSS');
		}
	}
});
