<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bad Bunny</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="img/favicon.ico" />

</head>

<body>
<?php

	if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['prenom']) && isset($_POST['message'])){

    $destinataire="ludovic.lanchon@gmail.com";

	$entete = 'From: '.$_POST['email']."\r\n".

        	'Reply-To: '.$_POST['email']."\r\n".

		'X-Mailer: PHP/'.phpversion();

    $message = "Nom : ".$_POST['nom']."\r\n"."Prenom : ".$_POST['prenom']."\r\n"."Email : ".$_POST['email']."\r\n"."Message : ".$_POST['message']."\r\n";   
		
		//if (mail($destinataire,$sujet,$message,$entete)){
	if (mail($destinataire,$sujet,$message,$entete)){
                include("message_envoye.html");

            } 
	else 

            {
                include("message_erreur.html");

            }
}

		?>
 
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>