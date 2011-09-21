<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Contact | Wine Spectator Apps</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/style.css">
	<script src="//s3.amazonaws.com/toolkit.mshanken.com/toolkit/js/modernizr.min.js"></script>
</head>
<body>

<header>
	<nav>
	<div class="container">
		<h1 id="logo"><a href="index.php"><img src="img/logo.png"/> <span>Apps</span></a></h1>
		<ul>
			<li><a href="about.php" title="">About</a></li>
			<li class="active"><a href="contact.php" title="">Contact</a></li>
		</ul>
		</div><!--/container-->
	</nav>
</header>

<div class="container">
<div class="page">
	
	<div class="content">
	
		<h2>Contact Us</h1>
		<p>We&rsquo;d love to hear from you! If you have comments on our current apps or a suggestion for a future project you would like to see from Wine Spectator, please share them with our development team and editors here.</p>
		<p>If you have questions about how to use our apps, please tap the <img src="img/info.png" title="Information Icon" alt="i" style="vertical-align:top;"/> (information icon) in that app to view instructions. If your question isn&rsquo;t addressed there, let us know and we&rsquo;ll be happy to help.</p><br/>
		<div class="two_third">
		<?
		// Attention! Please read the following.
		// It is important you do not edit pieces of code that aren't tagged as a configurable options identified by the following:
		
        // Configuration option.
		
		// Each option that is easily editable has a modified example given.
		
		
		$error    = '';
        $name     = ''; 
        $email    = ''; 
        //$phone    = ''; Remove the // tags and this text to active phone number.
        //$subject  = ''; 
        $comments = ''; 
        $verify   = '';
		
        if(isset($_POST['contactus'])) {
        
		$name     = $_POST['name'];
        $email    = $_POST['email'];
        //$phone   = $_POST['phone']; Remove the // tags and this text to active phone number.
        //$subject  = $_POST['subject'];
        $comments = $_POST['comments'];
        $verify   = $_POST['verify'];
		

        // Configuration option.
		// You may change the error messages below.
		// e.g. $error = 'Attention! This is a customised error message!';
		
        if(trim($name) == '') {
        	$error = '<div class="error_message">Attention! You must enter your name.</div>';
        } else if(trim($email) == '') {
        	$error = '<div class="error_message">Attention! Please enter a valid email address.</div>';
        } else if(!isEmail($email)) {
        	$error = '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
        }else if(trim($comments) == '') {
        	$error = '<div class="error_message">Attention! Please enter your message.</div>';
        //} else if(trim($verify) == '') {
	    //	$error = '<div class="error_message">Attention! Please enter the verification number.</div>';
	    //} else if(trim($verify) != '4') {
	    //	$error = '<div class="error_message">Attention! The verification number you entered is incorrect.</div>';
	    }
		
        if($error == '') {
        
			if(get_magic_quotes_gpc()) {
            	$comments = stripslashes($comments);
            }


         // Configuration option.
		 // Enter the email address that you want to emails to be sent to.
		 // Example $address = "joe.doe@yourdomain.com";
		 
         $address = "apps@winespectator.com";


         // Configuration option.
         // i.e. The standard subject will appear as, "You've been contacted by John Doe."
		 
         // Example, $e_subject = '$name . ' has contacted you via Your Website.';

         $e_subject = 'Contact Form: ' . $name . '.';


         // Configuration option.
		 // You can change this if you feel that you need to.
		 // Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
					
		 $e_body = "apps.winespectator contact form: You have been contacted by $name.\r\n\n";
		 $e_content = "\"$comments\"\r\n\n";
		 
		 // Configuration option.
       	 // RIf you active phone number, swap the tags of $e-reply below to include phone number.
		 //$e_reply = "You can contact $name via email, $email or via phone $phone";
		 $e_reply = "You can contact $name via email, $email";
					
         $msg = $e_body . $e_content . $e_reply;

         mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");


		 // Email has sent successfully, echo a success page.
					
		 echo "<div id='succsess_page'>";
		 echo "<h3>Email Sent Successfully.</h3>";
		 echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
		 echo "<p>Make sure you follow us on Twitter: <a href=\"http://twitter.com/WineSpectator\">@WineSpectator</a></p>";
		 echo "</div>";
                      
		}
	}

         if(!isset($_POST['contactus']) || $error != '') // Do not edit.
         {
?>
		 <? echo $error; ?>
		<form name="contact-form" action="" method="post" id="contact-form">
		<fieldset>
		<ul>
			<li><label for="name" accesskey=U>Name:</label> <input name="name" size="30" value="<?=$name;?>" type="text"></li>
			<li><label for="email" accesskey=E>Email:</label> <input name="email" size="30" value="<?=$email;?>" type="email"></li>
			<li><label for="comments" accesskey=C>Message:</label> <textarea name="comments"><?=$comments;?></textarea></li>
			<!-- <li><label for=verify accesskey=V>3 + 1 =</label><input name="verify" type="text" id="verify" size="4" value="<?=$verify;?>" /></li> -->
		</ul>
		<input type="submit" id="contactus" name="contactus" value="Submit" class="submit button"/>
		</fieldset>
		

		</form>
		
		<? } 
	
function isEmail($email) { // Email address verification, do not edit.
return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

?>
		</div><!--/one_half-->
		<div class="one_third">
			<ul id="social-links">
				<li><img src="img/email.png"/><p>Email<br/><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#112;&#112;&#115;&#64;&#119;&#105;&#110;&#101;&#115;&#112;&#101;&#99;&#116;&#97;&#116;&#111;&#114;&#46;&#99;&#111;&#109;">&#97;&#112;&#112;&#115;&#64;&#119;&#105;&#110;&#101;&#115;&#112;&#101;&#99;&#116;&#97;&#116;&#111;&#114;&#46;&#99;&#111;&#109;</a></p></li>
				<li><img src="img/twitter.png"/><p>Twitter<br/><a href="http://twitter.com/WineSpectator">@WineSpectator</a></p></li>
				<li><img src="img/facebook.png"/><p>Facebook<br/><a href="http://www.facebook.com/WineSpectator">facebook.com/winespectator</a></p></li>
			</ul>
		</div><!--/one_half-->
		
	</div><!--/content-->
	
</div><!--/page-->

	<footer>
		<p>&copy; 2011 <a href="http://www.winespectator.com">Wine Spectator</a>. All Rights Reserved.</p>
	</footer>
	
</div><!--/container-->


	<script src="js/plugins.js"></script>
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-23484466-5']);
	_gaq.push(['_setDomainName', '.winespectator.com']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
	<script language="JavaScript" type="text/javascript" src="//assets.winespectator.com/wso/js/s_code_wsmobile_fpc.js"></script> 
	<script language="JavaScript" type="text/javascript"><!--
	s.pageName="Contact"  //Page name goes here
	s.channel="appsite" // Numbers all grouped in this channel
	s.prop1=""
	s.prop2=""
	s.prop3=""
	s.prop4=""
	s.prop5=""
	s.prop14=""
	s.eVar1=""
	s.campaign=""
	s.events=""
	s.products=""
	s.purchaseID=""
	var s_code=s.t();if(s_code)document.write(s_code)//-->
	</script>
</body>
</html>