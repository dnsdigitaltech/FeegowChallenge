
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }} | Logar no sistema</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('theme/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('theme/admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="{{ asset('theme/admin/dist/img/favicon.ico')}}" type="image/x-icon"/>
</head>
<style>
  .navbar-primary {
    background-color: #0066c8;
  }
  
  .social-auth-links {
    font-size: 0.7em;
  }
  .brand-link {
        display: block;
        font-size: 1em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
  .btn-primary {
    color: #fff;
    background-color: #357ca5;
    border-color: #357ca5;
    box-shadow: none;
    font-size: 0.7em;
  }

  [class*=icheck-]>label {
    padding-left: 29px!important;
    min-height: 22px;
    line-height: 22px;
    display: inline-block;
    position: relative;
    vertical-align: top;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    font-size: 0.8em;
  }

  .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de!important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 140px;
    }

    .copy-login{
      font-size: 0.65em; color: #0061c7
    }

  /* All Mobile Sizes (devices and browser) */
  @media only screen and (max-width: 767px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 140px;
    }
  }

  /* All Mobile Sizes (devices and browser) */
  @media only screen and (max-width: 720px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -140px;
    }
  }

  /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
  @media only screen and (min-width: 480px) and (max-width: 767px) {
      .login-page, .register-page {
        background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
        background-color: #57a2de !important;
        background-repeat: no-repeat;
        background-size:100%;
        bottom: 0;
        left: 0;
        overflow: auto;
        padding: 3em;
        position: absolute;
        right: 0;
        text-align: center;
        top: 150px;
      }
      
  }


  /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
  @media only screen and (min-width: 480px){
      .login-page, .register-page {
        background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
        background-color: #57a2de !important;
        background-repeat: no-repeat;
        background-size:100%;
        bottom: 0;
        left: 0;
        overflow: auto;
        padding: 3em;
        position: absolute;
        right: 0;
        text-align: center;
        top: 150px;
      }
      
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 1024px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -280px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 912px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -280px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 820px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -230px;
    }
  }

   /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 800px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -280px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 768px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -140px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 720px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -280px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 712px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -220px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 640px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 140px;
    }
  }

   /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 600px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -150px;
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 540px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -50px;
    }
  }

 /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 479px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -20px;
    }
  }
  
  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 414px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -40px;
    }
    .copy-login{
      font-size: 0.5em; color: #0061c7
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 412px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 0px;
    }
    .copy-login{
      font-size: 0.5em; color: #0061c7
    }
  }

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
  @media only screen and (max-width: 393px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -80px;
    }

    .navbar-primary {
      background-color: #0066c8;
    }
  
    .social-auth-links {
      font-size: 0.5em;
    }
    .brand-link {
        display: block;
        font-size: 0.9em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
    .btn-primary {
      color: #fff;
      background-color: #357ca5;
      border-color: #357ca5;
      box-shadow: none;
      font-size: 0.5em;
    }
    .icheck-primary{
      font-size: 0.8em;
    }

    [class*=icheck-]>label {
      padding-left: 29px!important;
      min-height: 22px;
      line-height: 22px;
      display: inline-block;
      position: relative;
      vertical-align: top;
      margin-bottom: 0;
      font-weight: 400;
      cursor: pointer;
      font-size: 0.8em;
    }
    .copy-login{
      font-size: 0.43em; color: #0061c7
    }
}

/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 384px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 0px;
    }

    .navbar-primary {
      background-color: #0066c8;
    }
  
    .social-auth-links {
      font-size: 0.5em;
    }
    .brand-link {
        display: block;
        font-size: 0.9em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
    .btn-primary {
      color: #fff;
      background-color: #357ca5;
      border-color: #357ca5;
      box-shadow: none;
      font-size: 0.5em;
    }
    .icheck-primary{
      font-size: 0.8em;
    }

    [class*=icheck-]>label {
      padding-left: 29px!important;
      min-height: 22px;
      line-height: 22px;
      display: inline-block;
      position: relative;
      vertical-align: top;
      margin-bottom: 0;
      font-weight: 400;
      cursor: pointer;
      font-size: 0.8em;
    }
    .copy-login{
      font-size: 0.43em; color: #0061c7
    }
}

  /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
  @media only screen and (max-width: 360px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 0px;
    }

    .navbar-primary {
    background-color: #0066c8;
  }
  
  .social-auth-links {
    font-size: 0.5em;
  }
  .brand-link {
        display: block;
        font-size: 0.9em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
  .btn-primary {
    color: #fff;
    background-color: #357ca5;
    border-color: #357ca5;
    box-shadow: none;
    font-size: 0.5em;
  }
  .icheck-primary{
    font-size: 0.8em;
  }

  [class*=icheck-]>label {
    padding-left: 29px!important;
    min-height: 22px;
    line-height: 22px;
    display: inline-block;
    position: relative;
    vertical-align: top;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    font-size: 0.8em;
  }
  .copy-login{
    font-size: 0.44em; color: #0061c7
  }
}

/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
@media only screen and (max-width: 353px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: -80px;
    }

    .navbar-primary {
    background-color: #0066c8;
  }
  
  .social-auth-links {
    font-size: 0.5em;
  }
  .brand-link {
        display: block;
        font-size: 0.9em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
  .btn-primary {
    color: #fff;
    background-color: #357ca5;
    border-color: #357ca5;
    box-shadow: none;
    font-size: 0.5em;
  }
  .icheck-primary{
    font-size: 0.8em;
  }

  [class*=icheck-]>label {
    padding-left: 29px!important;
    min-height: 22px;
    line-height: 22px;
    display: inline-block;
    position: relative;
    vertical-align: top;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    font-size: 0.8em;
  }
  .copy-login{
    font-size: 0.4em; color: #0061c7
  }
}

 /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
 @media only screen and (max-width: 320px) {
    .login-page, .register-page {
      background-image: url("{{ asset('theme/admin/dist/img/background-login.png')}}");
      background-color: #57a2de !important;
      background-repeat: no-repeat;
      background-size:100%;
      bottom: 0;
      left: 0;
      overflow: auto;
      padding: 3em;
      position: absolute;
      right: 0;
      text-align: center;
      top: 20px;
    }

    .navbar-primary {
    background-color: #0061c7;
  }
  .login-box-msg{
    font-size: 0.7em;
  }
  .social-auth-links {
    font-size: 0.5em;
  }
  .brand-link {
        display: block;
        font-size: 0.7em;
        line-height: 1.5;
        padding: 0.8em 0.5em;
        transition: width .3s ease-in-out;
        white-space: nowrap;
    }
  .btn-primary {
    color: #fff;
    background-color: #357ca5;
    border-color: #357ca5;
    box-shadow: none;
    font-size: 0.4em;
  }
  .icheck-primary{
    font-size: 0.7em;
  }

  [class*=icheck-]>label {
    padding-left: 29px!important;
    min-height: 22px;
    line-height: 22px;
    display: inline-block;
    position: relative;
    vertical-align: top;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    font-size: 0.8em;
  }
  .copy-login{
    font-size: 0.36em; color: #0061c7
  }
}

</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div title="{{ config('app.name') }}" class="navbar-primary">
      <div class="brand-link brand-area-box text-white">
        <span class="font-weight-bold">{{ config('app.name') }} @php echo date('Y') @endphp</span>
      </div>
  </div> 

  @yield('content')  
<!-- jQuery -->
<script src="{{ asset('theme/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('theme/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('theme/admin/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
