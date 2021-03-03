<?php

namespace App\Http\Controllers;
use App\Applicationform;
use PDF;

use Illuminate\Http\Request;

class CheckstatusController extends Controller
{
    public function index(){
        $cscstatus = Applicationform::all();
        return view ('cscstatus',['cscstatus'=>$cscstatus]);
    }

    public function search(){
        $search_text = $_GET['search'];
        $Applicant_Name = Applicationform::where('Applicant_Name','LIKE', '%'.$search_text.'%')->get();

        return view ('search',['Applicant_Name'=>$Applicant_Name]);
    }

}

