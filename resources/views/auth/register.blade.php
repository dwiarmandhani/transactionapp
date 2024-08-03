@extends('layouts.auth')

@section('content')
<!-- Begin Page Content -->

<style>
.bg-register-image {
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
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="form-group">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="form-control form-control-user" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-text-input id="password" class="form-control form-control-user"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" class="form-control form-control-user"
                                                        type="password"
                                                        name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>

                                    <div class="form-group d-flex justify-content-between mt-4">
                                        <a class="text-muted" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-primary-button class="btn btn-primary">
                                            {{ __('Register') }}
                                        </x-primary-button>
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
