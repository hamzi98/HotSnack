

@extends('layouts/app')

@section('content')
    
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>حول هوت سناك</h2>
                    </div>
                    <div class="col-12">

                        <a href="">حول</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
    
        

        <!-- About Start -->
        <div class="about" style="text-align: right;font-family: 'Lateef';" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <h2>١٩ فبراير ٢٠١٩  بدأت القصة </h2>
                            </div>
                            <div class="about-text">
                                <p style="font-size: 26px">
                                    تم افتتاح المطعم في عام ٢٠١٩، تميز المطعم بوجبات السناكات المعروفة وهي عبارة عن الزنجر والبرجر والفاهيتا و الاسكالوب وغيرها من السناكات الرهيبــه !  بالإضافة إلى الشاورما والتي تم إدخالها فيما بعد،  كما أن تلك الوجبات لاقت إعجاب الكثيرين وذلك بسبب استخدام مجموعة من التوابل الخاصة كما يقدم هذا المطعم أصناف ذات جودة مرتفعة.                                </p>
                             
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->

        
        @endsection