<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;
use App\Notifications\MailResetPasswordToken;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id_no',  
       'name', 
       'email', 
       'password', 
       'mobile_no', 
       'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     /**
     *
     * Boot the model
     *
     */

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->token = Str::random(40);
        });
    }

    public function hasVerified()
    {
        $this->verified = true;
        $this->token = null;

        $this->save();
    }

    /**
     * Send a password reset email to the user
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }

    public function residence()
    {
        return $this->hasOne('App\ResidentialDetails');
    }

}
