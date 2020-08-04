
<!-- récupération des infos du form quand click sur bouton envoyer -->
<?php 
	if (isset($_POST['sendmail'])) {
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$message = $_POST['message'];

		if (!empty($email) AND !empty($name) AND !empty($message)) {
			$headers ='From: '.$name.' '.$email."\n";
			if(mail('3ddy_77@live.fr', 'message from my website', $message, $headers)) {
				echo "Message envoyé";
			}
			else {
				echo "Message non envoyé";
			}
		}
	}
?>