<!DOCTYPE html>
<html>
	<head>
		<title>EXPAND YOUR MIND</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/alternate.css">
	</head>
	<body>
		<section>
			<h1 class="title">Expand Your Mind</h1>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="membership.html">Membership</a></li>
				<li><a class="active" href="contactus.html">Contact Us</a></li>
			</ul>
		</section>
		
		<section class="lightbox">
		<h2>Contact Us</h2>

		<p>And people say, 'Oh, you know... you have to work through your
		resentments.' Yeah. No. I'm gonna hold on to them and they're gonna fuel my attack.  But it's just not ... I'm not fair game. I'm not a soft target. It's over. Check it, Alex, I embarrassed him in front of his children and the world by healing at a pace that his unevolved mind can't process.</p>
			
		<h2>Leave a Testimonial</h2>

		<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("rmira@hunter.cuny.edu", "Subject: $subject", $message, "From: $email");
    echo "Thank you for using our mail form";
    }
  }
else
  {//if "email" is not filled out, display the form
  echo "<form method='post' action='emailForm.php'>
  <p>
  Email:<br /> <input name='email' type='text' size='25' maxlength='100' />
  </p>
  <p>
  Subject:<br /> <input name='subject' type='text' size='25' maxlength='100' />
  </p>
  <p>
  Message:<br />
  <textarea name='message' rows='5' cols='35'>
  </textarea><br /><br />
  <input type='submit' />
  </p>
  </form>";
  }
?>
			
		<p>You know? This bootleg
		cult - you know, arrogantly referred to as 'Alcoholics Anonymous' - now
		supports a 5% success rate. My success rate is 100%. Do the math! They urge
		you to put down your sword and come join the winners. In 22 years the only
		'winners' I could locate in their toothless warren were either driving a
		convertible van or living like trolls under an abandoned bridge.</p>
			
		</section>
	</body>
</html>