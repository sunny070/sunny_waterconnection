<?php

namespace App\Http\Controllers;
use mail;
use App\Applicationform;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    protected $layout='ApplicationForm';
    public function index(){
        return view('application_form/ApplicationForm');
    }
    public function store(Request $request){

        $applicationforms= new Applicationform();
        // 
        $applicationforms->Application_date=request('Application_date');
        $applicationforms->Applicant_Name=request('Applicant_Name');
        $applicationforms->DOB=request('DOB');
        $applicationforms->gender=request('gender');
        $applicationforms->Email=request('Email');
        $applicationforms->Contact_No=request('Contact_No');
        $applicationforms->Relationship_Type=request('Relationship_Type');
        $applicationforms->Relation_Name=request('Relation_Name');
        $applicationforms->Present_Address_Hno=request('Present_Address_Hno');
        $applicationforms->Present_Address_Sub_locality1=request('Present_Address_Sub_locality1');
        $applicationforms->Present_Address_Sub_locality2=request('Present_Address_Sub_locality2');
        $applicationforms->Present_Address_Location=request('Present_Address_Location');
        $applicationforms->Present_Address_Sub_District=request('Present_Address_Sub_District');
        $applicationforms->Present_Address_District=request('Present_Address_District');
        $applicationforms->Present_Address_State=request('Present_Address_State');
        $applicationforms->Present_Address_pin_code=request('Present_Address_pin_code');
        $applicationforms->present_Address_Country=request('present_Address_Country');
        $applicationforms->Present_Address_Police_Station=request('Present_Address_Police_Station');
        $applicationforms->Present_Address_Post_office=request('Present_Address_Post_office');
        $applicationforms->Permanent_Address_Hno=request('Permanent_Address_Hno');
        $applicationforms->Permanent_Address_Sub_locality1=request('Permanent_Address_Sub_locality1');
        $applicationforms->Permanent_Address_Sub_locality2=request('Permanent_Address_Sub_locality2');
        $applicationforms->Permanent_Address_Location=request('Permanent_Address_Location');
        $applicationforms->Permanent_Address_Sub_District=request('Permanent_Address_Sub_District');
        $applicationforms->Permanent_Address_District=request('Permanent_Address_District');
        $applicationforms->Permanent_Address_State=request('Permanent_Address_State');
        $applicationforms->Permanent_Address_pin_code=request('Permanent_Address_pin_code');
        $applicationforms->Permanent_Address_Country=request('Permanent_Address_Country');
        $applicationforms->Permanent_Address_Police_Station=request('Permanent_Address_Police_Station');
        $applicationforms->Permanent_Address_Post_office=request('Permanent_Address_Post_office');
        $applicationforms->Education=request('Education');
        $applicationforms->Religion=request('Religion');
        $applicationforms->Occupation=request('Occupation');
        $applicationforms->Income=request('income');
         $applicationforms->Remark=request('Remark');
        if($files = $request->file('doc1')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $applicationforms->doc1 = $myFileName;
            }catch(Exception $e){
                error_log("Error in doc 1: ".$e);
            }
            

        }
        if($files = $request->file('doc2')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $applicationforms->doc2 = $myFileName;
            }catch(Exception $e){
                error_log("Error in doc 2: ".$e);
            }
            
        }
        if($files = $request->file('doc3')){
            try{
                $destinationPath  ="public/images";
                $randomNo = Str ::random(10);
                $myFileName = $randomNo.".". $files->getClientOriginalExtension();
                $files->move($destinationPath,$myFileName );
                $applicationforms->doc3 = $myFileName;
            }catch(Exception $e){
                error_log("Error in doc 3: ".$e);
            }
            
        }
      
 $applicationforms->save();
       // return $applicationform;

         return redirect('home');


        // return redirect('application_form/homepage');

    }
    // public function show(){
    //     // $application_forms = DB::select('select * from application_forms');
    //     // $application_forms = 
    //     // return view('application_form_2',['application_forms'=>$application_forms]);
    //         // return 
    //     $applicationforms=Applicationform::all();
    //     return view('forwardere',['ApplicationForm'=>$applicationforms]);
    // }
    // public function retrive($id){
    //     // echo "gfh";
    //     $executiveengineer = Applicationform::findOrFail($id);
    //     // dd($executiveengineer);
    //     return view('executiveengineer') ->with ('executiveengineer',$executiveengineer);
    // }
    //for junior engineer
    // public function show1(){
    //     // $application_forms = DB::select('select * from application_forms');
    //     // $application_forms = 
    //     // return view('application_form_2',['application_forms'=>$application_forms]);
    //         // return 
    //     $applicationforms=Applicationform::all();
    //     return view('forwarderj',['ApplicationForm'=>$applicationforms]);
    // }
   
    // public function retrive1($id){
    //     // echo "gfh";
    //     $juniorengineer = Applicationform::findOrFail($id);
     
    //     return view('juniorengineer') ->with ('juniorengineer',$juniorengineer);
    // }
    // public function show2(){
    //     // $application_forms = DB::select('select * from application_forms');
    //     // $application_forms = 
    //     // return view('application_form_2',['application_forms'=>$application_forms]);
    //         // return 
    //     $applicationforms=Applicationform::all();
    //     return view('forwarders',['ApplicationForm'=>$applicationforms]);
    // }
    // public function retrive2($id){
    //     // echo "gfh";
    //     $supritendentengineer = Applicationform::findOrFail($id);
     
    //     return view('supritendentengineer') ->with ('supritendentengineer',$supritendentengineer);
    // }

    // public function show3(){
    //     // $application_forms = DB::select('select * from application_forms');
    //     // $application_forms = 
    //     // return view('application_form_2',['application_forms'=>$application_forms]);
    //         // return 
    //     $applicationforms=Applicationform::all();
    //     return view('forwarderc',['ApplicationForm'=>$applicationforms]);
    // }
    // public function retrive3($id){
    //     // echo "gfh";
    //     $sectionclerk = Applicationform::findOrFail($id);
     
    //     return view('sectionclerk') ->with ('sectionclerk',$sectionclerk);
    // }

    public function update(Request $request , $id)
    {
        $status= Applicationform::find($id);

        if($request->has('approve')){
            $status->Remarks_from_ExecutiveEngineer = 'Accepted';
            $status->save();
            return redirect('/forwardere');
        }
        elseif($request->has('reject')){
            return view ('reject/RejectForwardere',['ApplicationForms'=>$status]);
        }
    }


    public function update1(Request $request , $id){
        $status= ApplicationForm::find($id);
    
        $status->Remarks_from_ExecutiveEngineer=request('Remark');
        $status->save();
        return redirect('home');
    }

    // public function update2(Request $request , $id)
    // {
    //     $status= Applicationform::find($id);

    //     if($request->has('approve')){
    //         $status->Remarks_from_JuniorEngineer = 'Accepted';
    //         $status->save();
    //         return redirect('/forwarderj');
    //     }
    //     elseif($request->has('reject')){
    //         return view ('reject/RejectForwarderj',['ApplicationForms'=>$status]);
    //     }
    // }
    // public function update3(Request $request , $id){
    //     $status= ApplicationForm::find($id);
    
    //     $status->Remarks_from_JuniorEngineer =request('Remark');
    //     $status->save();
    //     // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
    //     // ApplicationForm::where('id', $id)->delete();
    //     return redirect('/Home_page');
    // }
    // public function update4(Request $request , $id)
    // {
    //     $status= Applicationform::find($id);

    //     if($request->has('approve')){
    //         $status->Remarks_from_SupritendentEngineer = 'Accepted';
    //         $status->save();
    //         return redirect('/forwarders');
    //     }
    //     elseif($request->has('reject')){
    //         return view ('reject/RejectForwarders',['ApplicationForms'=>$status]);
    //     }
    // }
    // public function update5(Request $request , $id){
    //     $status= ApplicationForm::find($id);
    
    //     $status->Remarks_from_SupritendentEngineer =request('Remark');
    //     $status->save();
    //     // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
    //     // ApplicationForm::where('id', $id)->delete();
    //     return redirect('/Home_page');
    // }

    // public function update6(Request $request , $id)
    // {
    //     $status= Applicationform::find($id);

    //     if($request->has('approve')){
    //         $status->Remarks_from_SectionClerk = 'Accepted';
    //         $status->save();
    //         return redirect('forwarderc');
    //     }
    //     elseif($request->has('reject')){
    //         return view ('reject/RejectForwarderc',['ApplicationForms'=>$status]);
    //     }
    // }
    // public function update7(Request $request , $id){
    //     $status= ApplicationForm::find($id);
    
    //     $status->Remarks_from_SectionClerk =request('Remarks_from_Forworder');
    //     $status->save();
    //     Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
    //     ApplicationForm::where('id', $id)->delete();
    //     return redirect('/Home_page');
    // }

}

