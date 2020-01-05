<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class City extends Model
{
    use Cachable;

    public $table = 'city';
 
    public $fillable = [
        'name',
        'desc'
    ];
 
    public function companies()
    {
        return $this->hasMany(City::class);
    }
}
