<?php

namespace App\Models;

use App\Models\User;
use App\Models\BloodRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodGroup extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blood_groups';
    protected $fillable = ['full_name','short_name','gives_blood','received_blood','status'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function bloodRequests(){
        return $this->hasMany(BloodRequest::class);
    }

}
