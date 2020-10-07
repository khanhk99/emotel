<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhâp</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/animate/animate.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/select2/select2.min.css') }}"
    />
    <!--===============================================================================================-->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login_register.css') }}" />
    <!--===============================================================================================-->
</head>
  <body style="background-color: #666666">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <form class="login100-form validate-form">
            <span class="login100-form-title p-b-43"> Đăng ký </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Email không hợp lệ: ex@abc.xyz"
            >
              <input class="input100" type="text" name="email" />
              <span class="focus-input100"></span>
              <span class="label-input100">Email</span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Không được bỏ trống"
            >
              <input class="input100" type="text" name="text" />
              <span class="focus-input100"></span>
              <span class="label-input100">Tên tài khoản</span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Không được bỏ trống"
            >
              <input class="input100" type="password" name="pass" />
              <span class="focus-input100"></span>
              <span class="label-input100">Mật khẩu</span>
            </div>

            <div class="flex-sb-m w-full p-t-3 p-b-32">
              <div class="contact100-form-checkbox">
                <input
                  class="input-checkbox100"
                  id="ckb1"
                  type="checkbox"
                  name="remember-me"
                />
                <label class="label-checkbox100" for="ckb1">
                  Nhớ mật khẩu
                </label>
              </div>

              <div>
                <a href="#" class="txt1"> Quên mật khẩu? </a>
              </div>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">Đăng ký</button>
            </div>

            <div class="text-center p-t-46 p-b-20">
              <span class="txt2"> hoặc Đăng ký bằng </span>
            </div>

            <div class="login100-form-social flex-c-m">
              <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                <i class="fa fa-facebook-f" aria-hidden="true"></i>
              </a>

              <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </div>
          </form>

          <div
            class="login100-more"
            style="background-image: url({{ asset('assets/resource/images/bg-01.jpg') }})"
          ></div>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/js/login_res.js') }}"></script>
  </body>
</html>
