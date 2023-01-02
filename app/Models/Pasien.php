<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
     protected $table = 'tb_pasien';
     protected $guarded = [];
    public function ber(){
    	return $this->belongsTo('App\Models\Berobat');
    }
}
