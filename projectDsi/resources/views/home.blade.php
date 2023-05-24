<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- <link rel="stylesheet" href="home.css" type="text/css"> --}}
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,600;1,200&display=swap" rel="stylesheet">
    <title>Home</title>

    <style>
        *{
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    }

    .header{
        min-height: 100vh;
        width: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://th.bing.com/th/id/OIP.v5i2zkmyqZZJ30245EvteQHaE8?w=279&h=186&c=7&r=0&o=5&dpr=1.25&pid=1.7');
        background-position: center;
        background-size: cover;
        position: relative;
    }
    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2% 6%;
    }

    nav img{
        width: 150px;
    }

    .nav-links{
        flex: 1;
        text-align: right;
    }

    .nav-links ul li{
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    #btn1:hover{
        cursor: pointer;
    }

    .nav-links ul li a{
        text-decoration: none;
        color: white;
        /* background: #FFCF07;
        border-radius: 20px;
        color: black;
        padding: 5px;
        font-size: 17px */
    }

    .nav-links ul li::after{
        background: #FFCF07;
        content: '';
        width: 0%;
        height: 2px;
        display: block;
        margin: auto;
        transition: 0.5s;

    }

    .nav-links ul li:hover::after{
        width: 100%;
    }

    .text-box{
        width: 90%;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding-top: 50px;
    }

    .text-box h1{
        font-size: 60px;
        letter-spacing: 4px;
        /* padding-top: 80px; */
        color: #FFCF07;
        padding-right: 40px;
    }

    .text-box h1 span{
        color: #fff;
    }

    .text-box p{
        margin: 10px 0 40px;
        font-size: 20px;
        color: white;
        line-height: 30px;
        letter-spacing: 1px;
    }

.text-box p span{
    color: #FFCF07;
}

    .course{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
    }

    h1{
        font-size: 36px;
        font-weight: 600;
    }

    p{
        color: black;
        font-size: 20px;
        font-weight: 300;
        line-height: 22px;
        padding: 5px;
    }

    .row{
        display: flex;
        margin-top: 5%;
        justify-content: space-between;
    }

    .course-col{
        flex-basis: 35%;
        background: #FFCF07;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
        margin-top: 75px;
    }
    
    .course-col a{
        border: 1px solid black;
        color: black;
        padding: 8px;
        border-radius: 20px;
    }

    .course-col a:hover{
        background: #000000;
        color: #fff;
        border-radius: 40px;
        box-shadow: 0 0 5px black,
                        0 0 25px black,
                        0 0 50px black,
                        0 0 100px black;
    }

    .course h1{
        text-transform: uppercase;;
        font-size: 40px;
        font-style: bold;
        letter-spacing: 2px;  
        display: inline;
        background: linear-gradient(90deg, #ffcf07 100%, red ) 0 1.2em/4px 5px repeat-x;
        text-shadow: 0.04em 0 white, -0.04em 0 white; 
    }

    .course h1 span{
        color: #FFCF07;
        display: inline;
        background: linear-gradient(90deg, #000 100%, red ) 0 1.2em/4px 5px repeat-x;
        text-shadow: 0.04em 0 white, -0.04em 0 white; 
    }

    .course .span2{
        display: inline;
        background: linear-gradient(90deg, #fff 100%, red ) 0 1.2em/4px 5px repeat-x;
        text-shadow: 0.04em 0 white, -0.04em 0 white;
    }

    .events{
    width: 80%;
    margin: 80px auto;
    }

    .logo {
        padding-top: 0px;
        text-transform: uppercase;
        font-size: 40px;
    }
    .logo span {
        color: #FFCF07;
    }

    a{
        list-style: none;
        text-decoration: none;
        color: white;
    }

    ul li button{
        background: #FFCF07;
        border-radius: 20px;
        padding: 5px;
    }

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    h3{
        text-align: center;
        font-weight: 600;
        margin: 10px 0;
    }

    .course-col:hover{
        box-shadow: 0 0 100px 0px rgba(0, 0.8, 0, 0.7);
    }

    .events .row{
    margin-top: 50px;
    }
    h4{
        font-size: 3vmin;
        color: #FFCF07;
        margin: 20px auto;
    }
    .events h1{
        margin-left: 30px;
        letter-spacing: 2px;
        display: inline;
        background: linear-gradient(90deg, #ffcf07 100%, red ) 0 1.2em/4px 5px repeat-x;
        text-shadow: 0.04em 0 white, -0.04em 0 white;
    }

    .events span{
        color: #FFCF07;
        letter-spacing: 2px;
        display: inline;
        background: linear-gradient(90deg, black 100%, red) 0 1.2em/4px 5px repeat-x;
        text-shadow: 0.04em 0 white, -0.04em 0 white;
    }
    .events .ctn{
        font-size: 15px;
        color: black;
        background: #FFCF07;
        border-radius: 20px;
        padding: 5px;
    }

    img{
        transition: transform .3s ease;
        width: 400px;
    }
    img:hover{
        transform: scale(1.1);
    }
  
    li:hover{
        color: #FFCF07;
        cursor: pointer;
    }
    .footer{
    width: 100%;
    min-height: 100px;
    padding: 20px 80px;
    margin: 0;
    border-radius: 40px;
    background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://th.bing.com/th/id/OIP.v5i2zkmyqZZJ30245EvteQHaE8?w=279&h=186&c=7&r=0&o=5&dpr=1.25&pid=1.7');
    /* background: #FFCF07; */
    text-align: center;
    }
    .footer p{
        color: whitesmoke;
        margin: 20px auto;
        padding: 20px auto ;
        font-size: 15px;
        letter-spacing: 1px;
    }
    .footer p span{
        color: #FFCF07;
        font-style: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .imgg{
        border-radius: 20px;
    }
    .imgg:hover{
        border-radius: 30px;
        box-shadow: 5px 5px 5px 5px;
    }
    .title{
        padding-top: 40px;
    }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <a href={{url('admin/home')}} class="logo"><span>S</span>DSI</a>
            <div class="nav-links">
                <ul>
                    <li><a href="{{url('admin/home')}}">HOME</a></li>
                    <li><button> <a href="{{url('admin/trainees')}}" style="color: #000000;">Stagiaires</a></button></li>
                    <li><a href="{{url('admin/offers')}}">Offres</a></li>
                    <li><button id="btn1">PleinEcran</button></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Se Deconnecter') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>D<span>S</span>I</h1>
            <p>
                (<span>Direction</span> des systemes <span>d'informations</span>)  <br> <br> <br>
                -> Dirige une organisation, des services, des structures informatiques, <br>
                télécoms et fixe les évolutions des systèmes d'information et de télécommunications, <br>
                elon les besoins fonctionnels et la stratégie de l'entreprise. upervise la conception, la mise en oeuvre <br>
                et le maintien opérationnel (qualité, sécurité, fiabilité, coûts, délais) des prestations <br>
                informatiques produites et des systèmes d'information et télécoms.
                <p style="padding-right: 110px;">-> Supervise et pilote des projets en systèmes d'information. </p>
            </p>
        </div>
    </section>
    <section class="course">
        <section class="course">
            <h1>Nos <span>stagiaires</span><span class="span2"> /</span>offres</h1>
            <div class="row">   
                <div class="course-col">
                    <h2>Actuellement, </h2>
                    <p>Il existe <b>{{\App\Models\Trainee::count()}}</b>
                        Stagiaires au sein de la DSI 
                    </p>
                    <br>
                    <a href="{{url('admin/trainees')}}">Plus D'informations</a>
                </div>
                <div class="course-col">
                    <h2>Actuellement, </h2>
                    <p>Il existe <b>{{\App\Models\Offer::count()}}</b>
                        Offres de stage au sein de la DSI 
                    </p>
                    <br>
                    <a href="{{url('admin/offers')}}">Plus D'informations</a>
                </div>
            </div>
        </section>
        <section class="events">
            <div class="title">
                <h1>Services<span> De l'App</span></h1>
                <div class="line"></div>
            </div>
            <div class="row">
                <div class="col">
                    <img class="imgg" src="https://img.freepik.com/free-vector/internship-concept-illustration_114360-6225.jpg?w=740&t=st=1665675559~exp=1665676159~hmac=91d6166f650e52bcd4fbd00703c0753e36a97b65a80a391b298d9607fa774c26" alt="StagiaireLogo">
                    <h4 class="title">Gestion des stagiaires</h4>
                    <h5 style="font-size: 20px; padding-bottom: 20px; font-style: none;">Avec cette application : </h5>
                    <ul>
                        <li>Vous pouvez ajouter, modifier, <br> afficher et supprimer un stagiaire</li>
                        <li>Vous pouvez imprimer une attestation de <br> fin de stage pour chaque stagiaire</li>
                    </ul>
                </div>
                <div class="col">
                    <img class="imgg" src="https://img.freepik.com/free-vector/job-vacancy-background-with-chair_23-2147872789.jpg?w=740&t=st=1665675678~exp=1665676278~hmac=114a191a213ab4028ba8ee88e5d784e61599a48d63fc1ca72deaa08ff36cd1e3" alt="OffreLogo">
                    <h4 class="title">Gestion des offres</h4>
                    <h5 style="font-size: 20px; padding-bottom: 20px; font-style: none;">Avec cette application : </h5>
                    <ul>
                        <li>Vous pouvez ajouter, afficher, modifier <br> et supprimer une offre de stage</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="footer">
            <p>Avenue maternite souissi, Rabat | Phone : +212 62544884 | email : DSI@gmail.com</p>
            <p>copyright@2022 | Designed by <span><u>ELKHOTRI Omar</u></span></p>
        </section>
</body>
</html>

<script type="text/javascript">
    var btn1 = document.getElementById("btn1")    
    var el = document.documentElement;
    btn1.addEventListener("click", ()=>{
        if(el.requestFullscreen){
            el.requestFullscreen()
        }
    })
</script>
