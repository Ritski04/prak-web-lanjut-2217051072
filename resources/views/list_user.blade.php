@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Daftar User</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Foto</th> <!-- Kolom Foto -->
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        <img src="{{ $user->foto ? asset($user->foto) : asset('assets/upload/img/default-foto.jpg') }}" 
                             alt="Profile" width="50" height="50" class="rounded-circle"> <!-- Menampilkan Foto -->
                    </td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning mb-3">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
