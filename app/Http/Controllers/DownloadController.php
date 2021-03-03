<?php

namespace App\Http\Controllers;
use App\Applicationform;
use PDF;
use DB;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function mypdf($id){
        $data =Applicationform:: find($id);
        $pdf = PDF::loadView('acknowledgement',compact('data'));
        $fileName ="";
        try{
            $fileName = $data->Application_No;
        }
        catch(Exception $e)
        {
            $fileName = 'myInfo';
        }
        return $pdf->stream();
        // return $pdf->download($fileName.'.pdf');
    }
}
