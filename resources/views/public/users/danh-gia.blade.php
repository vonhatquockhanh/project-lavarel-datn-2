@extends('layouts.user-master')
@php
    use Illuminate\Support\Str;
@endphp


@section('content')
    <div class="container">
        @include('layouts.includes.flash-message')
        <h4 class="my-4 p-4 custom-bg">Đánh giá của tôi</h4>

        @if($danhGiaCuaToi->count())
            <table class="table table-borderless table-striped mb-4">
                <thead>
                <tr>
                    <th scope="col" width="100">Hình ảnh</th>
                    <th scope="col" >Sách</th>
                    <th scope="col">Đánh gía</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col" width="110" >Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($danhGiaCuaToi as $danhGia)
                    <tr>
                        <td><img src="{{$danhGia->sach->image_url}}" width="60" alt=""></td>
                        <td class="d-none d-sm-block">{{$danhGia->sach->ten_sach}}</td>
                        <td>{{Str::limit($danhGia->noi_dung, 200)}}</td>
                        <td>{{$danhGia->created_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['danhGia.xoa', $danhGia->id]]) !!}
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">Bạn không có bài đánh giá nào.</div>
        @endif

        <div class="pagination text-center">
            <nav class="pagination">
                {{$danhGiaCuaToi->render()}}
            </nav>
        </div>
    </div>
@endsection
