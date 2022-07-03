<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\MailOrder;
use App\Models\order;



use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('welcome');
    }

    public function contact(Request $request){

    $message=[
        'required'=>"مطلوب",
        'fullname.max'=>"الحد الاعلى 15 حرف",
        'message.max'=>"الحد الاعلى 300 حرف",
        'regex'=>"احرف فقط",
        'digits'=>"رقم هاتف غير صحيح",
        'numeric'=>"رقم هاتف غير صحيح",

    ];
    $details=Validator::make($request->all(),[
        'name'=>'bail|required|max:15|regex:/[a-zA-Z\s]+/  ',
        'phone'=>'bail|required|digits:10|numeric',
        'message'=>'bail|required|max:300|'
    ],$message);

    if($details->fails())
    return response()->json(['error'=>$details->errors()]);
  
    $info = [
        'name' => $request->name,
        'phone' => $request->phone,
        'message' => $request->message,
    ];

    Mail::to('hotsnack.2016@gmail.com', 'رسالة زبون')->send(new contact($info));
    }





}
