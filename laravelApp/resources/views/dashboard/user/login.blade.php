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
    <!--start header-->
    <!--start top breadcrumb header-->
    <div class="top-header container">
        <div class="regesteration">
            <div class="login">
                <i class=""></i>
                <a href="{{route('user.login')}}" class="active">تسجيل الدخول (مستخدم)</a>
            </div>
            <div class="login">
                <i class=""></i>
                <a href="{{route('admin.login')}}">تسجيل الدخول (مدير)</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="{{route('user.register')}}">حساب جديد</a>
            </div>
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
    <!--start login form-->
    <section class="login-form container justify-content-center pt-4 pb-4">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>تسجيل الدخول</h2>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                <li class="breadcrumb-item " aria-current="page"><a class="active" href="{{route('user.login')}}">تسجيل الدخول</a></li>
              </ol>
            </nav>
        </div>
      </div>
      <form class="login-form row container g-3" action="{{route('user.check')}}" method="POST">
            @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif
          @csrf
        <div class="col-md-6">
          <label for="email" class="form-label">الاسم او البريد الالكتروني</label>
          <input placeholder="الاسم او البريد الالكتروني" name="email" type="email" class="form-control" id="inputEmail4" value="{{ old('email') }}">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">كلمة المرور</label>
          <input placeholder="كلمة المرور" type="password" name="password" class="form-control" id="inputPassword4" value="{{ old('password') }}">
          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        </div>
        
        <div class="col-12 d-flex justify-content-between">
          <div class="form-check">
            <input class="" type="checkbox" id="gridCheck">
            <label class="" for="gridCheck">
              ابقني متصلا
            </label>
          </div>
          <a class="active" href="#">نسيت كلمة المرور؟</a>
        </div>
        <div class="col-12">
          <button type="submit" class="btn login-btn">تسجيل الدخول</button>
        </div><hr>
        <div class="col-12">
          <h5>او عبر حسابات التواصل الاجتماعي</h5>
          <div class="social-media-links mt-3 mb-3">
            <div class="facebookbt">
              <button type="submit" class="btn text-light">فيسبوك</button>
              <i class="ri-facebook-box-fill"></i>
            </div>
            <div class="twitterbt">
              <button type="submit" class="btn text-light">تويتر</button>
              <i class="ri-twitter-fill"></i>
            </div>
            <div class="googlebt">
              <button type="submit" class="btn text-light">جوجل</button>
              <i class="ri-google-fill"></i>
            </div>
            
            
          </div>
        </div>
      </form>

    </section>
    <!--end login form-->
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