<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Nilai extends Eloquent{
    //put your code here
    protected $table='nilai';
    public $timestamps=false;
    
    public function camaba() {
        return $this->belongsTo('\\App\\Models\\Camaba');
    }
    
    public function soal() {
        return $this->belongsTo('\\App\\Models\\Soal');
    }
    
    
}
