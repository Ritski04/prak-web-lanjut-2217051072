<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    public function getUser(){
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')->select('user.*', 'kelas.nama_kelas')->get();
       }
    

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas()
{
    return $this->belongsTo(Kelas::class);
}
}
