<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='states';
    protected $fillable = ['name','country_id'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function city(){
        return $this->hasMany(City::class, 'city_id');
    }
}
