<?php

namespace App\Http\Controllers;
use App\Applicationform;
use Illuminate\Http\Request;

class UpdatesupritendentController extends Controller
{
    public function update4(Request $request , $id)
    {
        $status= Applicationform::find($id);

        if($request->has('approve')){
            $status->Remarks_from_SupritendentEngineer = 'Accepted';
            $status->save();
            return redirect('/forwarders');
        }
        elseif($request->has('reject')){
            return view ('reject/RejectForwarders',['ApplicationForms'=>$status]);
        }
    }
    public function update5(Request $request , $id){
        $status= ApplicationForm::find($id);
    
        $status->Remarks_from_SupritendentEngineer =request('Remark');
        $status->save();
        // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
        // ApplicationForm::where('id', $id)->delete();
        return redirect('/home');
    }

    public function suggestions(Request $id)
    {
        $suggestion= ApplicationForm::find($id);
        $suggestion->Suggestions=request('Suggestions');
        $suggestion->save();

    }
}
