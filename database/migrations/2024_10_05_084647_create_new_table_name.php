<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Model
{
    use HasFactory;

    protected $table = 'user'; // Nama tabel
    protected $fillable = [
        'username',
        'password',
        'email',
        'no_telp',
        'id_user_level',
        'id_user_detail',
        'is_active',
    ];
}