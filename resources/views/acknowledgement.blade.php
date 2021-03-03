<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/ack.css" rel="stylesheet">
    <title>Acknowledgement</title>
    

    <style>
          .box {
    width: 70%;
    padding: 10px;
    border: 4px solid rgb(0, 0, 0);
    margin: 0;
    margin: auto;
    
  }
  p u:after {
  content: "\0a0\0a0\0a0\0a0\0a0\0a0"; 
}
p u:before {
  content: "\0a0\0a0\0a0"; 
}

h1{
    text-align: center;

}
#size{
    font-size: xx-large;
}
p{
    text-align: left;
    line-height: 1.4;
    word-spacing: 10px;
    font-size: x-large;
    margin-top: 50px;
}





.sign{
    float: right;
    padding-right: 8px;
}


    </style>
  </head>
  <body>
  <div class="box">

    <h1><u>Acknowledgement</u></h1>
    <p id="size" class="text">This is to acknowledge the receipt <u>New Water Connection</u> <br> with Application Name.: <u><b>{{$data->Applicant_Name}}</b></u>  <br> dated on <u><b>{{$data->Application_date}}</b></u> to the SDO  has been Submitted.</p>
    <br>
    <br>
    <div class="place" id="size">Place: {{$data->Present_Address_District}}</div>
    <br>
    <span class="date" id="size">Date: {{$data->Application_date}}</span>
    <span class="sign" id="size">Authority Signature</span>
    

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

