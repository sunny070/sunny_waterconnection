<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Retrive</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.btn-group .button {
  background-color: #4CAF50; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
}

.btn-group .button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

.btn-group .button:hover {
  background-color: #3e8e41;
}
</style>
  </head>
  <body>
  @extends('layouts.app')

@section('content')
      <h1>Applicant Details</h1>
   
    <table>
    <tr>
    <th>ID:</th>
    <td>{{$sectionclerk->id}}</td>
    </tr><tr>
    <th>Email:</th>
    <td>{{$sectionclerk->Email}}</td>
    </tr>
    <tr>
    <th>Name:</th>
    <td>{{$sectionclerk->Applicant_Name}}</td>
    </tr>
    <tr>
    <th>Application Date:</th>
    <td>{{$sectionclerk->Application_date}}</td>
    </tr>
    <tr>
    <th>Applicant Name:</th>
    <td>{{$sectionclerk->Applicant_Name}}</td>
    </tr>
    <tr>
    <th>Date Of Birth:</th>
    <td>{{$sectionclerk->DOB}}</td>
    </tr>
    <tr>
    <th>Gender:</th>
    <td>{{$sectionclerk->gender}}</td>
    </tr>
    <tr>
    <th>Contact Number:</th>
    <td>{{$sectionclerk->Contact_No}}</td>
    </tr>
    <tr>
    <th>Relationship Type:</th>
    <td>{{$sectionclerk->Relationship_Type}}</td>
    </tr>
    <tr>
    <th>Present Address Hno.:</th>
    <td>{{$sectionclerk->Present_Address_Hno}}</td>
    </tr>
    <tr>
    <th>Present_Address_Sub_locality1:</th>
    <td>{{$sectionclerk->Present_Address_Sub_locality1}}</td>
    </tr>
    <tr>
    <th>Present_Address_Sub_locality2:</th>
    <td>{{$sectionclerk->Present_Address_Sub_locality2}}</td>
    </tr>
    <tr>
    <th>Present_Address_Location:</th>
    <td>{{$sectionclerk->Present_Address_Location}}</td>
    </tr>
    <tr>
    <th>Present_Address_Sub_District:</th>
    <td>{{$sectionclerk->Present_Address_Sub_District}}</td>
    </tr>
    <tr>
    <th>Present_Address_District:</th>
    <td>{{$sectionclerk->Present_Address_District}}</td>
    </tr>
    <tr>
    <th>Present_Address_State:</th>
    <td>{{$sectionclerk->Present_Address_State}}</td>
    </tr>:
    <tr>
    <th>Present_Address_pin_code:</th>
    <td>{{$sectionclerk->Present_Address_pin_code}}</td>
    </tr>
    <tr>
    <th>present_Address_Country:</th>
    <td>{{$sectionclerk->present_Address_Country}}</td>
    </tr>
    <tr>
    <th>Present_Address_Police_Station:</th>
    <td>{{$sectionclerk->Present_Address_Police_Station}}</td>
    </tr>
    <tr>
    <th>Application_date:</th>
    <td>{{$sectionclerk->Application_date}}</td>
    </tr>
    <tr>
    <th>Present_Address_Post_office:</th>
    <td>{{$sectionclerk->Present_Address_Post_office}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Hno:</th>
    <td>{{$sectionclerk->Permanent_Address_Hno}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Sub_locality1:</th>
    <td>{{$sectionclerk->Permanent_Address_Sub_locality1}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Sub_locality1:</th>
    <td>{{$sectionclerk->Permanent_Address_Sub_locality1}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Sub_locality2:</th>
    <td>{{$sectionclerk->Permanent_Address_Sub_locality2}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Location:</th>
    <td>{{$sectionclerk->Permanent_Address_Location}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Sub_District:</th>
    <td>{{$sectionclerk->Permanent_Address_Sub_District}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_District:</th>
    <td>{{$sectionclerk->Permanent_Address_District}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_State:</th>
    <td>{{$sectionclerk->Permanent_Address_State}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_pin_code:</th>
    <td>{{$sectionclerk->Permanent_Address_pin_code}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Country:</th>
    <td>{{$sectionclerk->Permanent_Address_Country}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Police_Station:</th>
    <td>{{$sectionclerk->Permanent_Address_Police_Station}}</td>
    </tr>
    <tr>
    <th>Permanent_Address_Post_office:</th>
    <td>{{$sectionclerk->Permanent_Address_Post_office}}</td>
    </tr>
    <tr>
    <th>Education:</th>
    <td>{{$sectionclerk->Education}}</td>
    </tr>
    <tr>
    <th>Religion:</th>
    <td>{{$sectionclerk->Religion}}</td>
    </tr>
    <tr>
    <th>Occupation:</th>
    <td>{{$sectionclerk->Occupation}}</td>
    </tr>
    <tr>
    <th>Income:</th>
    <td>{{$sectionclerk->income}}</td>
    </tr>
    <tr>
    <th>Remark:</th>
    <td>{{$sectionclerk->Remark}}</td>
    </tr>

    </table>
    <div class="btn-group">
    <form action="/result3/{{$sectionclerk->id}}" method="post">
    @csrf
  <button class="button" name="approve">Approve</button>
  <!-- <button class="button" name="reject">Reject</button> -->
  </form>
</div>

    <!-- <button type="button" name="accept" class="button1">Accept</button>
    <button type="button" name="reject" class="button2">Reject</button> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    @endsection
  </body>
</html>