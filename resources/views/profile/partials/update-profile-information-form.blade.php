<section>
  
        
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="mt-3">
                                        <p class="text-sm text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification" class="btn btn-link text-gray-600 hover:text-gray-900">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 text-sm text-success">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex align-items-center gap-4 mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-success"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
               
     
</section>
