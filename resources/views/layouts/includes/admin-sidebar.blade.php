<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('trang-chu-sach')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('/')}}admin/img/logo.png" width="30" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Cửa Hàng Sách</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Hệ Thống Quản Lý Cửa Hàng Sách
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('admin.khach-hang.danh-sach')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Quản Lý Khách Hàng</span>
        </a>
    </li> -->
    <li class="nav-item">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>Quản Lý Khách Hàng</span>
    </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.tac-gia.danh-sach')}}">
            <i class="fas fa-fw fa-user"></i>
            <span>Quản Lý Tác Giả</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.nha-xuat-ban.danh-sach')}}">
            <i class="fas fa-fw fa-building"></i>
            <span>Quản Lý Nhà Xuất Bản</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.loai-sach.danh-sach')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quản Lý Loại Sách</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.sach.danh-sach')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Quản Lý Sách</span>
        </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('admin.combo.danh-sach')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Quản Lý Combo</span>
        </a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.phieu-nhap-hang.danh-sach')}}">
            <i class="fas fa-fw fa-truck"></i>
            <span>Quản Lý Phiếu Nhập Hàng</span>
        </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.don-hang.danh-sach') }}">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Quản Lý Đơn Hàng</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('admin.danh-gia-sach.danh-sach') }}">
        <i class="fas fa-fw fa-star"></i>
        <span>Quản Lý Đánh Giá Sách</span>
    </a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Đánh giá</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.danh-gia-sach.danh-sach')}}">Đánh giá sách</a>
                <a class="collapse-item" href="{{route('admin.danh-gia-combo.danh-sach')}}">Đánh giá combo</a>
            </div>
        </div>
    </li> -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('books.index')}}">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span>
        </a>
    </li> -->

    <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('categories.index')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categories</span>
        </a>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('authors.index')}}">Authors</a>
                <a class="collapse-item" href="{{route('users.index')}}">Users</a>
            </div>
        </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Activities from users
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('orders.index')}}">
            <i class="fas fa-fw fa-shopping-basket"></i>
            <span>Orders</span></a>
    </li> -->

    <!-- <li class="nav-item">
        <a class="nav-link" href="{{route('reviews.index')}}">
            <i class="fas fa-fw fa-comments"></i>
            <span>Reviews</span></a>
    </li> -->
    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messages</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Accounts</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
