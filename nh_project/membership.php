<!DOCTYPE html>
<html>
	<head>
		<title>EXPAND YOUR MIND</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/alternate.css">
		<script src="java/nh_java.js"></script>
	</head>
	<body>
		<?php
		include('nav.php')
		?>

		<script>
		function submit()
		{
		alert("Thank you for your submission."); // this is the message in ""
		}
		</script>
		
		<section class="lightbox">
		<h2>Apply To Be A Member!</h2>
		<p>We eagerly and enthusiastically accept applications from interested parties that would like to take steps to unleash their true potential with New Heights.  Fill out the form below to take your first steps towards ultimate transformation!</p>

		<form method="post" action="register.php" id="formContainer" oninput="x.value=parseInt(a.value)+parseInt(b.value)" style="width: 100%;">
      		<fieldset> <!--Used to logically group sections of a form-->
        		<legend>Name and Contact</legend> <!--Used to add captions to a fieldset-->
       			<ol style="padding-left: 0;">

          		<li>
        		<label for="firstname">First Name:<em>*</em>
        		<input type="text" placeholder="please" name="firstname" size="25" maxlength="100" autofucus required>
      			</label>
      			</li>

      			<br>

      			<li>
        		<label for="lastname">Last Name:<em>*</em>
        		<input type="text" placeholder="don't" name="lastname" size="25" maxlength="100"></label>
      			</li>

      			<br>

      			<li>
        		<label for="email">Email:<em>*</em>
       		 	<input placeholder="do this" type="email" name="email" required></label>
      			</li>
      			</ol>

      			<br>
  			</fieldset>

  			<fieldset>
    		<legend>How did you hear about us (check all that apply)?</legend>
		        <!-- Checkboxes let a user select ZERO or MORE options of a limited number of choices. -->
		        <ul style="background-color: #FFDA97; text-align: left;">
		          <li><label>
		          <input type="checkbox" name="method" value="Word of mouth"> Word of mouth
		          </label></li>
		          <br>
		          <li><label>
		          <input type="checkbox" name="method" value="Internet"> Internet
		          </label></li>
		          <br>
		          <li><label>
		          <input type="checkbox" name="method" value="Flyers"> Flyers
		          </label></li>
		          <br>
		          <li><label>
		          <input type="checkbox" name="method" value="Persistent phone calls"> Persistent phone calls
		          </label></li>
		          <li><label>
		        </ul>
		      </fieldset>

		      <fieldset>
		      	<legend>Gender and Age: </legend>
			        <!-- Radio buttons let a user select ONLY ONE of a limited number of choices -->
			        <ul style="background-color: #FFDA97; text-align: left;">
			          <li><label>
			          <input type="radio" name="gender" value="female"> Female
			          </label></li>
			          <li><label>
			          <input type="radio" name="gender" value="male"> Male
			          </label></li>
			          <li><label>
			          <input type="radio" name="gender" value="other"> Other
			          </label></li>
			          <li><label>
			          <input type="radio" name="gender" value="Prefer not to say"> Prefer not to say
			          </label></li>
			          <br>
			          <li>
			          <label for="dob">Year of Birth:
			          <select id="dob">
			          <option value="1975">1975</option>
			          <option value="1976">1976</option>
			          <option value="1977">1977</option>
			          <option value="1978">1978</option>
			          <option value="1979">1979</option>
			          <option value="1980">1980</option>
			          <option value="1981">1981</option>
			          <option value="1982">1982</option>
			          <option value="1983">1983</option>
			          <option value="1984">1984</option>
			          <option value="1985">1985</option>
			          <option value="1986">1986</option>
			          <option value="1987">1987</option>
			          <option value="1988">1988</option>
			          <option value="1989">1989</option>
			          <option value="1990">1990</option>
			          <option value="1991">1991</option>
			          <option value="1992">1992</option>
			          <option value="1993">1993</option>
			          <option value="1994">1994</option>
			          <option value="1995">1995</option>
			          <option value="1996">1996</option>
			          <option value="1997">1997</option>
			          <option value="1998">1998</option>
			          <option value="1999">1999</option>
			          <option value="2000">2000</option>
			          <option value="2001">2001</option>
			          </select>
			          </label>
			          </li>
			        </ul>
		      </fieldset>

		      <fieldset>
			    <legend> Encryption using HTML5 keygen: </legend>
			    <input type="text" name="user">
			    <br><br>
			    Encryption:
			    <br>
			    <keygen name="security" value="security" placeholder="don't">
			  </fieldset>

			  <p>
			    <input type="submit" value="Send It!"/>
			    <input type="reset"/>
			  </p>
		</form>
			
		</section>
	</body>
</html>