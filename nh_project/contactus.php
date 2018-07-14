<!DOCTYPE html>
<html>
	<head>
		<title>EXPAND YOUR MIND</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/alternate.css">
	</head>
	<body>

		<?php
    include('nav.php')
    ?>
		
		<section class="lightbox">
		<h2>Contact Us</h2>

		<p>Do you have questions, but not ready to commit to our application process yet?  Maybe you have a brilliant compliment to pay to our dear Leader and/or Members?  Whatever you have to say, feel free to drop us a line here!  We'll be very, VERY certain to stay in touch.</p>

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
          echo "please dont make them angry";
          }
        else
          {//send email
          $email = $_REQUEST['email'] ;
          $subject = $_REQUEST['subject'] ;
          $message = $_REQUEST['message'] ;
          mail("sdalessa08@gmail.com", "Subject: $subject", $message, "From: $email");
          echo "Thank you for your sacrifice.";
          }
        }
      else
        {//if "email" is not filled out, display the form
        echo "<form method='post' action='contactus.php'>
        <p>
        Email:<br /> <input name='email' type='text' size='25' maxlength='100' />
        </p>
        <p>
        Subject:<br /> <input name='subject' type='text' size='25' maxlength='100' />
        </p>
        <p>
        Message:<br />
        <textarea name='message' rows='10' cols='50'>
        </textarea><br /><br />
        <input type='submit' />
        </p>
        </form>";
        }
      ?>
			
		</section>
	</body>
</html>