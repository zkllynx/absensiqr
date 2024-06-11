<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Siswa;
 
class siswaController extends Controller
{
    public function index()
    {
        $data = array(
            'siswa'=>Siswa::all()
        );
            return view('master.siswa')->with($data);
    }
}