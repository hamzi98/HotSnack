<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAll extends Component
{

    public $phone;
    public $code;
    public $code_random;
    public $PassUser;

    public $show=0;
    public $ChangePassword=false;
    public $NewPassword=false;

    protected $rules = [
        'PassUser' => 'required|min:8',
    ];
    protected $messages = [
        'required' => 'كلمة المرور إلزامية',
        'min' => '8 أحرف على الأقل',
    ];

 
    public function render()
    {
        return view('livewire.user-all');
    }
    
    public function CodeIsTrue()
    {
        if ( $this->code ==  $this->code_random) 
            $this->ChangePassword=true;
            $this->code_random=0;
    }
    public function pass()
    {
        $this->validate();

        User::where('username',$this->phone)->update(['password' => Hash::make($this->PassUser),]);
        $this->ChangePassword=false;
        return redirect('login')->with('ChangePass', 'تم تغيير كلمة المرور بنجاح ، يمكنك الآن تسجيل الدخول!');
        
    }


    public function FindPhone()
    {
        $find=User::where('username',$this->phone)->first();
        if($find){
            $codes=rand(100000000,999999999);
            $p= substr($this->phone, 1, 10);
            $nexmo=app('Nexmo\Client');
            $nexmo->message()->send([
              'to'=>'00962'.$p,
              'from'=>"HOT SNACK ",
              'text'=>' (New CODE ) =  ('.$codes.')' ,
          ]);




          
            User::where('username',$this->phone)->update(['code' => $codes,]);
            $this->show=1;
            session()->flash('message_t', 'تم إرسال رمز التحقق إلى الهاتف بنجاح');
            $this->code_random=$codes;
    
   


          }

        else{
            session()->flash('message_f', 'رقم الهاتف غير صحيح او غير متوفر');
            $this->show=0;
        }

    }
    





}
