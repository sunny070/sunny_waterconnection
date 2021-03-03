<?php

namespace App\Http\Controllers;
use App\Applicationform;

use Illuminate\Http\Request;

class JuniorengineerController extends Controller
{
    public function show1(){
        // $application_forms = DB::select('select * from application_forms');
        // $application_forms = 
        // return view('application_form_2',['application_forms'=>$application_forms]);
            // return 
        $applicationforms=Applicationform::all();
        return view('forwarderj',['ApplicationForm'=>$applicationforms]);
    }
   
    public function retrive1($id){
        // echo "gfh";
        $juniorengineer = Applicationform::findOrFail($id);
     
        return view('juniorengineer') ->with ('juniorengineer',$juniorengineer);
    }
    public function download4($id){
        $applicationforms = Applicationform::find($id);
        $filename = $applicationforms->doc1;
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
    public function download5($id){
        $applicationforms = Applicationform::find($id);
        $filename = $applicationforms->doc2;
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
    public function download6($id){
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
