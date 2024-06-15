<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Guru;
 
class guruController extends Controller
{
    public function index()
    {
        $data = array(
            'guru'=>Guru::getAll()
        );
            return view('master.guru')->with($data);
    }
}