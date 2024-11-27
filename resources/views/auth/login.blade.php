{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.front', ['footer' => 'pages-footer'])

@section('content')
    <section class="login-section py-5 left-glow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 h-100">
                    <h2 class="fw-bolder mb-3 text-center">Login into your Account</h2>
                    <div class="login-card">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="form-label">Email *</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="form-label">Password *</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="**********" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">S'identifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
