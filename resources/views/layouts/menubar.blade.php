<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.mahasiswa', $nilai = 90) }}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dosen', $namadosen = 'BINUS') }}">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.karyawan') }}">Karyawan</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
