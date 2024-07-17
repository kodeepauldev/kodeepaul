<?php

$data = $_REQUEST;

if($data["name"]!="" && $data["email"]!="")
{

	$to = "kodee@aiimtech.com";
	$subject = "Enquiry From kodee.aiimtech.com";

	$message = "
	<html>
	<head>
	<title>Lead email</title>
	</head>
	<body>
	<p>Customer infromation</p>
	<table border=1 cellspacing=5 cellpadding=5>
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Message</th>
	</tr>
	<tr>
	<td>".$data["name"]." " . $data["family"]. "</td>
	<td>".$data["phone"]."</td>
	<td>".$data["email"]."</td>
	<td>".$data["comments"]."</td>

	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <webmaster@aiimtech.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);
	echo "Email sent successfully";
}
else
	echo "Email information missing!";
?> 