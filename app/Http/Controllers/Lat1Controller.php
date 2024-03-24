<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Nadir";
        $data["asal"]="Lembang";
        $data["prodi"]="Informatika";
        return view('v_latihan1', $data);
    }

    public function method2(){
        $data['title'] = 'Daftar Mahasiswa';
        $data['daf_mhs'] = array(
            array("nama" => "Nadir", "asal" => "Lembang"),
            array("nama" => "Rian", "asal" => "Pinus"),
            array("nama" => "Hamyus", "asal" => "Bogor")
        );
        return view('v_latihan2', $data);
    }
}
