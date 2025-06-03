@extends('partials.layout')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="card bg-base-100 shadow-2xl border border-gray-200">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf

                    <!-- Email Field -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email Address</span>
                        </label>
                        <input name="email"
                               type="email"
                               placeholder="your@email.com"
                               value="{{ old('email') }}"
                               class="input input-bordered w-full @error('email') input-error @enderror"
                               required
                               autofocus />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name="password"
                               type="password"
                               placeholder="••••••••"
                               class="input input-bordered w-full @error('password') input-error @enderror"
                               required />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-center mt-2">
                        <label class="cursor-pointer label gap-2">
                            <input type="checkbox"
                                   name="remember"
                                   class="toggle toggle-primary"
                                   {{ old('remember') ? 'checked' : '' }} />
                            <span class="label-text">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center mt-2">
                        <a class="link link-primary text-sm" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>

                <!-- Optional: Registration Link -->
                <div class="text-center mt-4">
                    <span class="text-sm">Don't have an account? </span>
                    <a href="{{ route('register') }}" class="link link-primary text-sm">
                        Create one
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
