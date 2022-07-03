@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(Auth::user()->done!=1)
<head>
    <link rel="stylesheet" href="css/login.css">
   
</head>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 " style="color:azure"> لقد ارسلنا لك كود التحقق  عبر رسالة نصية يرجى كتابته هنا
               
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="POST" action="" id="CodePhone">
                        @csrf
                            <div class="form-group">
                            <input id="code" type="code" class="form-control" name="code"  >
                            <span class="text-danger error-text code_err"></span>
                                    
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تحقق') }}
                                    </button>
                            </div>
                            
                        </div>
                    </form>
                    <button style="margin-top: 50px" class="btn btn-warning"  onclick="window.location.href='/ResendCode'">اعادة ارسال الكود!</button>    

                </div>
            </div>
            <div  class="col-lg-3 col-md-2"></div>
        </div>
    </div>
</div>
@else

<div class="menu">
<div class="container">
  
<div class="section-header text-center">
<h2>قائمة طويلة لا تقاوم </h2>
</div>




<div class="menu-tab" id="myTab">
<ul class="nav nav-pills justify-content-center">
<li class="nav-item">
<a class="nav-link active"  data-toggle="pill" href="#burgers">سناكات</a>
</li>
<li class="nav-item">
<a class="nav-link"   data-toggle="pill" href="#snacks">شاورما</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="#snacks2">برغر</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="pill" href="#beverages">بروستد</a>
</li>
<li class="nav-item">
<a class="nav-link " data-toggle="pill" href="#snacks3">المقبلات</a>



</li>
<li class="nav-item ">
    <a class="nav-link  " data-toggle="pill" href="#order"  style="position: fixed;top: 140px; left: 160px;   z-index: 10; background-color: #719a0a   ">طلبك هنا  <i style="color: #000000" class="fal fa-shopping-cart"> {{$SumProduct}}</i></a>
    
    </li>
</ul>
<div class="tab-content">
<div id="burgers" class="container tab-pane fade show active ">
<div class="row">
<div class="col-lg-7 col-md-12">
<h1> ساندويش</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
   
<h3><span>ساندويش زنجر صغير</span> <strong>0.75</strong></h3>
 <button   class="btn btn-success" wire:click="s1_Ad">+</button>
<span style="padding: 5px">{{$s1}}</span><button class="btn btn-success" wire:click="s1_De">-</button>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش زنجر فرنسي</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s2_Ad">+</button>
<span style="padding: 5px">{{$s2}}</span><button class="btn btn-success" wire:click="s2_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش زنجر صاج صغير</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s3_Ad">+</button>
<span style="padding: 5px">{{$s3}}</span><button class="btn btn-success" wire:click="s3_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش زنجر صاج كبير</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s4_Ad">+</button>
<span style="padding: 5px">{{$s4}}</span><button class="btn btn-success" wire:click="s4_De">-</button>

</div>
</div>

<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش تندر صغير</span> <strong>0.75</strong></h3>
<button   class="btn btn-success" wire:click="s5_Ad">+</button>
<span style="padding: 5px">{{$s5}}</span><button class="btn btn-success" wire:click="s5_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش تندر فرنسي</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s6_Ad">+</button>
<span style="padding: 5px">{{$s6}}</span><button class="btn btn-success" wire:click="s6_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش تندر صاج صغير</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s7_Ad">+</button>
<span style="padding: 5px">{{$s7}}</span><button class="btn btn-success" wire:click="s7_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش تندر صاج  كبير</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s8_Ad">+</button>
<span style="padding: 5px">{{$s8}}</span><button class="btn btn-success" wire:click="s8_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش فاهيتا صغير</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s9_Ad">+</button>
<span style="padding: 5px">{{$s9}}</span><button class="btn btn-success" wire:click="s9_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش فاهيتا فرنسي كبير</span> <strong>1.75</strong></h3><button   class="btn btn-success" wire:click="s10_Ad">+</button>
<span style="padding: 5px">{{$s10}}</span><button class="btn btn-success" wire:click="s10_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش فاهيتا صاج صغير</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s11_Ad">+</button>
<span style="padding: 5px">{{$s11}}</span><button class="btn btn-success" wire:click="s11_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش فاهيتا صاج كبير</span> <strong>1.75</strong></h3>
<button   class="btn btn-success" wire:click="s12_Ad">+</button>
<span style="padding: 5px">{{$s12}}</span><button class="btn btn-success" wire:click="s12_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش كوردن بلو فرنسي </span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s13_Ad">+</button>
<span style="padding: 5px">{{$s13}}</span><button class="btn btn-success" wire:click="s13_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش كوردن بلو صاج</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s14_Ad">+</button>
<span style="padding: 5px">{{$s14}}</span><button class="btn btn-success" wire:click="s14_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش هوت دوغ صغير</span> <strong>0.35</strong></h3>
<button   class="btn btn-success" wire:click="s15_Ad">+</button>
<span style="padding: 5px">{{$s15}}</span><button class="btn btn-success" wire:click="s15_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s1.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش هوت دوغ فرنسي</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s16_Ad">+</button>
<span style="padding: 5px">{{$s16}}</span><button class="btn btn-success" wire:click="s16_De">-</button>

</div>
</div>
<h1> وجبات</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/s2.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة زنجر صاج او فرنسي</span> <strong>2.00</strong></h3>
<button   class="btn btn-success" wire:click="s17_Ad">+</button>
<span style="padding: 5px">{{$s17}}</span><button class="btn btn-success" wire:click="s17_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s2.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة تندر صاج او فرنسي</span> <strong>2.00</strong></h3>
<button   class="btn btn-success" wire:click="s18_Ad">+</button>
<span style="padding: 5px">{{$s18}}</span><button class="btn btn-success" wire:click="s18_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s2.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة فاهيتا صاج او فرنسي</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s19_Ad">+</button>
<span style="padding: 5px">{{$s19}}</span><button class="btn btn-success" wire:click="s19_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s2.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة كوردن بلو صاج او فرنسي</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s20_Ad">+</button>
<span style="padding: 5px">{{$s20}}</span><button class="btn btn-success" wire:click="s20_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s2.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة هوت دوغ فرنسي</span> <strong>1.75</strong></h3>
<button   class="btn btn-success" wire:click="s21_Ad">+</button>
<span style="padding: 5px">{{$s21}}</span><button class="btn btn-success" wire:click="s21_De">-</button>

</div>
</div>
</div>
<div class="col-lg-5 d-none d-lg-block">
<img src="img/snack1.jpg" alt="Image">
</div>
</div>
</div>
<div id="snacks" class="container tab-pane fade ">
<div class="row">
<div class="col-lg-7 col-md-12">
<h1>وجبات شاورما</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/s3.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما عادي</span> <strong>1.75</strong></h3>
<button   class="btn btn-success" wire:click="s22_Ad">+</button>
<span style="padding: 5px">{{$s22}}</span><button class="btn btn-success" wire:click="s22_De">-</button>


</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s3.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما سوبر</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s23_Ad">+</button>
<span style="padding: 5px">{{$s23}}</span><button class="btn btn-success" wire:click="s23_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s3.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما دبل</span> <strong>3.00</strong></h3>
<button   class="btn btn-success" wire:click="s24_Ad">+</button>
<span style="padding: 5px">{{$s24}}</span><button class="btn btn-success" wire:click="s24_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/s3.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما تربل</span> <strong>4.00</strong></h3>
<button   class="btn btn-success" wire:click="s25_Ad">+</button>
<span style="padding: 5px">{{$s25}}</span><button class="btn btn-success" wire:click="s25_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/4.png" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما إيطالي</span> <strong>3.50</strong></h3>
<button   class="btn btn-success" wire:click="s26_Ad">+</button>
<span style="padding: 5px">{{$s26}}</span><button class="btn btn-success" wire:click="s26_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/5.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما حلبي</span> <strong>3.50</strong></h3>
<button   class="btn btn-success" wire:click="s27_Ad">+</button>
<span style="padding: 5px">{{$s27}}</span><button class="btn btn-success" wire:click="s27_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/6.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما برايز عادي</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s28_Ad">+</button>
<span style="padding: 5px">{{$s28}}</span><button class="btn btn-success" wire:click="s28_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/6.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة شاورما برايز سوبر</span> <strong>3.50</strong></h3>
<button   class="btn btn-success" wire:click="s29_Ad">+</button>
<span style="padding: 5px">{{$s29}}</span><button class="btn btn-success" wire:click="s29_De">-</button>

</div>
</div>
<h1>ساندويش شاورما</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/7.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش شاورما صغير</span> <strong>0.60</strong></h3>
<button   class="btn btn-success" wire:click="s30_Ad">+</button>
<span style="padding: 5px">{{$s30}}</span><button class="btn btn-success" wire:click="s30_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/7.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش شاورما كبير</span> <strong>1.10</strong></h3>
<button   class="btn btn-success" wire:click="s31_Ad">+</button>
<span style="padding: 5px">{{$s31}}</span><button class="btn btn-success" wire:click="s31_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/8.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>ساندويش شاورما فرنسي</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s32_Ad">+</button>
<span style="padding: 5px">{{$s32}}</span><button class="btn btn-success" wire:click="s32_De">-</button>

</div>
</div>
<h1>وجبات عائلية</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/9.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>الوجبة الشبابية</span> <strong>7.00</strong></h3>
<button   class="btn btn-success" wire:click="s33_Ad">+</button>
<span style="padding: 5px">{{$s33}}</span><button class="btn btn-success" wire:click="s33_De">-</button>
<p> ساندويش كبير5 + مقبلات + بطاطا</p> 

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/9.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>الوجبة الإقتصادية</span> <strong>9.00</strong></h3>
<button   class="btn btn-success" wire:click="s34_Ad">+</button>
<span style="padding: 5px">{{$s34}}</span><button class="btn btn-success" wire:click="s34_De">-</button>

<p> ساندويش كبير7 + مقبلات + بطاطا</p> 

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/9.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>الوجبة العائلية العملاقة</span> <strong>12.00</strong></h3>
<button   class="btn btn-success" wire:click="s35_Ad">+</button>
<span style="padding: 5px">{{$s35}}</span><button class="btn btn-success" wire:click="s35_De">-</button>

<p> ساندويش كبير9 + مقبلات + بطاطا</p> 

</div>
</div>
</div>
<div class="col-lg-5 d-none d-lg-block">
<img src="img/10.jpg" alt="Image">
</div>
</div>
</div>

<div id="snacks2" class="container tab-pane fade">
<div class="row">
<div class="col-lg-7 col-md-12">
<h1>ساندويش برغر</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/12.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>برغر اطفال</span> <strong>0.50</strong></h3>
<button   class="btn btn-success" wire:click="s36_Ad">+</button>
<span style="padding: 5px">{{$s36}}</span><button class="btn btn-success" wire:click="s36_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/12.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>برغر 100غرام</span> <strong>1.50</strong></h3>
<button   class="btn btn-success" wire:click="s37_Ad">+</button>
<span style="padding: 5px">{{$s37}}</span><button class="btn btn-success" wire:click="s37_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/12.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>برغر 200غرام</span> <strong>2.00</strong></h3>
<button   class="btn btn-success" wire:click="s38_Ad">+</button>
<span style="padding: 5px">{{$s38}}</span><button class="btn btn-success" wire:click="s38_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/12.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>سكالوب دجاج</span> <strong>0.75</strong></h3>
<button   class="btn btn-success" wire:click="s39_Ad">+</button>
<span style="padding: 5px">{{$s39}}</span><button class="btn btn-success" wire:click="s39_De">-</button>

</div>
</div>
<h1>وجبات برغر</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/14.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة برغر اطفال</span> <strong>2.00</strong></h3>
<button   class="btn btn-success" wire:click="s40_Ad">+</button>
<span style="padding: 5px">{{$s40}}</span><button class="btn btn-success" wire:click="s40_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/14.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة برغر 100غرام</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s41_Ad">+</button>
<span style="padding: 5px">{{$s41}}</span><button class="btn btn-success" wire:click="s41_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/14.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة برغر 200غرام</span> <strong>3.00</strong></h3>
<button   class="btn btn-success" wire:click="s42_Ad">+</button>
<span style="padding: 5px">{{$s42}}</span><button class="btn btn-success" wire:click="s42_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/14.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة سكالوب دجاج</span> <strong>2.50</strong></h3>
<button   class="btn btn-success" wire:click="s43_Ad">+</button>
<span style="padding: 5px">{{$s43}}</span><button class="btn btn-success" wire:click="s43_De">-</button>

</div>
</div>
</div>
<div class="col-lg-5 d-none d-lg-block">
<img src="img/15.jpg" alt="Image">
</div>
</div>
</div>

<div id="beverages" class="container tab-pane fade ">
<div class="row">
<div class="col-lg-7 col-md-12">
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 4 قطع حار او بارد</span> <strong>3.00</strong></h3>
<button   class="btn btn-success" wire:click="s44_Ad">+</button>
<span style="padding: 5px">{{$s44}}</span><button class="btn btn-success" wire:click="s44_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز</p>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 8 قطع حار او بارد</span> <strong>6.00</strong></h3>
<button   class="btn btn-success" wire:click="s45_Ad">+</button>
<span style="padding: 5px">{{$s45}}</span><button class="btn btn-success" wire:click="s45_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز</p>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 12 قطع حار او بارد</span> <strong>9.00</strong></h3>
<button   class="btn btn-success" wire:click="s46_Ad">+</button>
<span style="padding: 5px">{{$s46}}</span><button class="btn btn-success" wire:click="s46_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز + لتر كولا</p>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 16 قطع حار او بارد</span> <strong>12.00</strong></h3>
<button   class="btn btn-success" wire:click="s47_Ad">+</button>
<span style="padding: 5px">{{$s47}}</span><button class="btn btn-success" wire:click="s47_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز + لتر كولا</p>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 20 قطع حار او بارد</span> <strong>15.00</strong></h3>
<button   class="btn btn-success" wire:click="s48_Ad">+</button>
<span style="padding: 5px">{{$s48}}</span><button class="btn btn-success" wire:click="s48_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز + لتر كولا</p>
</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/16.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>وجبة 24 قطع حار او بارد</span> <strong>17.00</strong></h3>
<button   class="btn btn-success" wire:click="s49_Ad">+</button>
<span style="padding: 5px">{{$s49}}</span><button class="btn btn-success" wire:click="s49_De">-</button>

<p>بطاطا + ثومة + مخلل + كاتشب + خبز + لتر كولا</p>
</div>
</div>
</div>
<div class="col-lg-5 d-none d-lg-block">
<img src="img/17.jpg" alt="Image">
</div>
</div>
</div>

<div id="snacks3" class="container tab-pane fade ">
<div class="row">
<div class="col-lg-7 col-md-12">
<div class="menu-item">
<div class="menu-img">
<img src="img/19.png" alt="Image">
</div>
<div class="menu-text">
<h3><span>مثومة صغير</span> <strong>0.25</strong></h3>
<button   class="btn btn-success" wire:click="s50_Ad">+</button>
<span style="padding: 5px">{{$s50}}</span><button class="btn btn-success" wire:click="s50_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/19.png" alt="Image">
</div>
<div class="menu-text">
<h3><span>مثومة كبير</span> <strong>0.50</strong></h3>
<button   class="btn btn-success" wire:click="s51_Ad">+</button>
<span style="padding: 5px">{{$s51}}</span><button class="btn btn-success" wire:click="s51_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/20.jpeg" alt="Image">
</div>
<div class="menu-text">
<h3><span>مخلل صغير</span> <strong>0.25</strong></h3>
<button   class="btn btn-success" wire:click="s52_Ad">+</button>
<span style="padding: 5px">{{$s52}}</span><button class="btn btn-success" wire:click="s52_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/20.jpeg" alt="Image">
</div>
<div class="menu-text">
<h3><span>مخلل كبير</span> <strong>0.50</strong></h3>
<button   class="btn btn-success" wire:click="s53_Ad">+</button>
<span style="padding: 5px">{{$s53}}</span><button class="btn btn-success" wire:click="s53_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/21.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>بطاطا صفير</span> <strong>0.50</strong></h3>
<button   class="btn btn-success" wire:click="s54_Ad">+</button>
<span style="padding: 5px">{{$s54}}</span><button class="btn btn-success" wire:click="s54_De">-</button>

</div>
</div>

<div class="menu-item">
<div class="menu-img">
<img src="img/21.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>بطاطا كبير</span> <strong>1.00</strong></h3>
<button   class="btn btn-success" wire:click="s55_Ad">+</button>
<span style="padding: 5px">{{$s55}}</span><button class="btn btn-success" wire:click="s55_De">-</button>

</div>
</div>
<h1>مشروبات</h1>
<div class="menu-item">
<div class="menu-img">
<img src="img/22.png" alt="Image">
</div>
<div class="menu-text">
<h3><span>كولا 330مل</span> <strong>0.30</strong></h3>
<button   class="btn btn-success" wire:click="s56_Ad">+</button>
<span style="padding: 5px">{{$s56}}</span><button class="btn btn-success" wire:click="s56_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/23.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>كولا لتر </span> <strong>0.60</strong></h3>
<button   class="btn btn-success" wire:click="s57_Ad">+</button>
<span style="padding: 5px">{{$s57}}</span><button class="btn btn-success" wire:click="s57_De">-</button>

</div>
</div>
<div class="menu-item">
<div class="menu-img">
<img src="img/24.jpg" alt="Image">
</div>
<div class="menu-text">
<h3><span>مياه معدنيه</span> <strong>0.35</strong></h3>
<button   class="btn btn-success" wire:click="s58_Ad">+</button>
<span style="padding: 5px">{{$s58}}</span><button class="btn btn-success" wire:click="s58_De">-</button>

</div>
</div>

</div>
<div class="col-lg-5 d-none d-lg-block">
<img src="img/18.jpg" alt="Image">
</div>
</div>
</div>


<div id="order" class="container tab-pane fade ">
    
    <div class="container">
        @if ($order->isEmpty())
        <h4 class="alert alert-danger" style="text-align: center">لايوجد طلبات ! قم بالاضافة الان!</h4>

       @else
        <h1 style="text-align: center">طلبك</h1><hr>

        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>الصنف</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th>السعر الاجمالي</th>
                </tr>

                @foreach($order as $item)
                <tr>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->product->salary}}</td>
                    <td> {{$item->count}} </td>
                    <td>{{$item->count * $item->product->salary }}</td> 
                </tr>
                @endforeach        
                <tr>
                    <td>    <button class="btn btn-danger" wire:click="delet">حذف طلبك</button></td>
                    <td ><button class="pull-right btn btn-success" onclick="myFunction()"> متابعة</button></td>
                    <td > المبلغ المطلوب <span style="color: red">(غير شامل التوصيل)</span></td>
                    <td>{{$total }}</td> 
    
                </tr>
            </tbody>
        </table>          
           @endif
    </div>
    </div>
    


</div>
</div>
</div>
</div>

@endif



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
   $('#CodePhone').submit(function(e) {
       e.preventDefault();

       let formData = new FormData(this);
        $('.code').text('');
       $.ajax({
          type:'POST',
          url: '/CheckCode',
           data: formData,
           contentType: false,
           processData: false,
           success: function(data) {
        printMsg(data);
        }
        });
        }); 
        function printMsg (msg) {
        if($.isEmptyObject(msg.error)){
            alert("تــم التحقق من رقم الهاتف ");
            window.location.href = "/menus";
        }
        else{
        $.each( msg.error, function( key, value ) {
        $('.'+key+'_err').text(value);
        });
        }
        }
      
        function myFunction() {

            window.location.href = "/confirm";
          
        } 
        



</script>
