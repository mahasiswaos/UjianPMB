<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Soal extends Eloquent{
    protected $table='soal';
    public $timestamps=false;
    
    public function nilai() {
        return $this->hasMany('\\App\\Models\\Nilai');
    }
           
}
