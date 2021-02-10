<?php

namespace App\Models;

use App\Models\User;
use App\Models\BloodGroup;
use App\Models\BloodRequestAgreement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blood_requests';
    protected $fillable = ['from_user_id','to_user_id','blood_group_id','country_id','state_id','city_id','primary_contact_number','optional_contact_number','blood_need_date','blood_need_time','message','note','status','approved','view_count'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bloodGroup(){
        return $this->belongsTo(BloodGroup::class);
    }

    public function bloodRequestAgreements()
    {
        return $this->hasMany(BloodRequestAgreement::class);
    }



}
