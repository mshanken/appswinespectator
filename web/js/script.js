//@codekit-prepend "mousewheel-3.0.6.pack.js";
//@codekit-prepend "fancybox.pack.js";
//@codekit-prepend "infieldlabel.js";

$(document).ready(function() {
	// FancyBox
	$(".lightbox").fancybox();

	// inFieldLabels
	$("label").inFieldLabels();

    // Newsletter
    $("#signup input[type='submit']").click(function(event) {
        event.preventDefault();
        var this = $("#signup input[type='submit']");
        $("#signup ul").parent().hide();
        $("#submit").after('<p>Thanks for signing up. Make sure to follow on twitter at <a href="https://twitter.com/winespectator">@WineSpectator</a>.</p>');
    });
});
