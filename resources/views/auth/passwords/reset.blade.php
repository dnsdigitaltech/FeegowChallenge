@extends('layouts.admin-lte.auth.app')
@section('content')
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <a href="{{ asset('./inscrito') }}" title="Voltar"><i class="fas fa-chevron-circle-left"></i></a>
        <p class="login-box-msg">REDEFINIR SENHA</p>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Senha" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">REDEFINIR SENHA <i class="fas fa-unlock-alt"></i></button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
<!-- /.login-box -->
@endsection