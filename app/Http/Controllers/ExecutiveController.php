<?php

namespace App\Http\Controllers;
use App\Applicationform;
use Response;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    public function show(){
        // $application_forms = DB::select('select * from application_forms');
        // $application_forms = 
        // return view('application_form_2',['application_forms'=>$application_forms]);
            // return 
        $applicationforms=Applicationform::all();
        return view('forwardere',['ApplicationForm'=>$applicationforms]);
    }
    public function retrive($id){
        // echo "gfh";
        $executiveengineer = Applicationform::findOrFail($id);
        // dd($executiveengineer);
        return view('executiveengineer') ->with ('executiveengineer',$executiveengineer);
    }
    public function download1($id){
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
    public function download2($id){
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
    public function download3($id){
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
