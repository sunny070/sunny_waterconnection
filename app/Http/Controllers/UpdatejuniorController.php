<?php

namespace App\Http\Controllers;
use App\Applicationform;

use Illuminate\Http\Request;

class UpdatejuniorController extends Controller
{
    public function update2(Request $request , $id)
    {
        $status= Applicationform::find($id);

        if($request->has('approve')){
            $status->Remarks_from_JuniorEngineer = 'Accepted';
            $status->save();
            return redirect('/forwarderj');
        }
        elseif($request->has('reject')){
            return view ('reject/RejectForwarderj',['ApplicationForms'=>$status]);
        }
    }
    public function update3(Request $request , $id){
        $status= ApplicationForm::find($id);
    
        $status->Remarks_from_JuniorEngineer =request('Remark');
        $status->save();
        // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
        // ApplicationForm::where('id', $id)->delete();
        return redirect('/home');
    }

    
   
}
