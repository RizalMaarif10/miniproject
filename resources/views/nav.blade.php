<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar p-3">
            <h4 class="ml-3"><a href="{{ url('profile') }}"><img src="profile.png" style="width: 15%" alt=""></a>{{ $user->username }}</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Notifikasi </a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Posting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Bookmarks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('login') }}">Log out</a>
                </li>
            </ul>
        </div>
        