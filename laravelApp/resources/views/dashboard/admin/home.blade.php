<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="hadi ahmed">
    <meta name="description" content="jobs-site">
    <meta name="keywoard" content="html , css , js,bootstrap,jquery">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>
 <!--start top breadcrumb header-->
 <div class="top-header container d-flex justify-content-between align-items-center">
        <div class="regesteration ">
            <div class="login">
                <i class=""></i>
                <a href="{{route('admin.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل الخروج</a>
                <form action="{{route('admin.logout')}}" method="POST" class="d-none" id="logout-form">@csrf</form>
            </div>
            <div class="seperator">|</div>
        </div>
        <div class="profile">
          <a href="/dashboard" class="ri-user-3-fill"></a>
        </div>
        <!-- <div class="top-links">
            <a href="#">المقالات</a>
            <span class="seperator">|</span>
            <a href="#">المرتبات</a>
            <span class="seperator">|</span>
            <a href="#">الاعضاء</a>
            <span class="seperator">|</span>
            <a href="#">دليل الشركات</a>
            
        </div> -->
        
    </div>
    <!--end top breadcrumb header-->

    <nav class="navbar sticky-top  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">توظيف</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">الرئيسة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/jobs">كل الوظائف</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">خدماتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">اتصل بنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/personalCv">الملف الشخصي</a>
              </li>
            </ul>
            <form class="navbar-btn">
                <button class="btn work-search-btn">تبحث عن عمل ؟</button>
                <button class="company-btn">صاحب شركة ؟</button>
              </form>
          </div>
        </div>
      </nav>
    <!--end header-->
    <!--start slider-->
    <div class="slide-cont">
        <div id="carouselExampleCaptions" class="carousel slide container w-60 container" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/images/slide-6.jpg" class="d-block img-fluid w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>هل تبحث عن فرصة وضيفية ؟</h5>
                  <p>سوف نساعدك في الحصول على فرص وضيفية في المكان المناسب لك </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/images/slide-4.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>فرص وظيفية</h5>
                  <p>تتجاوز حواجز الزمان و المكان</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/images/slide-2.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>هل تبحث عن فرصة وضيفية ؟</h5>
                    <p>سوف نساعدك في الحصول على فرص وضيفية في المكان المناسب لك </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--end slider-->
    <!-- start ads section-->
    <div class="ads container text-center container" >Google adsense Ads</div>
    
    <!--end ads section -->

    <!-- start available jobs-->
    <section class="available-jobs container">
      <div class="row section-header text-center p-4">
          <div class="col-12">
              <h2>الوضائف المتاحة</h2>
              <p>خطوتك الاولى لتصبح كل ما تريد</p>
          </div>

      </div>
      <div class="row jobs-card">
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-success w-100">دوام كامل</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-primary w-100">دوام جزئي</button>
                  </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-success w-100">دوام كامل</button>
                  </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-primary w-100">دوام جزئي</button>
                  </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-success w-100">دوام كامل</button>
                  </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-12" id="tar-job">
            <div class="card mb-3 p-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-2">
                    <img src="../assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">مندوبين مبيعات</h3>
                            <div class="company d-flex">
                                <i class="ri-bank-fill"></i>
                                <h5 class="company-name">اسم الشركة هنا</h5>
                            </div>
                            <div class="company d-flex">
                                    <i class="ri-map-pin-fill"></i>
                                    <span class="company-location"> عدن الشيخ عثمان</span>
                            </div>
                            <div class="company d-flex">
                                <i class="ri-building-3-line"></i>
                                <button class="btn">مبيعات</button>
                                <button class="btn">مناديب</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <button class="btn btn-outline-warning w-100">تدريب</button>
                  </div>
                </div>
            </div>

        </div>
      </div>
    </section>
    
    <!--end available jobs -->
    <!--start our partners-->
    <section class="our-partners pb-5 container">
        <div class="row section-header text-center p-4">
            <div class="col-12">
                <h2>شركائنا</h2>
                <p>خطوتك الاولى لتصبح كل ما تريد</p>
            </div>
        </div>
        <div class="row d-flex justify-content-around text-center ">
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card1.png">

            </div>
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card2.png">

            </div>
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card4.png">

            </div>
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card1.png">

            </div>
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card2.png">

            </div>
            <div class="col-6 col-lg-2 partners-image">
                <img src="../assets/images/card3.png">

            </div>
        </div>

    </section>
    <!--end our partners-->
<!--start footer-->
<section class="footer pt-5 pb-5">
      <div class="row container justify-content-between">
        <div class="col-lg-4 mb-2">
          <div class="brand">
            <h2> توظيف</h2>
          </div>
          <p> توظيف موقع متخصص في تجميع وحصر الوظائف المتوفرة و ملفات الموضفين والباحثين عن عمل </p>

        </div>
        <div class="col-lg-4 mb-2">
          <div class="row">
            <h2>روابط مهمة</h2>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">من نحن</a>

            </div>
            <div class="col-6">
              <a class="link">حسابي</a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link"> كل الوظائف</a>

            </div>
            <div class="col-6">
              <a class="link">دليل الشركات </a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">المقالات </a>

            </div>
            <div class="col-6">
              <a class="link"> الشروط والاحكام</a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">اتصل بنا </a>

            </div>
            <div class="col-6">
              <a class="link">سياسة الخصوصية </a>
              
            </div>
          </div>

          
        </div>
        <div class="col-lg-4 mb-2">
          <div class="row">
            <h2>اشترك في النشرة الأخبارية</h2>
          </div>
          <div class="row">
            <form class="d-flex">
              <input class="form-control me-2" type="email" placeholder="اشترك" aria-label="اشترك">
              <button class="btn btn-outline-success" type="submit">اشترك</button>
            </form>
          </div>
          <div class="row footer-social-media">
            <div class="col-1 facebook">
              <a class="ri-facebook-circle-fill"></a>

            </div>
            <div class="col-1 twitter">
              <a class="ri-twitter-fill "></a>
              
            </div>
            <div class="col-1 linkedin">
              <a class="ri-linkedin-box-fill "></a>
              
            </div>
            <div class="col-1 whatsapp">
              <a class="ri-whatsapp-fill "></a>
              
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!--end footer-->
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script>
      $(document).ready(function () {
        $('#tar-job').on("click",function () {
          console.log(this);
          location.href="jobs_details.html";
          
        });
        
      });
    </script>
</body>
</html>