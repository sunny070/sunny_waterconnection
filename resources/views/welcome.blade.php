<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WaterConnection</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- <link rel="stylesheet" href="/app.css"> -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/04bcd64717.js" crossorigin="anonymous"></script>


        








    
        <ul >
  <li><a class="active" href="/">Home</a></li>
  <li><a href="https://www.ndtv.com/topic/water-supply">News</a></li>
  <li><a href="/Contact">Contact</a></li>
  <li><a href="https://www.india.gov.in/about-portal">About</a></li>
  <li><a href="/rules">Rules</a></li>
</ul>




        <!-- Styles -->
        <style>
            html, body {
                box-sizing: border-box;
  margin: 0;
  padding: 0;
                
            }
            .navbar{
                /* position: sticky; */
                
            }
            .container{
    height: 100vh;
    padding:0;
    margin:0;
    
    align-items: center;
    /* box-shadow: inset 0 0 10px 50px rgba(151, 141, 141, 0.2); */
    object-fit: contain;

}
            video{
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: -1;
}

            .full-height {
                /* background-image: url("img/water.jp"); */
                /* height: 100vh; */
            }
            
            .flex-center {
                /* background-image: url("img/water.jp"); */
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                display:flex;
                flex-direction:column;
                justify-content: center;
                align-items: center;
            }

            .top-right {
                display:flex;
                justify-content:center;
            }
            

                
            .content {
                padding-top:100px;
                color:#ffff;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

                text-align: center;
            }
            .title p{
                font-size: 1rem;
            }
            .title h1 {
                font-size: 2rem;
            }

            .links > a {
                display:flex;
                justify-content:space-evenly;
                text-transform: uppercase;
                padding: 10px 20px;
                text-align: center;
                border-radius:60px;
                text-decoration: none;
                /* display: inline-block; */
                font-size: 1rem;
                /* background-color: black; */
                color: white;
                /* border: 2px solid #4CAF50; */

                
 

            }

            .links > a:hover{
                text-decoration: none;

                box-shadow: 0 5px 15px #2091c2;
    
}

            .m-b-md {
                margin-bottom: 30px;
            }
            
            img {
                color:#ffff
  float: top left;
  margin: 0px;
    width: 200px;
    /* broder-radius: */
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
  text-decoration: none;

    box-shadow: 0 5px 15px #2091c2;

}
/* fotter */

.footer-conatiner{
  display: flex;
   /* height: 100vh;
   padding-bottom: 20px; */


}
.footer-subscription{
  background-color:#1a1717;
  display: flex;
  align-items: center;
  color: #ffffff;

  flex-direction: column;
  justify-content: center;
}
.footer-link-wrapper{
  display: flex;
  background-color:#1a1717;

  justify-content: space-around;
  /* padding-top: 30px; */
}
.footer-link-items{
  padding-top: 30px;
  padding-left: 100px;
  display: flex;
  flex-direction: column;
  font-family: sans-serif;
  font-weight: bold;
  color: #ffffff;

}
.footer-link-items a{
  font-weight: 100;
  padding-top: 10px;
  color: #ffffff;
  text-decoration: none;
}
.footer-link-icon{
  padding-top: 30px;
  padding-bottom: 30px;
  /* background-color: #ffffff; */
  position: relative;
  background-color:#1a1717;


}

.footer-link-icon .fa-brands{
color: #000000;
padding: 2px;
background-color:#ffffff;
border-radius: 50%;
contain: content;

}
.footer-link-icon .fa-brands:hover{
  transition: all 0.3s ease-out;
  box-shadow: 0 5px 15px #2091c2;
}

.fa-facebook{
  position: absolute;
  right: 130px;

}
.fa-linkedin{
  position: absolute;
  right: 100px;

}
.fa-github{
  position: absolute;
  right: 70px;

}
.fa-instagram{
  position: absolute;
  right: 40px;
}
.fa-twitter{
  position: absolute;
  right:10px;
}
/* @media screen and  (max-width:900px) */
@media screen and (max-width:960px){
  .footer-link-wrapper{
      display: flex;
      justify-content: center;
      padding-top: 30px;
  }
  .footer-link-items{ 
      padding-top: 30px;
      padding-left: 100px;
      display: flex;
      flex-direction: column;
  } 
} 


















            
        </style>
        
        
    </head>
    
    <div class="container">
        
    <video src="{{asset('img/video.mp4')}}" autoplay loop muted>

    
    </video>     
    
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="hero-btns" href="{{ url('/home') }}" >Home</a>
                    @else
                        <a class="hero-btns" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <!-- <img style="width:20px;opacity: 0.5"src="data:image/jpeg;base64,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" alt="water"> -->
                    <img  src="{{asset('img/logo.png')}}" alt="logo">
                    <h1>New Water Connection Portal</h1>
                    <p>Get Water Connection by staying at home?</p>

                </div>
            </div>
        </div>
        </div>
        <footer>
            <!-- <p class="copy"> Copyright 2017 © Public Health Engineering Department in Mizoram</p>
            <a href="/disclamer" class="disc"><p>Disclamer</p></a>
            <a href="/privacy"><p>Privacy Policy</p></a>  -->





















            <div class='footer-container'>
        
      <div class='footer-link-wrapper'>
      <div class='footer-link-items'>
      <h2>Contact Us</h2>
                
                <a to="/sign-up"> Contact</a>
                <a href="#">Support</a>
                <a href="#">Destinations</a>
                <a href="#">Sponsorships</a>
                <a href="/disclamer">Disclamer</a>
                <a href="/privacy">Privacy Policy</a>
            </div>
            <div class='footer-link-items' >  
            <h2>Social Media</h2>
                <a href="/sign-up"> Instagram</a>
                <a href="/">Facebook</a>
                <a href="/">YouTube</a>
                <a href="/">Twitter </a>
                <a href="/">Github </a>
                <a href="/">Linkedin </a>

            </div>
            
            </div>
            <div class='footer-link-icon'>
                
            <spna style="color:#fff"> Copyright 2017 © Public Health Engineering Department in Mizoram</spna>
                <a> 
                <i class="fa-brands fa-facebook"></i>
                
                </a>
                <a>
                <i class="fa-brands fa-linkedin"></i>
                
                </a>
                <a>
                <i class="fa-brands fa-github"></i>
                
                </a>
                <a>
                <i class="fa-brands fa-instagram"></i>
                
                </a>
                <a>
                <i class="fa-brands fa-twitter"></i>
                
                </a>

            </div>
            
    </div>











            
        
        </footer>
        
        

    

    
</html>
