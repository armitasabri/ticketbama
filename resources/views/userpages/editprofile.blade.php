@extends('layouts.confer.regular')
@section('content')


    <div class="background2 ">
    <div class="container" style="padding-top:120px;min-height:700px">
        <div class="d-flex justify-content-center h-100" style="padding-top:80px;">
            <div class="card">
                <div class="card-header">
                    <h3 style="direction: rtl; text-align: right;">تغییر اطلاعات کاربری</h3>
                   
                </div>
                <div class="card-body text-white">
                    <form action="{{route('save_profile')}}/?id={{$user->id}}" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%; width:40px;"><i class="fa fa-user "></i></span>
                                {{-- <i class="fas fa-user"></i> --}}
                            </div>
                        <input id="name" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%;  width:40px;"><i class="fa fa-envelope"></i></span>
                            </div>
                        <input id="email" type="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror"  name="email" required >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%;  width:40px;"><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                        <input id="mobile" type="text" value="{{$user->mobile}}" class="form-control @error('password') is-invalid @enderror"  name="mobile" required  >

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 15%;  width:40px;"><i class="fa fa-key"></i></span>
                            </div>
                            <input id="password" type="password" placeholder=" رمز عبور جدید" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        
                        <div class="form-group float-left" >
                  
                            <button type="submit" class="btn confer-btn"><h6 class="pt-2">تغییر اطلاعات</h6> <i class="zmdi zmdi-long-arrow-right"></i></button>
                            </div>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
</div>
    </body>
    </html>
    @endsection
