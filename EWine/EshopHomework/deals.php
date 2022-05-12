<?php

$emailFromUser= $_GET['dealsEmail'];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/html; charset=utf-8';
//$headers[] = 'Content-Transfer-Encoding: quoted-printable'; //we need headers to help the email send an html link and not send it as text
$message =  '<a href="http://localhostEshopHomework">click here to find out about our new deals.</a>';
mail($emailFromUser,'News deals!', $message, 'From: jimkapadoukas@gmail.com',implode("\n", $headers));
echo json_encode('success');
?>  