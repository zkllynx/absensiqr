<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class User_Login extends Model
{
    protected $table = 'user_login';

    public static function getAll()
    {
        return DB::select('SELECT * FROM user_login');
    }

    public function cek_login($data){
        $npk = $data['npk'];
        $password = $data['password'];
        $query = "SELECT * FROM tb_user WHERE npk='".$npk."'";
        $result = DB::select($query);
        return $result;
    }
}
