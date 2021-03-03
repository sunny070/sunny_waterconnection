<?php

namespace App\Http\Controllers;
use App\Applicationform;

use Illuminate\Http\Request;

class SectionclerkController extends Controller
{
    public function show3(){
        // $application_forms = DB::select('select * from application_forms');
        // $application_forms = 
        // return view('application_form_2',['application_forms'=>$application_forms]);
            // return 
        $applicationforms=Applicationform::all();
        return view('forwarderc',['ApplicationForm'=>$applicationforms]);
    }
    public function retrive3($id){
        // echo "gfh";
        $sectionclerk = Applicationform::findOrFail($id);
     
        return view('sectionclerk') ->with ('sectionclerk',$sectionclerk);
    }
}
