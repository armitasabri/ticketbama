@extends('layouts.confer.regular')
@section('content')


    <div class="background2 ">
    <div class="container">
        <div class="d-flex justify-content-center h-100" style="padding-top:80px;">
            <div class="card">
                <div class="card-header">
                    <h3 style="direction: rtl; text-align: right;">ورود به تیکت با ما</h3>
                   
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%; width:40px;"><i class="fa fa-envelope "></i></span>
                                {{-- <i class="fas fa-user"></i> --}}
                            </div>
                            <input id="email" type="email" placeholder="آدرس پست الکترونیک" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%;  width:40px;"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="password" type="password" placeholder="رمزعبور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row align-items-center remember text-light pr-2">
                            <input type="checkbox">من را به خاطر بسپار
                        </div>
                        <div class="form-group float-left" >
                            <input type="submit" value="ورود"  class="btn confer-btn "><i class="zmdi zmdi-long-arrow-right"></i>
                            {{-- <button type="submit" class="btn confer-btn"><h6 class="pt-2">ورود</h6> <i class="zmdi zmdi-long-arrow-right"></i></button> --}}
                            </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                    کاربر جدید هستید؟<a href="{{route('register')}}" class="text-warning"> &nbsp; ثبت نام کنید</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-light">پسورد خود را فراموش کرده اید؟</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
    </html>
    @endsection
