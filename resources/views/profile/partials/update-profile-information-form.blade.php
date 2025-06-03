<section>
    <div class="card bg-base-100 shadow-xl border border-gray-200 p-6">
        <header>
            <h2 class="text-2xl font-bold">
                {{ __('Profile Information') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-4">
            @csrf
            @method('patch')

            <div class="form-control">
                <label class="label">
                    <span class="label-text">{{ __('Name') }}</span>
                </label>
                <input id="name"
                       name="name"
                       type="text"
                       class="input input-bordered w-1/2 @error('name') input-error @enderror"
                       value="{{ old('name', $user->name) }}"
                       required
                       autofocus
                       autocomplete="name" />
                @error('name')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror
            </div>

            <div class="form-control">
                <label class="label">
                    <span class="label-text">{{ __('Email') }}</span>
                </label>
                <input id="email"
                       name="email"
                       type="email"
                       class="input input-bordered w-1/2 @error('email') input-error @enderror"
                       value="{{ old('email', $user->email) }}"
                       required
                       autocomplete="username" />
                @error('email')
                    <label class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                @enderror

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="link link-primary text-sm">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4 mt-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Save') }}
                </button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }"
                       x-show="show"
                       x-transition
                       x-init="setTimeout(() => show = false, 2000)"
                       class="text-sm text-gray-600">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
