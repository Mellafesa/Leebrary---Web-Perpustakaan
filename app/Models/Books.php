<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul', 'penulis' , 'penerbit', 'tahunterbit', 'deskripsi','file_path'];
}
