<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use App\Models\AllOrder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailOrder;
use Illuminate\Support\Arr;



class Product extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function  add(){
        return view('order');
    }
    public function  show(){
        return view('menu2');
    }

    public function CheckCode(Request $request){

        $code=User::find(Auth::id());

        $messages = [
            'required' => 'غير متطابق',
            'in' => 'غير متطابق ',

          ];
          $validators = Validator::make($request->all(),[
          
            'code' => 'required|in:'.$code->code,

        ], $messages);
        if ($validators->fails()) 
            return response()->json(['error'=>$validators->errors()]);

            if($code->code == $request->code ){
                User::find(Auth::id())->update([
                    'done'=>1,
                ]);
            }

    }

    public function ResendCode(){
        
          $codes=rand(100000,999999);
          $p= substr(Auth::user()->username, 1, 10);
           $nexmo=app('Nexmo\Client');
          $nexmo->message()->send([
            'to'=>'00962'.$p,
            'from'=>"HOT SNACK ",
            'text'=>' (New CODE ) =  ('.$codes.')' ,
        ]);

         User::where('id',Auth::id())->update([
            'code' => $codes,
        ]);
        return redirect()->back()->with('message', 'تــم ارسال كود التحقق للرقم !'.Auth::user()->username);

    }

    public function confirm(){
        $final_order = order::where('user_id',Auth::id())->get();
        $sum=0;
        foreach ($final_order as $item ) 
            $sum+=$item->count * $item->product->salary;      

            if(empty($sum))
             return redirect('/menus');
        else
        return view('complete',compact('final_order','sum'));
         }

         public function delete(){
            order::where('user_id',Auth::id())->delete();
            return redirect('/menus');
        }
             
        public function SaveLocation(Request $request){
            $message=[
                'required'=>'مطلوب',
                'location.max'=>'الحد الاعلى 30 حرف',
                'note.max'=>'الحد الاعلى 250 حرف',
                'location.min'=>'عنوان قصير',

            ];
           
            $validator=Validator::make($request->all(),[
           'location'=>'bail|required|min:3|max:30',
           'note'=>'max:250',

           
            ],$message);
            
            if($validator->fails())
            return response()->json(['error'=>$validator->errors()]);
            $order_items = order::where('user_id',Auth::id())->get();
            $number_order=rand(10000000,99999999); // select by Group  by order
           
            foreach($order_items as $key){
                
            $info=[
            'count'=>$key->count,
            'user_id'=>$key->user_id,
            'product_id'=>$key->product_id,
            'total'=>$key->count*$key->product->salary,
            'location'=>$request->location,
            'number_order'=>$number_order,
            'created_at'=>Carbon::now()->addHours(3),
            'note'=>$request->note,
                ];
            DB::table('all_orders')->insert($info);}

            $sum=0;
                foreach($order_items as $value)
            $sum+=$value->product->salary * $value->count;

            $noite=$request->note;
            $add=$request->location;
             Mail::to('hotsnack.2016@gmail.com', 'طلب  زبون')->send(new MailOrder($order_items,$add,$sum,$noite));
        
           order::where('user_id',Auth::id())->delete();

        }

         
        public function MyOrder(){
            $final_order = AllOrder::where('user_id',Auth::id())->orderBy('created_at', 'DESC')->get()->groupBy('number_order');

            return view('MyOrder',compact('final_order'));
        }



        
    
                 

            



}
