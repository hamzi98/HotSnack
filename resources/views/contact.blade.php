
@extends('layouts/app')

@section('content')
        <style>
            input{
                margin-bottom: 25px;
            }
        </style>
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>اتصل بنا</h2>
                    </div>
                    <div class="col-12">
                        <a href="">تواصل</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact" style="text-align: right">
            <div class="container">
                <div class="section-header text-center">

                    <h2>اتصل للحصول على أي استفسار</h2>
                </div>
                <div class="row align-items-center contact-information">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>العنوان</h3>
                                <p style="font-size: 15px">اسكان الامير طلال مثلث راية</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>اتصل بنا</h3>
                                <p>0788594010</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>البريد الإلكتروني</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>تابعنا</h3>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d298.96876976002545!2d36.05965591632254!3d32.030130515002206!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x151b656fc6152323%3A0x3f264c0cd5f30046!2z2YXYt9i52YUg2YfZiNiqINiz2YbYp9mDINmE2YTZiNis2KjYp9iqINin2YTYs9ix2YrYudip2IwgMjNKNSszVzQsIFJ1c3NlaWZh!3m2!1d32.0301337!2d36.0598342!5e0!3m2!1sen!2sjo!4v1652103476212!5m2!1sen!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                    <div class="col-md-6">
                        <div id="success">
                            <h3>ارسل رسالة</h3>
                        </div>
                        <form  id="contactForm" method="POST">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" placeholder="الاسم" >
                                <span class="text-danger error-text name_err"></span>
                            </div>
                            <div class="control-group">
                                <input type="tel" class="form-control" name="phone" placeholder="رقم الهاتف"  >
                                <span class="text-danger error-text phone_err"></span>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="message" placeholder="الرسالة"  ></textarea>
                                <span class="text-danger error-text message_err"></span>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" >ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
   $('#contactForm').submit(function(e) {
       e.preventDefault();

       let formData = new FormData(this);
        $('.name_err').text('');
        $('.phone_err').text('');
        $('.message_err').text('');

       $.ajax({
          type:'POST',
          url: '/contact',
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

        }
        else{
        $.each( msg.error, function( key, value ) {
        $('.'+key+'_err').text(value);
        });
        }
        }
      

        </script>
                                                   
        @endsection