<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
=======
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
<<<<<<< HEAD
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','roles','address','city_id','province_id','phone','avatar','status'
    ];

    public function generateToken()
    {
        $this->api_token = Str::random(60);
        $this->save();
        return $this->api_token;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
=======
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
<<<<<<< HEAD
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    ];
}
