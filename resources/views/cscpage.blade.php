<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WaterConnection</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


<ul>
<img src="{{asset('img/OIP.jpg')}}" alt="">
    <li><a class="active" href="/">Home</a></li>
    <li><a href="https://www.ndtv.com/topic/water-supply">News</a></li>
    <li><a href="/Contact">Contact</a></li>
    <li><a href="https://www.india.gov.in/about-portal">About</a></li>
    <li><a href="/rules">Rules</a></li>

</ul>
<div class="button">
<a href="/appli"><button class="button" style="vertical-align:middle"><span>New Connection </span></button></a>
  
       
   <a href="/cscstatus"><button class="button" style="vertical-align:middle"><span>Check Status </span></button></a>


</div>

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
  float:right;
  margin: 0px;
 padding:0px;
 inline-size: 50px;
    border-radius: 10px;
   
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
.button{
    float:right;
}
button{
    box-shadow: 0px 10px 14px -7px #3dc21b;
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	background-color:#44c767;
	border-radius:21px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	font-weight:bold;
	padding:14px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
button:hover{
    background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	background-color:#5cbf2a;
}
button:active{
    position:relative;
	top:1px;
}

        

            /* fotter */
            
        </style>
        
        
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
        <div class="btn">
        <h2>Conserve Water</h2>
  <p>
  Water is one of the basic necessities for every living being and we cannot imagine a life without water. It is the natural resource and the main constituent of our planet earth. Water is the universal solvent and plays a key role in the existence of various forms of life on the planet earth. It is widely used for various purposes such as washing, bathing, cleaning, cooking, drinking, and other industrial and domestic uses.

Water is a colourless and odourless substance that is essential for the survival of living beings. There are various sources of water such as wells, rivers, ponds, lakes, oceans, big dams, and streams. As we all know, nearly 70 to 80 percent of the Earth’s surface is covered by water, among which only 1-2 per cent water is pure and suitable for human use.</p>

</p>
<h2>Some steps can be taken to Conserve water</h2>
<p>Conserving water helps us by supplying more amount of water for longer usage. It has become necessary in all areas because these natural resources are reducing along with the increasing population and their usages.

There are several ways to conserve water. Here are some important and easy ways for the conservation of water

Keeping the tap closed when not in use.
Check for the openings or leaks in water distribution pipes.
Make sure to use collected rainwater for gardening or washing purpose.
Always have a measure of how many buckets of water is wasted in a day and try to reduce.
Do not run more water than necessary while washing and cleaning clothes, utensils, etc.
Do not prolong your bathing. Go for a quick shower rather than wasting buckets of water</p>
</div> 

        </div>

        <footer>
            
            <p>Copyright 2017 © Public Health Engineering Department in Mizoram<br>
            <a href="/disclamer">Disclamer</a>
            <a href="/privacy">Privacy Policy</a></p>
        
        </footer>
        
        

    </body>

    
</html>
