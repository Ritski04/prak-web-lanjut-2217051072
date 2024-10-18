<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $KelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pengguna', // Mengganti title sesuai konteks
            'users' => $this->userModel->getUser(), // Panggil getUser dari UserModel
        ];
        return view('list_user', $data);
    }



    public function profile($nama = "", $kelas = "", $npm =
    "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
           ];
           
        return view('profile', $data);
    }

    public function create()
    {
        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();
        
        $data = [
            'title' => 'Creat User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function store(UserRequest $request)
       {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
           ]);

           $user = userModel::create($validatedData);

           $user->load('kelas');

        return redirect()->to('/user');
    }
}
