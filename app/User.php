<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [ 'role' ];


    public function wallet(): HasOne
    {
       return $this->hasOne(Wallet::class, 'user_id', 'id');
    }

    public function trade() : HasOne {
        return $this->hasOne(CopyTrade::class);
    }

    public function verification() : HasMany {
        return $this->hasMany(Verification::class);
    }



    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
