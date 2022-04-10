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
                <a href="{{route('user.login')}}" >تسجيل الدخول (مستخدم)</a>
            </div>
            <div class="seperator">|</div>
            <div class="login">
                <i class=""></i>
                <a href="{{route('admin.login')}}" >تسجيل الدخول (مدير)</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="{{route('user.register')}}" class="active">حساب جديد</a>
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
    <!--start signIn form-->
    <div class="signIn-nav">
      <ul class="nav nav-pills text-center justify-content-center">
        <li class="nav-item">
          <a class="regester active" id="regAsperson" aria-current="page" href="/signin">التسجيل كعضو</a>
        </li>
        <li class="nav-item">
          <a class="regester" id="regAscompany" href="/company">التسجيل كشركة</a>
        </li>
      </ul>
    </div>
    <section class="login-form container justify-content-center pt-4 pb-4">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>إنشاء حساب جديد</h2>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                <li class="breadcrumb-item " aria-current="page"><a class="active" href="{{route('user.register')}}">إنشاء حساب</a></li>
              </ol>
            </nav>
        </div>
      </div>
      <form class="login-form row container g-3" method="POST" action="{{route('user.create')}}" autocomplete="off" enctype="multipart/form-data">
        @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
      @csrf
        <div class="col-md-12">
          <label for="name" class="form-label">الاسم </label>
          <input placeholder="الاسم الكامل " value="{{ old('name') }}" name="name" type="text" class="form-control" id="inputEmail4">
          <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        </div>
        
        <div class="col-md-12">
          <label for="email" class="form-label"> البريد الالكتروني</label>
          <input placeholder="البريد الالكتروني" value="{{ old('email') }}" name="email" type="email" class="form-control" id="inputEmail4">
          <span class="text-danger">@error('email'){{ $message }} @enderror</span>
        </div>
        <div class="col-md-12">
          <label for="password"  class="form-label">كلمة المرور</label>
          <input placeholder="كلمة المرور " value="{{ old('password') }}" name="password" type="password" class="form-control" id="inputEmail4">
          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
        </div>
        <div class="col-md-12">
          <label for="cpassword"  class="form-label">كلمة المرور</label>
          <input placeholder="تاكيد كلمة المرور " value="{{ old('cpassword') }}" name="cpassword" type="password" class="form-control" id="inputEmail4">
          <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
        </div>
        <!-- <div class="col-md-12">
          <label for="inputPassword4" class="form-label">تاكيد كلمة المرور</label>
          <input placeholder="تاكيد كلمة المرور" name="confirmpassword" type="password" class="form-control" id="inputEmail4">
        </div> -->
        <!-- <div class="col-md-6">
        <label for="inputPassword4" class="form-label">الجنس </label>
          <select name="gender" class="form-select">
            <option value="ذكر">ذكر</option>
            <option value="انثى">انثى</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">الحالة الاجتماعية</label>
          <select class="form-select" name="status">
            <option value="متزوج">متزوج</option>
            <option value="اعزب">اعزب</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">العنوان</label>
          <input placeholder="العنوان " name="address" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">رقم الهاتف</label>
          <input placeholder="رقم الهاتف" name="phone" type="text" class="form-control" id="inputEmail4">
        </div> -->
        
        <div class="col-12">
          <button type="submit" class="btn login-btn">إنشاء حساب جديد</button>
        </div><hr>
      </form>

    </section>
    <!--end login form-->
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