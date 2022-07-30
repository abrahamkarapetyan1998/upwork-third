@extends('layouts.app')

@section('content')
    <section id="login" class="register-section">
        <form method="POST" action="{{ route('register') }}" class="register-form">
            @csrf
            <div>
                <p>Register</p>
                <div class="form-row">
                    <div>
                        <label for="name" >{{ __('Name') }}</label><br>
                        <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"   autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                     <div>
                        <label for="sur_name" >{{ __('Sur Name') }}</label><br>
                        <input id="sur_name" type="text" class=" @error('sur_name') is-invalid @enderror" name="sur_name" value="{{ old('sur_name') }}"   autocomplete="sur_name" autofocus>

                        @error('sur_name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                   
                </div>
                <div class="form-row">
                     <div>
                        <label for="company_name">Company Name</label><br>
                        <input type="text" name="company_name" id="company_name" class="@error('company_name') is-invalid @enderror"    value="{{ old('company_name') }}" autocomplete="company_name" autofocus />
                        @error('company_name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div>
                        <label for="address">Address</label><br>
                        <input type="text" name="address" id="address" class="@error('address') is-invalid @enderror"    value="{{ old('address') }}" autocomplete="address" autofocus />
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="email"  >{{ __('E-Mail Address') }}</label><br>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" >{{ __('Password') }}</label><br>
                        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password"   autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="country" >Country</label><br>
                        <input id="country" type="text" class=" @error('country') is-invalid @enderror" name="country"  value="{{ old('country') }}"  >
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="vat_id" >VAT ID</label><br>
                        <input id="vat_id" type="text"   class=" @error('vat_id') is-invalid @enderror" name="vat_id"  value="{{ old('vat_id') }}"  >
                        @error('vat_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-row">
                    <div>
                        <label for="package" class=" @error('package') is-invalid @enderror" >Package</label><br>
                        <select name='package'>
                            <option value='basic'>Basic</option>
                             <option value='standard'>Standard</option>
                              <option value='expert'>Expert</option>
                        </select>
                        
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                </div>

                <div class="form-row">

                    <input type="submit" value="Register">
                </div>

            </div>
        </form>
    </section>

@endsection
