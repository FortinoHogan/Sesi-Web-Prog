@extends('layouts.master', ['active' => 'dosen'])

@section('content')
<h1>Daftar Mahasiswa : <?php echo $nama; ?></h1>

<ul>
    <?php
    // foreach($daftarMahasiswa as $nama) {
    //     echo "<li> $nama </li>";
    // }
    // echo $daftarMahasiswa['nama'].'-'.$daftarMahasiswa['jurusan'];
    foreach ($daftarMahasiswa as $mhs) {
        echo '<li>' . $mhs['nama'] . '-' . $mhs['jurusan'] . '</li>';
    }
    // foreach($variable as $key => $value) {
    
    // }
    ?>
</ul>
@endsection