@extends('layouts.app')

@section('content')

    <section id="login" class="login-section">

        <form method="POST"    action="{{ route('submit-contact') }}" class="contact_us" enctype="multipart/form-data"  >
            @csrf
            <div style="width:500px">
                  @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                 @if(Session::has('failed'))
                    <div class="alert alert-danger">
                        {{ Session::get('failed') }}
                    </div>
                @endif
                <p>{{__('contact_us.contact_us')}}</p>
                <div class="form-group">
                    <label for="name"  >{{ __('contact_us.your_name') }}</label>
                    <br>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <p class="help-block error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"  >{{ __('contact_us.email_address') }}</label>
                    <br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>{{__('contact_us.message')}}</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" rows="3"  name="message"  value="{{ old('message') }}" >{{ old('message') }}</textarea>
                    @error('message')
                    <p class="help-block error">{{ $message }}</p>
                    @enderror
                </div>
                <!--<div class="form-group">
                    <label for="attachment"  >{{ __('Attachment') }}</label>
                    <br>

                    <input id="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" name="attachment" value="{{ old('attachment') }}"    >
                    @error('attachment')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>-->
                 <br>
                <input type="submit" value="{{__('contact_us.submit')}}">
            </div>
        </form>
    </section>

@endsection
