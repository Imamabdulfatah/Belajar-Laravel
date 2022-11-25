<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
<div class="position-sticky pt-3">
    <ul class="nav flex-column">
    <li class="nav-item">
        {{-- active dengan request --}}
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
        <span data-feather="home"></span>
        Dashboard
        </a>
    </li>
    {{-- dashboard posts --}}
    <li class="nav-item">
        {{-- dipake * agar setelah post akan active --}}
        <a class="nav-link  {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            {{--  https://feathericons.com/ --}}
            {{-- cara pengunaannya tiggal ganti aja "" --}}
        <span data-feather="file-text"></span>
        My Posts
        </a>
    </li>
    </ul>
</div>
</nav>