<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

//CONTOH CONTROLLER
class HomeController extends Controller
{
    //CONTOH MENAMPILKAN SEBUAH VIEW DARI CONTROLLER
    public function halo()
    {
        //AKAN MENAMPILKAN HALAMAN PADA 'resources/views/home/halo.blade.php'
        return view('home.halo');
    }
} 