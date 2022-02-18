@extends('layouts.admin-lte.auth.app')
@section('content')
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">ACESSAR O SISTEMA</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-7">
                <div class="icheck-primary">
                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        LEMBRAR-ME
                    </label>
                </div>
                </div>
                <!-- /.col -->
                <div class="col-5">
                <button type="submit" class="btn btn-primary btn-block btn-flat">ENTRAR <i class="fas fa-unlock-alt"></i></button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center mb-3">
                <a href="{{ asset('password/reset') }}"><i class="fas fa-angle-double-left"></i> PRIMEIRO ACESSO / ESQUECI A SENHA <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
    <!-- /.login-card-body -->
<div class="copy-login">
    <center> {{ config('app.name') }} &copy; @php echo date('Y') @endphp</span> - todos direitos reservados. </center>
  </div>
</div>
<!-- /.login-box -->
@endsection
