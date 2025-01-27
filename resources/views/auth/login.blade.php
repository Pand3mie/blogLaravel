<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    body {
        background-color: #303641;
    }
    @import url('https://fonts.googleapis.com/css?family=Raleway');
    body {
        margin: 0;
        padding: 0;
        font-family: 'Raleway', sans-serif;
        color: #F2F2F2;
    }
    .des{
        width: 149px;
        height: 99px;
        background-image: url(https://pngimage.net/wp-content/uploads/2018/05/d%C3%A9s-png-2.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 88%;
        position: absolute;
        top: -30px;
        left: -30px;
    }

    #container-login {
        background-color: #1D1F20;
        position: relative;
        top: 20%;
        margin: auto;
        width: 340px;
        height: 445px;
        border-radius: 0.35em;
        box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    #container-register {
        background-color: #1D1F20;
        position: relative;
        top: 20%;
        margin: auto;
        width: 340px;
        height: 480px;
        border-radius: 0.35em;
        box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    #title {
        position: relative;
        background-color: #1A1C1D;
        width: 100%;
        padding: 20px 0;
        border-radius: 0.35em;
        font-size: 22px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .lock {
        position: relative;
        top: 2px;
    }

    .input {
        margin: 15px auto auto;
        width: 240px;
        border-radius: 4px;
        background-color: #373b3d;
        padding: 8px 0;
    }

    .input-addon {
        float: left;
        background-color: #373b3d;
        border: 1px solid #373b3d;
        padding: 4px 8px;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
    }

    input[type=checkbox] {
        cursor: pointer;
    }

    input[type=text] {
        color: #949494;
        margin: 0;
        background-color: #373b3d;
        border: 1px solid #373b3d;
        padding: 6px 0;
        border-radius: 3px;
    }

    input[type=text]:focus {
        border: 1px solid #373b3d;
    }

    input[type=password] {
        color: #949494;
        margin: 0;
        background-color: #373b3d;
        border: 1px solid #373b3d;
        padding: 6px 0;
        border-radius: 3px;
    }

    input[type=password]:focus {
        border: 1px solid #373b3d;
    }

    input[type=email] {
        color: #949494;
        margin: 0;
        background-color: #373b3d;
        border: 1px solid #373b3d;
        padding: 6px 0;
        border-radius: 3px;
    }

    input[type=email]:focus {
        border: 1px solid #373b3d;
    }

    .forgot-password {
        position: relative;
        bottom: 0;
    }

    .forgot-password a:link {
        color: #C1C3C6;
        text-decoration: none;
    }

    .forgot-password a:visited {
        color: #C1C3C6;
        text-decoration: none;
    }

    .forgot-password a:hover {
        color: #FFF;
        transition: color 1s;
    }

    .privacy {
        margin-top: 5px;
        position: relative;
        font-size: 12px;
        bottom: 0;
    }

    .privacy a:link {
        color: #949494;
        text-decoration: none;
    }

    .privacy a:visited {
        color: #949494;
        text-decoration: none;
    }

    .privacy a:hover {
        color: #C1C3C6;
        transition: color 1s;
    }

    *:focus {
        outline: none;
    }

    .remember-me {
        margin: 10px 0;
    }

    input[type=submit] {
        padding: 6px 25px;
        background: #373E4A;
        color: #C1C3C6;
        font-weight: bold;
        border: 0 none;
        cursor: pointer;
        border-radius: 3px;
    }

    .register {
        margin: 40px auto auto;
        padding: 16px 0;
        text-align: center;
        width: 85%;
        border-top: 1px solid #C1C3C6;
    }

    .clearfix {
        clear: both;
    }

    #register-link {
        margin-top: 10px;
        padding: 6px 25px;
        background: #373E4A;
        color: #C1C3C6;
        font-weight: bold;
        border: 0 none;
        cursor: pointer;
        border-radius: 3px;
    }
    .alert-danger {
        position: absolute;
        margin-top: 8px;
        height: 21px;
        right: 28%;
        color: white;
        font-weight: 700;
        background-color: red;
        border-radius: 3px;
        width: 150px;
        padding-top: 4px;
        -webkit-animation-name: alert-danger;
        animation-name: alert-danger;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        }
        @-webkit-keyframes alert-danger {
        0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        }
        30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
        }
        40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
        }
        50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
        }
        65% {
        -webkit-transform: scale3d(.95, 1.05, 1);
        transform: scale3d(.95, 1.05, 1);
        }
        75% {
        -webkit-transform: scale3d(1.05, .95, 1);
        transform: scale3d(1.05, .95, 1);
        }
        100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        }
        }
        @keyframes alert-danger {
        0% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        }
        30% {
        -webkit-transform: scale3d(1.25, 0.75, 1);
        transform: scale3d(1.25, 0.75, 1);
        }
        40% {
        -webkit-transform: scale3d(0.75, 1.25, 1);
        transform: scale3d(0.75, 1.25, 1);
        }
        50% {
        -webkit-transform: scale3d(1.15, 0.85, 1);
        transform: scale3d(1.15, 0.85, 1);
        }
        65% {
        -webkit-transform: scale3d(.95, 1.05, 1);
        transform: scale3d(.95, 1.05, 1);
        }
        75% {
        -webkit-transform: scale3d(1.05, .95, 1);
        transform: scale3d(1.05, .95, 1);
        }
        100% {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        }
     } 
    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes slideInDown {
        0% {
            -webkit-transform: translateY(-200%);
            transform: translateY(-200%);
            visibility: visible;
        }
        100% {
            -webkit-transform: translateY(41%);
            transform: translateY(41%);
        }
    }
    @keyframes slideInDown {
        0% {
            -webkit-transform: translateY(-200%);
            transform: translateY(-200%);
            visibility: visible;
        }
        100% {
            -webkit-transform: translateY(41%);
            transform: translateY(41%);
        }
    }
</style>
</head>
<body>

        <div class="slideInDown">
         <div id="container-login">
            <div id="title">
                <div class="des"></div>
                <i class="material-icons lock">lock</i>
                {{ __('Login') }}
            </div>
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                     @if (!auth()->guest())
                    <div class="mb-3">
                        Vous étes déja connecté
                        ,
                        <a href="/logout">Se déconnecter</a>
                    </div>
                    @endif     
                <div class="input">
                    <div class="input-addon">
                        <i class="material-icons">face</i>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="clearfix"></div>
                <div class="input">
                    <div class="input-addon">
                        <i class="material-icons">vpn_key</i>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="remember-me">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span style="color: #DDD">restez connecté</span>
                </div>

                <input type="submit" value="Rand !!"/>
            </form>
            <br>
            <div class="forgot-password">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié') }}
                    </a>
                @endif
            </div>
            <div class="privacy">
                <a href="#">
                    Politique de confidentialité</a>
            </div>
            <div class="register">
                Pas encore enregistré ?
                <p>
                    <a href="{{ route('register') }}">
                        <button id="register-link">J'y vais !!</button>
                    </a>
                </p>
            </div>
        </div>
        </div>
</body>
</html>

    
