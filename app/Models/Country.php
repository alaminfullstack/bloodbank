<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'countries';
    protected $fillable = ['code','name'];

    public function state(){
        return $this->hasMany(State::class, 'state_id');
    }

}
