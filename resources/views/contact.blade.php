<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<ul>

  <li><a class="active" href="/">Home</a></li>
  <li><a href="https://www.ndtv.com/topic/water-supply">News</a></li>
  <li><a href="/Contact">Contact</a></li>
  <li><a href="https://www.india.gov.in/about-portal">About</a></li>
  <li><a href="/rules">Rules</a></li>

</ul>

    
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
</style>
</head>
<body>


<img src="{{asset('img/conatct.png')}}" alt="">
<h2>GET IN TOUCH</h2>
<div class="flex-center position-ref full-height">

<p>
<a href="https://maps.google.com/maps?ll=23.723994,92.717605&z=15&t=m&hl=en-US&gl=IN&mapclient=embed&cid=5809748800849570413">View Map</a>
<br>
Address Info <br>
Engineer-in-Chief Office<br>
Khatla (Opposite Tennis Court),<br>
Aizawl,<br>
Mizoram - 796001<br>
Phone No : (0389) - 2322244<br>
Fax No : (0389) - 2301706<br>
</div>
<footer>
            
            <p>E-mail: phedmizoram@yahoo.com<br>
            <a href="/disclamer">Disclamer</a>
            <a href="/privacy">Privacy Policy</a></p>
        
        </footer>



</body>
</html>



