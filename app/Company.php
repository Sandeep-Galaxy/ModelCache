<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Company extends Model
{
    use Cachable;

    public $table = 'company';
 
    public $fillable = [
        'name',
        'desc'
    ];
 
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
