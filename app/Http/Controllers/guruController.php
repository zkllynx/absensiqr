<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Dashboard;
 
class dashboardController extends Controller
{
    public function index()
    {
        return view('master.guru');
    }
}