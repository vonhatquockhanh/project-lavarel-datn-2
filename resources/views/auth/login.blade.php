@extends('layouts.master')

@section('content')
<div class="container" style="">
    <section class="login-area my-5" >
        <div class="container">
            @include('layouts.includes.flash-message')
            @if(session('error_message'))
    <div class="alert alert-danger">
        {{ session('error_message') }}
    </div>
@endif
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Đăng Nhập</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url('/login')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email')? 'is-invalid': ''}} form-control-sm">

                                    @if($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật Khẩu</label>
                                    <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid': ''}} form-control-sm">
                                    @if($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                    @endif

                                    <div><small><a href="#" class="text-muted">Quên Mật Khẩu?</a></small></div>

                                </div>
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> Nhớ mật khẩu
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-md">Đăng Nhập</button>
                                </div>
                            </form>
                            <small>Bạn đã có tài khoản đăng ký chưa?-> <a href="{{route('register')}}">Đăng ký ở đây</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
