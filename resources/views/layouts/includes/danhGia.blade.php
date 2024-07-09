@php
    use Illuminate\Support\Str;
@endphp


<div class="comments-section">
    <div class="card card-body my-4" id="review-section">
        <div class="comments-area">
            <h4 class="text-center mb-2"><i class="fas fa-comments"></i> {{$danhGiaSach->count()}} {{'Đánh giá', $danhGiaSach->count() }}</h4>
            @foreach($danhGiaSach as $danhgia)
            <div class="single-comment my-2">
                <div class="card card-body bg-light">
                    <div class="author-info mb-2 d-flex flex-row">
                        <div class="comment-user-img mr-3">
                            <img src="{{$danhgia->user->hinhAnh ? $danhgia->user->image_url : $sach->default_img}}" alt="" width="60">
                        </div>
                        <div>
                            <h5>{{$danhgia->user->name}}</h5>
                            <small><i class="fas fa-clock"></i> {{$danhgia->created_at->diffForHumans()}}</small>
                        </div>
                    </div>
                    <p>{!! Markdown::convertToHtml(e($danhgia->noi_dung)) !!}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="card card-body my-4">
        @if(Auth::check())
            <div class="comment-form">
                <h4 class="text-center">Để lại đánh giá</h4>
                <form action="{{route('book.review', $sach->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="sach_id" value="{{ $sach->id }}">
                    <div class="form-group">
                        <textarea id="" name="noi_dung"  rows="5" class="form-control {{$errors->has('noi_dung')? 'is-invalid': ''}}"></textarea>
                        @if($errors->has('noi_dung'))
                          <span class="invalid-feedback">
                              <strong>{{$errors->first('noi_dung')}}</strong>
                          </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Đánh giá</button>
                </form>
            </div>

            @else
            <div><a href="{{url('login')}}">Đăng nhập tại đây</a> để đánh giá sách.</div>
        @endif
    </div>
</div>
