<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Camaba extends Eloquent{
    protected $table='camaba';
    public $timestamps=false;
    
    public function nilai() {
        return $this->hasMany('\\App\\Models\\Nilai');  
    }
    
}
