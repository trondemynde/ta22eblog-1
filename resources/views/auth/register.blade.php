@extends('partials.layout')
@section('title', 'Register')
@section('content')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="card bg-base-100 shadow-2xl border border-gray-200">
            <div class="card-body">
                <h1 class="text-2xl font-bold text-center mb-6">Register</h1>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input name="name"
                               type="text"
                               placeholder="Your name"
                               value="{{ old('name') }}"
                               class="input input-bordered w-full @error('name') input-error @enderror"
                               required
                               autofocus
                               autocomplete="name" />
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

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
                               autocomplete="username" />
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
                               required
                               autocomplete="new-password" />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input name="password_confirmation"
                               type="password"
                               placeholder="••••••••"
                               class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                               required
                               autocomplete="new-password" />
                        @error('password_confirmation')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="text-center mt-4">
                    <span class="text-sm">Already have an account? </span>
                    <a href="{{ route('login') }}" class="link link-primary text-sm">
                        Login here
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
