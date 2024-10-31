@extends('layouts.master', ['active' => 'mahasiswa'])

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Daftar Mahasiswa</h1>

            <h2>Jurusan: <?php echo $jurusan; ?></h2>
            <h3>{{ $nilai }}</h3>

            @if ($nilai >= 0 and $nilai < 50)
                <div class="alert alert-danger d-inline-block">Maaf, anda tidak lulus</div>
            @elseif($nilai >= 50 and $nilai <= 100)
                <div class="alert alert-success d-inline-block">Selamat, anda lulus</div>
            @else
                <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
            @endif

            <br>

            @for ($i = 0; $i <= 5; $i++)
                <div class="alert alert-success d-inline-block">{{ $i }}</div>
            @endfor

            <ul>
                {{-- @foreach ($mahasiswa as $mhs)
                    <li>{{ $mhs }}</li>
                @endforeach --}}

                @forelse ($mahasiswa as $nama)
                    <li>{{ $nama }}</li>
                @empty
                    <li>Data tidak ada</li>
                @endforelse
            </ul>

            <?php echo date('d-M-Y'); ?>
        </div>
    </div>
@endsection
