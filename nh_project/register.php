<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Information</title>
</head>

<body>
<?php
/* This page receives and handles the data generated by a form.
The predefined $_POST variable is used to collect values from a form sent with method="post".
Information sent from a form with the POST method is invisible to others and has no limits on the amount of information to send. */
print "<h2>Thank You for Writing, {$_POST['firstname']} {$_POST['lastname']}!</h2><br />\n";
print "We will be sure to reach out to you at {$_POST['email']}.<br />\n";
print "Do not be alarmed by the messages you may recieve.  We wish you no harm."
?>

<p>[The data above is retrieved from a form filled out by a user.  We do not store or track this data.]</p>

</body>
