<?php

namespace App\Models;

use App\Models\BloodGroup;
use App\Models\Role;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_id',
        'blood_group_id',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function bloodRequests(){
        return $this->hasMany(BloodRequest::class);
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function bloodRequestAgreements(){
        return $this->hasMany(BloodRequestAgreement::class,'blood_donar_id','id');
    }


    public function profie(){
        return $this->hasOne(UserProfile::class);
    }

    public function user_blooddonate(){
        return $this->belongsToMany(UserBloodDonate::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
