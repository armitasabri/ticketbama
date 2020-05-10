@extends('layouts.confer.regular')
@section('content')

<div class="background3" style="min-height:900px;">
<div class="container"  style="padding-top:120px;margin-right:4vw;">
    <div class="row justify-content-center" style="margin-right:200px;">
        <div class="col-md-8" style="direction:rtl;text-align:right; margin-right:6vh;">
            <div class="card mt-5 mr-5 " style="height: 450px; width: 500px;" >
                <div class="card-header"><h4 class="text-light text-light">ثبت نام در تیکت با ما</h4> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">پست الکترونیک</h6></label>

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
                            <label for="mobile" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">شماره همراه</h6></label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

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


                        <div class="form-group row">
                            <label for="profile picture" class="col-md-4 col-form-label text-md-right"><h6 class="text-light text-light">آواتار</h6></label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" >
                            </div>
                        </div>
                      
                            <div class="form-group float-left pt-4" >
                                {{-- <input type="submit" value="ثبت نام" class="btn confer-btn "><i class="zmdi zmdi-long-arrow-right"> --}}
                                    <button type="submit" class="btn confer-btn"><h6 class="pt-2">ثبت نام</h6> <i class="zmdi zmdi-long-arrow-right"></i></button>
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


