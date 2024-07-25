<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        {{-- jika dia admin maka tampilkan menu di bawah ini --}}
        {{-- Start Menu Admin --}}
        @if(Auth::user()->role == 'admin')

        <li class="nav-item">
            <a class="nav-link  {{ Request::is('home') ? '' : 'collapsed' }}" href="">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Master Data</li>

        <li class="nav-item">
            <a class="nav-link collapsed{{ Request::is('guru*') ? '' : '' }}" href="">
                <i class="bi bi-person"></i>
                <span>Guru</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('siswa*') ? '' : 'collapsed' }}" href="">
                <i class="bi bi-people"></i>
                {{-- <i class="bi bi-person-circle"></i> --}}
                <span>Siswa</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('kelas') ? 'active' : '' }}" href="{{ route('admin.task') }}">
                <i class="bi bi-card-list"></i>
                <span>Tugas</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('kelas') ? 'active' : '' }}" href="">
                <i class="bi bi-card-list"></i>
                <span>Submission</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-card-list"></i>
                <span>Mata Pelajaran</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-list"></i>
                <span>Jurusan</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-person-lock"></i>
                <span>User</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        {{-- End Menu Admin --}}
        @endif

        {{-- jika dia siswa maka tampilkan menu di bawah ini --}}
        {{-- Start Menu Siswa --}}
        @if(Auth::user()->role == 'siswa')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('home') ? 'active' : '' }}" href="">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
        </li>
        <li class="nav-heading">Master Data</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-book"></i>
                <span>Materi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-book"></i>
                <span>Tugas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-door-open"></i>
                <span>Kelas</span>
            </a>
        </li>
        @endif

        @if(Auth::user()->role == 'guru')
        <li class="nav-item">
            <a class="nav-link collapsed {{ Request::is('home') ? 'active' : '' }}" href="">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
        </a>
        </li>
        <li class="nav-heading">Master Data</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-book"></i>
                <span>Materi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-book"></i>
                <span>Tugas</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-door-open"></i>
                <span>Kelas</span>
            </a>
        </li>

        @endif
    </ul>

</aside><!-- End Sidebar-->