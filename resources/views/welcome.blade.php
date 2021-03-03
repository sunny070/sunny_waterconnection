<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WaterConnection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <ul>
  <li><a class="active" href="/">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="/rules">Rules</a></li>
</ul>



        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
                /* background-image: url("img/water.jpg"); */
                background-repeat: no-repeat;
                background-size: auto;
                 background-position: center;
                 background-size: cover;
                margin:0;
                padding:0;
                color: white;
            }

            .full-height {
                /* background-image: url("img/water.jp"); */
                height: 100vh;
            }

            .flex-center {
                /* background-image: url("img/water.jp"); */
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
               
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                
                text-transform: uppercase;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                background-color: black;
                color: white;
                border: 2px solid #4CAF50;

                
 
  /* padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
  
  color: white;
  border: 2px solid #4CAF50; */
            }

            .links > a:hover{
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    background-color: violet;
}

            .m-b-md {
                margin-bottom: 30px;
            }
            
            img {
  /* float: top left; */
  margin: 0px;
    width: -webkit-fill-available
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #09568d;
}

        
        /* footer{
    
            height:60px;  
            margin:0;
            padding:0;
          
            background-color: black;

            display: flex;
             color: white;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;

             

             list-style-type: none;
             margin: 0;
             padding: 0;
             overflow: hidden;
             background-color: #333;

             
        } */
        /* p.copy{
            height:60px;  
            margin:0;
            padding:0;
          
            background-color: black;

            display: flex;
             color: white;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;

             

             list-style-type: none;
             margin: 0;
             padding: 0;
             overflow: hidden;
             background-color: #333;
        } */

        footer {
            height:60px;  
            margin:0;
            padding:0;
          
            background-color: black;

            display: flex;
             color: white;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;
             list-style-type: none;
             margin: 0;
             padding: 0;
             overflow: hidden;
             background-color: #333;
}

footer p a {
    float:right;

    display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

  /* text-align: center; */
  padding: 3px;
  background-color: #333;
  color: white;
}
footer p a:hover {
  background-color: #09568d;
}

           

            /* fotter */
            
        </style>
        
        
    </head>
    <body>
        <img src="{{asset('img/logo.png')}}" alt="">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    New Water Connection Portal
                </div>
            </div>
        </div>

        <footer>
            <!-- <p class="copy"> Copyright 2017 © Public Health Engineering Department in Mizoram</p>
            <a href="/disclamer" class="disc"><p>Disclamer</p></a>
            <a href="/privacy"><p>Privacy Policy</p></a>          -->
            <p>Copyright 2017 © Public Health Engineering Department in Mizoram<br>
            <a href="/disclamer">Disclamer</a>
            <a href="/privacy">Privacy Policy</a></p>
        
        </footer>
        
        

    </body>

    
</html>
