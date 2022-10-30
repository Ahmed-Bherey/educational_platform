<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookGalary</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('public/web/title.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/web/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/web/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/web/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/web/css/login.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                @include('admin.layouts.alerts.success')
                @include('admin.layouts.alerts.error')
                <form action="{{ route('user.register') }}" method="post" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="الاسم"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="email" name="email">
                        <span class="focus-input100" data-placeholder="البريد الالكترونى"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="address">
                        <span class="focus-input100" data-placeholder="العنوان"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-placeholder="كلمة المرور"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="tel">
                        <span class="focus-input100" data-placeholder="رقم التليفون"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            لديك حساب بالفعل؟
                        </span>

                        <a class="txt2" href="{{route('user.login.form')}}">
                            تسجيل الدخول
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
