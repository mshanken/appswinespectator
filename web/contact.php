<?php  $title = 'Contact |'; include 'header.php'; ?>

	<div class="container">

		<div class="g12">
			<h2>Contact Us</h1>
			<p>We&lsquo;d love to hear from you! If you have comments on our current apps or a suggestion for a future project you would like to see from Wine Spectator, please share them with our development team and editors here.</p>
			<p>If you have questions about how to use our apps, please tap the <img src="/img/info.png" title="Information Icon" alt="i"/> (information icon) or the Learn section in that app to view instructions. If your question isn&lsquo;t addressed there, let us know and we&lsquo;ll be happy to help.</p>
			<p>Members of the media can contact us here for press releases, high-resolution screen shots and other material about our apps.</p>
		</div><!--/g12-->

		<div class="g8">
		<?
		$error    = '';
		$name     = '';
		$email    = '';
		//$subject  = '';
		$comments = '';
		$verify   = '';

		if(isset($_POST['contactus'])) {

			$name     = $_POST['name'];
			$email    = $_POST['email'];
			//$subject  = $_POST['subject'];
			$comments = $_POST['comments'];
			$verify   = $_POST['verify'];

			if(trim($name) == '') {
				$error = '<div class="error_message">Attention! You must enter your name.</div>';
			} else if(trim($email) == '') {
				$error = '<div class="error_message">Attention! Please enter a valid email address.</div>';
			} else if(!isEmail($email)) {
				$error = '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
			}else if(trim($comments) == '') {
				$error = '<div class="error_message">Attention! Please enter your message.</div>';
			}
			//} else if(trim($verify) == '') {
			//	$error = '<div class="error_message">Attention! Please enter the verification number.</div>';
			//} else if(trim($verify) != '4') {
			//	$error = '<div class="error_message">Attention! The verification number you entered is incorrect.</div>';
			//}

			if($error == '') {

				if(get_magic_quotes_gpc()) {
					$comments = stripslashes($comments);
				}

				$address = "winespectatorcomapps@mshanken.freshdesk.com";
				$e_subject = 'Contact Form: ' . $name . '.';
				$e_body = "apps.winespectator contact form: You have been contacted by $name.\r\n\n";
				$e_content = "\"$comments\"\r\n\n";
				$e_reply = "You can contact $name via email, $email";
				$msg = $e_body . $e_content . $e_reply;

				mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");

				echo "<div id='succsess_page'>";
				echo "<h3>Email Sent Successfully.</h3>";
				echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
				echo "<p>Make sure you follow us on Twitter: <a href=\"http://twitter.com/WineSpectator\">@WineSpectator</a></p>";
				echo "</div>";
			}
		}

		if(!isset($_POST['contactus']) || $error != ''){
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
				<input type="submit" id="contactus" name="contactus" value="Submit" class="submit button btn primary"/>
			</fieldset>
		</form>

		<?
			}
			function isEmail($email) { // Email address verification, do not edit.
			return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
			}
		?>

		</div><!--/g8-->

		<div class="g4">
			<ul id="social-links">
				<li><img src="/img/email.png"/><p>Email<br/><a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#97;&#112;&#112;&#115;&#64;&#119;&#105;&#110;&#101;&#115;&#112;&#101;&#99;&#116;&#97;&#116;&#111;&#114;&#46;&#99;&#111;&#109;">&#97;&#112;&#112;&#115;&#64;&#119;&#105;&#110;&#101;&#115;&#112;&#101;&#99;&#116;&#97;&#116;&#111;&#114;&#46;&#99;&#111;&#109;</a></p></li>
				<li><img src="/img/support_32.png"/><p>Customer Support<br/><a href="http://app-help.winespectator.com">app-help.winespectator.com</a></p></li>
				<li><img src="/img/twitter.png"/><p>Twitter<br/><a href="http://twitter.com/WineSpectator">@WineSpectator</a></p></li>
				<li><img src="/img/facebook.png"/><p>Facebook<br/><a href="http://www.facebook.com/WineSpectator">facebook.com/winespectator</a></p></li>
			</ul>
		</div><!--/g4-->

		</div><!--/g12-->

	</div><!--/container-->

<?php include("footer.php"); ?>
