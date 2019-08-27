<?php namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    use Notifiable;

    public const isAdmin = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}