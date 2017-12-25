<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //inisiasi buat tabel
    protected $table = 'blog';

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    // Ini di bawah ini harus make mass asignment
    //whitelist
    // protected $fillable = ['judul', 'deskripsi'];
    //blacklist
    protected $guarded = ['created_at'];
}
