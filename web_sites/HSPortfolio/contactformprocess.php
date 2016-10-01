<?php

/* Subject and Email Variables */

	$subjectField = $post['subject'];
	$webMaster = 'arias3601@gmail.com';
	
/* Gathering Data Variables */

	$nameField = $post['name'];
	$emailField = $post['email'];
	$commentsField = $post['comments'];
	
	$body = <<<EOD
<br><hr><br>
Name: $nameField <br>
Email: $emailField <br>
Comments: $commentsField <br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$seuccess = mail($webMaster, $subjectField, $body, $headers);
	
/* Results rendered as HTML */

	$theResults = <<<EOD
<html lang="en">
<head>
<meta charset=utf-"8" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<title>Contact Me</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header" align="center"><font id="title">
HTML Awesomeness
</font></div>
<br />
<div id="nav"><font id="select">
<table width="950" border="0" align="center"><tr>
<td align="center"><a id="a" href="index.html" id="b"><div id="button">HOME</div></a></td>
<td align="center"><a id="a" href="bio.html" id="b"><div id="button">BIO</div></a></td>
<td align="center"><a id="a" href="portfolio.html" id="b"><div id="button">PORTFOLIO</div></a></td>
<td align="center"><a id="a" href="contact.html" id="b"><div id="button">CONTACT</div></a>
</td>
</tr>
</table>
</font></div>
<br />
<div id="body_main">
<br />
<div id="body">
<h2>Your message has been sent successfully!</h2>
</div>
<br />
<div id="footer" align="center"><font id="foot">&copy; Asher Harris at Layton High School Digital Media</font></div>
<br />
</body>
</html>
EOD;
echo "$theResults";


?>