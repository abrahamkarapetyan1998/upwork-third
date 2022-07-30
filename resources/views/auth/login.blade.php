@extends('layouts.app')

@section('content')

    <section id="login" class="login-section">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div>
                <p>Log In</p>
                <div>
                    <label for="email"  >{{ __('E-Mail Address') }}</label>
                    <br>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div>
                    <label for="password"  >{{ __('Password') }}</label><br>
                    <input id="password" type="password" class="  @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <label for="remember">Remember me</label><br>


                </div>
                <input type="submit" value="Log In">
            </div>
        </form>
    </section>

@endsection
