<?php

namespace App\Http\Controllers;

use App\Models\Berobat;
use Illuminate\Http\Request;

class MedisController extends Controller
{
    public function periksa($id)
    {   $berobat = Berobat::find($id);
        $data['title'] = 'Tambah berobat';
        return view('admin/medis/periksa',compact(['berobat']), $data);
    }
    
    public function rekam($id){
        $berobat = Berobat::find($id);
        $data['title'] = 'Rekam medis pasien';
        return view('admin/medis/rekam_medis',compact(['berobat']), $data);
    }
}
