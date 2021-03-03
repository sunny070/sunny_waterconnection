<?php

namespace App\Http\Controllers;
use App\Applicationform;
use Illuminate\Http\Request;

class UpdateexecutiveController extends Controller
{

    
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
        // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
        // Applicationform::where('id', $id)->delete();
        return redirect('home');
    }
    
    // public function suggestione(Request $id)
    // {
    //     $suggestion= ApplicationForm::find($id);
    
    //     $suggestion->Suggestione=request('Suggestione');
    //     $suggestion->save();

    // }
}
