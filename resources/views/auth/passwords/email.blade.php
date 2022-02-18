@extends('layouts.admin-lte.auth.app')
@section('content')
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <a href="{{ asset('./') }}" title="Voltar"><i class="fas fa-chevron-circle-left"></i></a>
        <p class="login-box-msg">COLOQUE SEU EMAIL</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
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
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ENVIAR TOKEN POR EMAIL <i class="fas fa-key"></i></button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
<!-- /.login-box -->
@endsection
