@extends('layouts.user-master')

@section('content')
    <div class="container">
        <h4 class="my-4 p-3 bg-light">Hồ sơ cá nhân</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-lg-3">
                <div class="display-img text-center p-4">
                    <img src="{{ $user->image ? $user->image->url : $user->default_img }}" alt="">
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card-body">
                {!! Form::model($user, ['method' => 'PATCH', 'route' => ['user.cai-dat-tai-khoan', $user->id], 'files' => true]) !!}
                @csrf

                    <div class="form-group">
                        {!! Form::label('name', 'Tên người dùng') !!}
                        {!! Form::text('name', old('name', $user->name), ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : '')]) !!}
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', old('email', $user->email), ['class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : ''), 'disabled']) !!}
                        {!! Form::hidden('email', old('email', $user->email)) !!} <!-- Thêm input ẩn để giữ giá trị email -->
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('current_password', 'Mật khẩu Cũ') !!}
                        {!! Form::password('current_password', ['class' => 'form-control ' . ($errors->has('current_password') ? 'is-invalid' : '')]) !!}
                        @if ($errors->has('current_password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('current_password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Mật khẩu mới') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Xác nhận mật khẩu mới') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control ' . ($errors->has('password_confirmation') ? 'is-invalid' : '')]) !!}
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('address', 'Địa chỉ') !!}
                        {!! Form::text('address', old('address', $user->address), ['class' => 'form-control ' . ($errors->has('address') ? 'is-invalid' : '')]) !!}
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::label('image_id', 'Hình ảnh') !!}
                        {!! Form::file('image_id', ['class' => 'form-control ' . ($errors->has('image_id') ? 'is-invalid' : '')]) !!}
                        <small>Max size 500 KB</small>
                        @if ($errors->has('image_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('image_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Cập nhật', ['class' => 'btn btn-warning']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
