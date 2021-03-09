<!-- //forwarder for executive engineer -->
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
    text-transform: uppercase;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
    text-transform: uppercase;
    background-color: #f2f2f2;}
</style>
@extends('layouts.app')

@section('content')

<div style="overflow-x:auto;" >
<table class="table">
   <th>
   <tr>
   <th >ID</th>
   <th>Name</th>
   <th>Application Date</th>
  
   <th>Address</th>

   </tr>
   </th>
  
   <tbody>
   
   @foreach($ApplicationForm as $ad)
    @if($ad->Remarks_from_JuniorEngineer == '')
    <tr>
   <td>{{$ad->id}}</td>
   <td><a href="/juniorengineer/{{$ad->id}}">{{$ad->Applicant_Name}}</a></td>
   <td>{{$ad->Application_date}}</td>
   <td>{{$ad->Present_Address_Location}}</td>
    </tr>
     
      
      @endif

   </tbody>
    @endforeach
        </table>
 

</div>
@endsection