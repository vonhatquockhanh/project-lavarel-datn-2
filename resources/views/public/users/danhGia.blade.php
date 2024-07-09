@extends('layouts.user-master')
@php
    use Illuminate\Support\Str;
@endphp


@section('content')
    <div class="container">
        @include('layouts.includes.flash-message')
        <h4 class="my-4 p-4 bg-light">Đánh giá của tôi</h4>

        @if($myReviews->count())
            <table class="table table-borderless table-striped mb-4">
                <thead>
                <tr>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col" class="d-none d-sm-block">Sách</th>
                    <th scope="col">Đánh gía</th>
                    <th scope="col">Ngày tạo</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($myReviews as $review)
                    <tr>
                        <td><img src="{{$review->book->image_url}}" width="60" alt=""></td>
                        <td class="d-none d-sm-block">{{$review->book->title}}</td>
                        <td>{{Str::limit($review->body, 200)}}</td>
                        <td>{{$review->created_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['review.delete', $review->id]]) !!}
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

        <div class="reviews-paginate text-center">
            <ul>
                {{$myReviews->render()}}
            </ul>
        </div>
    </div>
@endsection
