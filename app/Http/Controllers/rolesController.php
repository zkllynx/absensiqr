<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Roles;
 
class rolesController extends Controller
{
    public function index()
    {
        $data = array(
            'role'=>Roles::all()
        );
            return view('master.role')->with($data);
    }
}