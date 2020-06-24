<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Archit Gupta | Personal Webpage</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="content">
	<div id="header" class="menu-bar">
		<div class="menu-logo">
			<a href="#">
			<h1>Archit Gupta</h1>
			</a>
		</div>
		<ul class="main-menu">
			<li><a href="contact.php">Contact</a></li>
			<li><a href="resume.htm">Resume</a></li>
			<li><a href="teaching.html">Teaching</a></li>
			<li><a href="research.htm">Research</a></li>
			<li><a href="about.htm">About</a></li>
		</ul>	
	</div>
	<hr class="divider"/>
	<div id="main-container">
		<div class="page-material">
			<div id="social-footer" class="three-column">
				<h2>Contact me:</h2>
				<p>You can either drop a message here or you can mail me at one of the following mail addresses. Thank You for visiting my page! <?php if(!isset($_POST["sender"])) {echo 'Please Mention your Name and email address so that I can get back to you.';} ?></p>
			    <ul id="sm-links" class="plain-list">
				<li><a href="mail-to:architgupta@berkeley.edu?Subject=Mail%20from%20Webpage">ArchitGupta[at]berkeley.edu</a></li>
			    </ul>
			</div>
            		<div id="form" class="two-third-column">
				<?php
					$TO 	 = 'architgupta@berkeley.edu';
					$SUBJECT = 'Mail from ' . $_POST["sender"] . ' on EECS Webpage';
					$HEADERS = 'From:' . $_POST["email"];
					if(isset($_POST["sender"])){
						mail($TO, $SUBJECT, $_POST["message"], $HEADERS);
						echo 'Your message has been delivered</br>';
						echo '<form action="contact.php" method="post">';
						echo '<input type="submit" name="submit" value="Resend" class="submit">';
						echo '</form>';
					}
					else{
						echo '<form action="contact.php" method="post">';
						echo '<span>Name</span>';
						echo '<input type="text" name="sender" class="name" />';
						echo '<span>Email</span>';
						echo '<input type="text" name="email" class="email"/>';
						echo '<span>Message</span>';
						echo '<textarea class="message" name="message"></textarea>';
						echo '<input type="submit" name="submit" value="Submit" class="submit">';
						echo '</form>';
					}
				?>
                	</div>
		</div>
	</div>
	<hr class="divider"/>
	<div id="footer">
	
	</div>
</div>
</body>
</html>
