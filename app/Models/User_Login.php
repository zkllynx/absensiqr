<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Login extends Model
{
    function file_post_contents($url, $data){
        $postdata = http_build_query($data);
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => $postdata
            )
        );
        
        $context = stream_context_create($opts);
        return file_get_contents($url, false, $context);
        
    }

    public function cek_login($data){
        $username = $data['username'];
        $user_pass = $data['user_pass'];
        $query = "SELECT * FROM user_login WHERE username='".$username."'";
        $result = DB::select($query);
        return $result;
    }

    public function cek_login_siswa($data){
        $nisn = $data['nisn'];
        $user_pass = $data['user_pass'];
        $query = "SELECT * FROM user_login WHERE nisn='".$nisn."'";
        $result = DB::select($query);
        return $result;
    }

    public function cek_login_guru($data){
        $npk = $data['npk'];
        $password = $data['password'];
        $query = "SELECT emp_no, full_name, pos_name_en FROM VIEW_EMPLOYEE_NG EMP WHERE emp_no = '".$npk."' and end_date is null and empcompany_status='1'";
        $result = DB::connection('sqlsrv3')->select($query);
        return $result;
    }
}
