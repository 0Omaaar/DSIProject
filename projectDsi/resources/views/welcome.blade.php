<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Welcome</title>
    <style>
       * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            color: white;
            /* font-family: 'Oswald', 'sans-serif'; */
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        .container {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://th.bing.com/th/id/OIP.v5i2zkmyqZZJ30245EvteQHaE8?w=279&h=186&c=7&r=0&o=5&dpr=1.25&pid=1.7');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        nav {
            padding: 2% 6%;
            display: flex;
            justify-content: space-between;
        }
        .logo {
            padding-top: 20px;
            text-transform: uppercase;
            font-size: 40px;
        }
        .logo span {
            color: #FFCF07;
        }
        .main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

        .main h2 {  
            font-size: 70px;
            text-transform: uppercase;
        }

        .main h1 {
            font-size: 120px;
            color: #FFCF07;
        }

        .button {
            text-decoration: none;
            border: 1px solid #FFCF07;
            padding: 15px 35px;
            margin-top: 45px;
            transition: 0.5s;
            font-size: 20px;
        }

        .button:hover {
            background-color: #FFCF07;
        }

        .button ::after {
            content: "";
            display: block;
            height: 2opx;
            width: 0%;
            background-color: #FFCF07;
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <h1 class="logo"><span>S</span> DSI</h1>
            <div class="nav-links">
                <img width="120px" src="https://th.bing.com/th/id/R.45c5a6a4d4dedb5c36f85eb86791495e?rik=aNjZG0igvyfNtA&pid=ImgRaw&r=0" alt="">
            </div>
        </nav>
        <div class="main">
            <h2>Bienvenue</h2>
            <h1>
                A SDSI
            </h1>
            <p>On peut gerer tous vos stagiares et vos offres de stage.</p>
            @guest
            <a href="{{url('/login')}}" class="button">Connexion</a>
            @endguest
        </div>
    </div>
</body>
</html>