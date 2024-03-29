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
<div class="search">
  <form action="{{ url('/search') }}" method="get">
  @csrf
    <input type="search" name="search" placeholder="Search Applicant">
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
    </div>

<div style="overflow-x:auto;" >

<table class="table">
   <th>
   <tr>
   <th >ID</th>
   <th>Name</th>
   <th>Application Date</th>
   <th>Address</th>
   <th>Remarks From Executive Engineer</th>
   <th>Remarks From junior Engineer</th>
   <th>Remarks From Supritendent Engineer</th>
   <th>Remarks From Cleark</th>

   <th>Reciept</th>
   <th>Acknowledgement</th>
   </tr>
   </th>
   @foreach($cscstatus as $ad)
   <tbody>
   <tr>
   <td>{{$ad->id}}</td>
   <td>{{$ad->Applicant_Name}}</td>
   <td>{{$ad->Application_date}}</td>
   <td>{{$ad->Present_Address_Location}}</td>
   
   
   <td>{{$ad->Remarks_from_ExecutiveEngineer}}</td>
   <td>{{$ad->Remarks_from_JuniorEngineer}}</td>
   <td>{{$ad->Remarks_from_SupritendentEngineer}}</td>
   <td>{{$ad->Remarks_from_SectionClerk}}</td>

   @if($ad->Remarks_from_ExecutiveEngineer == 'Accepted'&& $ad->Remarks_from_JuniorEngineer == 'Accepted'&& $ad->Remarks_from_SupritendentEngineer == 'Accepted')
      <td id="cert"><a href="/reciept/{{$ad->id}}">Reciept</a></td>
      <td id="ackno"><a href="/acknowledgement/{{$ad->id}}">Acknowledgement</a></td>
      
      @elseif($ad->Remarks_from_ExecutiveEngineer == 'Remark'&& $ad->Remarks_from_JuniorEngineer == 'Remark'&& $ad->Remarks_from_SupritendentEngineer == 'Remark' && $ad->Remarks_from_SectionClerk == 'Remark')
      
      
      @endif

   
   </tbody>

    @endforeach
        </table>
 

</div>

@endsection