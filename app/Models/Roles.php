<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Roles extends Model
{
    protected $table = 'roles';

    public static function getAll()
    {
        return self::all();
    }
}
