<div class="col-md-2">
    <div class="sidebar-items">
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                <h4>Danh mục sách</h4>
            </div>
            <div class="card-body">
                <ul class="ctg-list">
                    @foreach($loaiSachs as $loaiSach)
                    <li class="ctg-item">
                        <a href="{{route('loaiSach', $loaiSach->slug)}}" class="ctg-link d-block">{{$loaiSach->ten_loai_sach}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-header bg-dark text-white">
                <h4>Sách mới gần đây</h4>
            </div>
            <div class="card-body">
                @foreach($sachGanDay as $sach)
                <div class="recent-book-list">
                    <a href="{{route('chi-tiet-sach', $sach->id)}}" class="d-flex flex-row mb-3">
                        <div class="book-img mr-2"><img src="{{$sach->image_url}}" alt="" width="80"></div>
                        <div class="book-text">
                            <p>{{$sach->ten_sach}}</p>
                            <small><i class="fas fa-clock"></i> {{$sach->created_at->diffForHumans()}}</small>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
