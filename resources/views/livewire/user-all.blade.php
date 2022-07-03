<div>
<head>
<link rel="stylesheet" href="css/login.css">
</head>

<div class="container">
    @if ($ChangePassword)
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key">
        <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 " style="color:azure">  
        </div>
        <div class="col-lg-12 login-form">
        <div class="col-lg-12 login-form">
            <form  wire:submit.prevent="pass" >
                @csrf            
            <p style="color: white;text-align:center" >كلمة المرور الجديدة</p>
            <input class="form-control" type="text" wire:model="PassUser">
            @error('PassUser') <span class="error" style="color: azure">{{ $message }}</span> @enderror
            <div class="col text-center">
            <button  type="submit" class="btn btn-primary">إرسال</button>
        </div>
        </form>
        </div>
        </div>
        <div  class="col-lg-3 col-md-2"></div>
        </div>
        </div>

@elseif($show==1)

<div class="row">
    <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
    <div class="col-lg-12 login-key">
    <i class="fa fa-key" aria-hidden="true"></i>
    </div>
    <div class="col-lg-12 " style="color:azure"> 
@if (session()->has('message_t'))
<div class="alert alert-success">{{ session('message_t') }}</div>
@endif

    </div>
    <div class="col-lg-12 login-form">
    <div class="col-lg-12 login-form">
        <form  wire:submit.prevent="CodeIsTrue"  >
            @csrf            
        <p style="color: white;text-align:center" >أدخل رمز التحقق</p>
        <input class="form-control" type="text" wire:model="code">
        <button  type="submit" class="btn btn-primary">إرسال</button>

    </form>
    
    </div>
    </div>
    <div  class="col-lg-3 col-md-2"></div>
    </div>
    </div>




@else
<div class="row">
<div class="col-lg-3 col-md-2"></div>
<div class="col-lg-6 col-md-8 login-box">
<div class="col-lg-12 login-key">
<i class="fa fa-key" aria-hidden="true"></i>
</div>
<div class="col-lg-12 " style="color:azure">   أدخل رقم الهاتف الخاص بالحساب لإرسال كلمة المرور الجديدة
</div>

<div class="col-lg-12 login-form">
<div class="col-lg-12 login-form">

<form  wire:submit.prevent="FindPhone" method="get" action="" >
@csrf
<div class="form-group">
<input id="code" type="text" wire:model="phone" class="form-control" name="phone"  >
@if (session()->has('message_f'))
<div class="alert alert-danger">{{ session('message_f') }}</div>
@endif
</div>
<div class="col-lg-12 loginbttm">
<div class="col-lg-6 login-btm login-text">
</div>
<div class="col-lg-6 login-btm login-button">
<button  type="submit" class="btn btn-primary">إرسال</button>
</div>
</div>
</form>

</div>
</div>
<div  class="col-lg-3 col-md-2"></div>
</div>
</div>





    @endif
</div>
</div>
