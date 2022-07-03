
@extends('layouts/app')

@section('content')
    

    
      <!-- Page Header Start -->
      <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>الصفحة الرئيسية</h2>
                </div>
                <div class="col-12">
                    <a href="">يــامرحبــاً</a>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/HCJUXEx1kdg" data-target="#videoModal">
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
                                    تم افتتاح المطعم في عام ٢٠١٩، تميز المطعم بوجبات السناكات المعروفة وهي عبارة عن الزنجر والبرغر والفاهيتا و الاسكالوب وغيرها من السناكات الرهيبــه !  بالإضافة إلى   <a  href="\about">أقراء المزيد..</a>                                </p>
                             
                                    
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
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

 <!-- Team Start -->
 <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <h2>عندما يتعلق الأمر بالطعام، فنحن الخبراء</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <a  href="\menu">  <img src="img/snack1.jpg" alt="Image"></a>
                    </div>
                    <div class="team-text">
                        <h2>سناكات</h2>
                        <a  href="\menu"> اذهب للقائمة!</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <a  href="\menu">    <img src="img/10.jpg" alt="Image"></a>
                    </div>
                    <div class="team-text">
                        <h2>شاورما</h2>
                        <a  href="\menu"> اذهب للقائمة!</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <a  href="\menu">   <img src="img/15.jpg" alt="Image"></a>
                        
                    </div>
                    <div class="team-text">
                        <h2>برغر</h2>
                        <a  href="\menu"> اذهب للقائمة!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <a  href="\menu">   <img src="img/17.jpg" alt="Image"></a>
                    </div>
                    <div class="team-text">
                        <h2>بروستد</h2>
                        <a  href="\menu"> اذهب للقائمة!</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->





    

    @endsection