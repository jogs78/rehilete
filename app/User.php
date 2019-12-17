<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $fillable = [
        'name', 'email', 'password', 'edad', 'apellido_paterno', 'apellido_paterno',
        'rol', 'activo',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function expenses()
    {
        return $this->hasMany('App\Expense',"gastador_id");
    }

    public function hired()
    {
        return $this->hasMany('App\Event',"contratador_id");
    }

    public function events()
    {
        return $this->hasMany('App\Event',"cliente_id");
    }
    public function pays()
    {
        return $this->hasMany('App\Pay', 'receptor_id');
    }
    public function images()
    {
        return $this->hasMany('App\Gallery', 'usuario_id');
    }

}
