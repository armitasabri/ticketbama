@extends('layouts.confer.regular')
@section('content')

<div class="background2">
<div class="container"  style="padding-top:60px;margin-right:8vw;">
    <div class="row justify-content-center" style="margin-right:150px;">
        <div class="col-md-8" style="direction:rtl;text-align:right; margin-right:6vh;">
            <div class="card mt-5 mr-5 " style="height: 450px; width: 500px;" >
                <div class="card-header"><h4 class="text-light text-light">ثبت نام در تیکت با ما</h4> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">نام</h6></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">آدرس پست الکترونیک</h6></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">موبایل</h6></label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" min="11" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  required >

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">رمز ورود</h6></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">تکرار رمز ورود</h6></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div> --}}
                            <div class="form-group float-left " >
                                <input type="submit" value="ثبت نام" class="btn confer-btn "><i class="zmdi zmdi-long-arrow-right">
                                    {{-- <a href="#" class="btn confer-btn  mt-lg-0 ml-3 ml-lg-5"><h6 class="pt-2 ">ثبت نام</h6> </a> --}}
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

















@endsection


