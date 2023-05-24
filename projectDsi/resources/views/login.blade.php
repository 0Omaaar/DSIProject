<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html{
            height: 100%;
        }
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://th.bing.com/th/id/OIP.v5i2zkmyqZZJ30245EvteQHaE8?w=279&h=186&c=7&r=0&o=5&dpr=1.25&pid=1.7');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .logo {
            text-transform: uppercase;
            font-size: 20px;
        }
        .logo span {
            color: rgba(193, 172, 13, 0.6);
        }

        .login-box{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(193, 172, 13, 0.6);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2{
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box{
            position: relative;
        }

        .login-box .user-box input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label{
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label{
            top: -20px;
            left: 0;
            color: #000000;
            font-size: 12px;
        }

        .login-box form a{
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #000000;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            margin-left: 90px;
        }

        .login-box a:hover{
            background: #000000;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px black,
                        0 0 25px black,
                        0 0 50px black,
                        0 0 100px black;
        }

        .login-box a span{
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1){
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, black);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1{
            0%{
                left: -100%;
            }
            50%, 100%{
                left: 100%;
            }
        }

        .login-box a span:nth-child(2){
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(100deg, transparent, black);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s;    
        }

        @keyframes btn-anim2{
            0%{
                top: -100%;
            }
            50%, 100%{
                top: 100%;
            }
        }

        .login-box a span:nth-child(3){
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, black);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s;    
        }

        @keyframes btn-anim3{
            0%{
                right: -100%;
            }
            50%, 100%{
                right: 100%;
            }
        }

        .login-box a span:nth-child(4){
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(100deg, transparent, black);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s;    
        }

        @keyframes btn-anim4{
            0%{
                bottom: -100%;
            }
            50%, 100%{
                bottom: 100%;
            }
        }
        .btn{
            background: black;
            border-radius: 100px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2 class="logo"><span>LO</span>GIN</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="user-box">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email">{{ __('Email Address') }}</label>

            </div>
            <div class="user-box">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">{{ __('Password') }}</label>

            </div>
            <a href="{{ __('Login') }}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
                <button type="" class="btn">
                    {{ __('Here') }}
                </button>
            </a>
        </form>
    </div>
</body>
</html>