@extends('layouts.auth') <!-- Menggunakan layout utama SB Admin 2 -->

@section('content')
<!-- Begin Page Content -->

<style>
.bg-login-image {
    background: url('/vendor/img/login-bg.png') no-repeat center center;
    background-size: cover;
}
</style>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="form-control form-control-user"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    {{-- <div class="form-group mt-4">
                                        <div class="custom-control custom-checkbox small">
                                            <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                            <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                                        </div>
                                    </div> --}}

                                    <div class="form-group d-flex justify-content-between mt-4">
                                        {{-- @if (Route::has('password.request'))
                                            <a class="text-muted" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                            @endif --}}
                                            <a class="text-muted" href="{{ route('register') }}">
                                                {{ __('Not have an Account?') }}
                                            </a>

                                        <x-primary-button class="btn btn-primary">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                        {{-- <x-primary-button class="btn btn-secondary">
                                            {{ __('Register') }}
                                        </x-primary-button> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection
