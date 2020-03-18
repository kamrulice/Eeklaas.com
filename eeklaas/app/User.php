<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'ip_address','password','remember_token','name','phone','email','facebook_id','street_address'
    ];

    function socialProviders()
    {
      return $this->hasMany(SocialProvider::class);
    }

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

    public function role(){
        return $this->belongsToMany('App\Role');
    }

    public function seller(){
        return $this->belongsTo('App\Seller');
    }

//    public function addNew($input)
//    {
//        $check = static::where('facebook_id',$input['facebook_id'])->first();
//
//
//        if(is_null($check)){
//            return static::create($input);
//        }
//
//
//        return $check;
//    }
}
