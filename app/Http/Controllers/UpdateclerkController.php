<?php

namespace App\Http\Controllers;
use App\Applicationform;
use Illuminate\Http\Request;

class UpdateclerkController extends Controller
{
    public function update6(Request $request , $id)
    {
        $status= Applicationform::find($id);

        if($request->has('approve')){
            $status->Remarks_from_SectionClerk = 'Accepted';
            $status->save();
            return redirect('forwarderc');
        }
        elseif($request->has('reject')){
            return view ('reject/RejectForwarderc',['ApplicationForms'=>$status]);
        }
    }
    public function update7(Request $request , $id){
        $status= ApplicationForm::find($id);
    
        $status->Remarks_from_SectionClerk =request('Remark');
        $status->save();
        // Mail::to($status->Email)->send(new ForwarderRemarksmail($status));
        // ApplicationForm::where('id', $id)->delete();
        return redirect('/home');
    }

}
