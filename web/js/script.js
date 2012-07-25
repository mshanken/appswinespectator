//@codekit-prepend "mousewheel-3.0.6.pack.js";
//@codekit-prepend "fancybox.pack.js";
//@codekit-prepend "jquery.infieldlabel.min.js";

$(document).ready(function() {
	// FancyBox
	$(".lightbox").fancybox();
	
	// inFieldLabels
	$("label").inFieldLabels();
});