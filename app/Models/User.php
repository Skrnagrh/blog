<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /** 
    * The attributes that are mass assignable.
    *
    *@var array
    */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /** 
    * The attributes that are mass assignable.
    *
    *@var array
    */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** 
    * The attributes that are mass assignable.
    *
    *@var array
    */
    protected $casts =[
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
