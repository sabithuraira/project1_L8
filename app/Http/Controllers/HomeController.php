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

    //CONTOH MENAMPILKAN SEBUAH VIEW DARI CONTROLLER DG PARAMETER
    public function haloWithName($name)
    {
        //AKAN MENAMPILKAN HALAMAN PADA 'resources/views/home/halo_with_name.blade.php'
        //MEMANGGIL VIEW DAN MENGIRIM SEBUAH VARIABEL
        return view('home.halo_with_name', [
            'name'  => $name
        ]);
    }
} 