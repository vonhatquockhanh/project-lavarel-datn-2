@extends('layouts.master')

@section('content')
    <div class="container" style="">
        <section class="registration-area my-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">{{__('Đăng Ký Tài Khoản')}}</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{url('/register')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name">Họ Tên</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control {{$errors->has('name')? 'is-invalid': ''}}">

                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{$errors->first('name')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email')? 'is-invalid': ''}}">

                                        @if($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{$errors->first('email')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
        <label for="address">Địa Chỉ</label>
        <input type="text" name="address" value="{{old('address')}}" class="form-control {{$errors->has('address')? 'is-invalid': ''}}">
        @if($errors->has('address'))
            <span class="invalid-feedback">
                <strong>{{$errors->first('address')}}</strong>
            </span>
        @endif
    </div>
                                    <div class="form-group">
                                        <label for="password">Mật Khẩu</label>
                                        <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid': ''}}">
                                        @if($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{$errors->first('password')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm password">Nhắc Lại Mật Khẩu</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md">Đăng Ký</button>
                                    </div>
                                </form>
                                <small>Bạn đã đăng ký chưa nếu đăng ký rồi thì -> <a href="{{url('login')}}">Đăng Nhập Tại Đây</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection