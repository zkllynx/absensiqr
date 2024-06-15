<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Guru extends Model
{
    protected $table = 'user_login';

    public static function getAll()
    {
        return DB::select('SELECT * FROM user_login WHERE role_id = 2');
    }
}
