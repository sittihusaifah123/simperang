<ul class="list">
    <li class="active">
        <a href="{{ url('/home') }}">
            <i class="material-icons">home</i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <li class="header">PENGAJUAN</li>
        <li>
            <a href="{{ url('/pengajuan/create') }}">
                <i class="material-icons">shopping_cart</i>
                <span>Buat Pengajuan</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/pengajuan') }}">
                <i class="material-icons">shopping_cart</i>
                <span>Detail Pengajuan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('status-pengajuan') }}">
                <i class="material-icons">shopping_cart</i>
                <span>Status Pengajuan</span>
            </a>
        </li>
    <li class="header">VALIDASI PENGAJUAN</li>
        <li>
            <a href="">
                <i class="material-icons">shopping_cart</i>
                <span>Validasi Data</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="material-icons">shopping_cart</i>
                <span>Detail Pangajuan</span>
            </a>
        </li>
    <li class="header">LAPORAN</li>
        <li>
            <a href="">
                <i class="material-icons">print</i>
                <span>Pengajuan</span>
            </a>
        </li>
    <li class="header">LAPORAN</li>
        <li>
            <a href="">
                <i class="material-icons">print</i>
                <span>Pengajuan</span>
            </a>
        </li>
    <li class="header">CONFIGURASI</li>
        <li>
            <a href="{{ url('/user') }}">
                <i class="material-icons">person</i>
                <span>User</span>
            </a>
        </li>
</ul>