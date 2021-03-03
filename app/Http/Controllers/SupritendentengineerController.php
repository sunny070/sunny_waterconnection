<?php

namespace App\Http\Controllers;
use App\Applicationform;

use Illuminate\Http\Request;

class SupritendentengineerController extends Controller
{
    public function show2(){
        // $application_forms = DB::select('select * from application_forms');
        // $application_forms = 
        // return view('application_form_2',['application_forms'=>$application_forms]);
            // return 
        $applicationforms=Applicationform::all();
        return view('forwarders',['ApplicationForm'=>$applicationforms]);
    }
    public function retrive2($id){
        // echo "gfh";
        $supritendentengineer = Applicationform::findOrFail($id);
     
        return view('supritendentengineer') ->with ('supritendentengineer',$supritendentengineer);
    }

    public function download7($id){
        $applicationforms = Applicationform::find($id);
        $filename = $applicationforms->doc3;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    public function download8($id){
        $applicationforms = Applicationform::find($id);
        $filename = $applicationforms->doc3;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
    public function download9($id){
        $applicationforms = Applicationform::find($id);
        $filename = $applicationforms->doc3;
        $file_path = public_path()."/public/images/".$filename;
        if(file_exists($file_path))
        {
             return Response::download($file_path,$filename,[
                  'Content-Length: '.filesize($file_path)
             ]);
        }
        else{
            Exit('Requested file does not exist ');
        }
    }
}
