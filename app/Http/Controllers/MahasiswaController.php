<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil as ProfilModel;
use App\Models\Post as PostModel;
use App\Models\Comment as CommentModel;

class MahasiswaController extends Controller
{
    public function index($nilai)
    {
        $mahasiswa = ['Fortino Hogan', 'Risa Lestari', 'Rudy Hermawan', 'Bambang Sumo', 'Lisa Permata'];
        $jurusan = "Teknik Informatika";
        return view('universitas.mahasiswa', ['mahasiswa' => $mahasiswa, 'jurusan' => $jurusan])
            ->with('nilai', $nilai);
    }

    public function tampil()
    {
        $data = ProfilModel::all();
        printf($data);
    }

    public function view()
    {
        $posts = PostModel::with('comments')->paginate(5);
        return view('post.index', compact('posts'));
    }
}
