<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'user_profiles';
    protected $fillable = ['user_id','contact_number','alt_contact_number','present_country_id','present_state_id','present_city_id','present_address','permanent_country_id','permanent_state_id','permanent_city_id','permanent_address','date_of_birth','gender','status','approved'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
