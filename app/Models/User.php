<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getOrders()
    {
        return $this->orders;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function getBalance()
    {
        return $this->attributes['balance'];
    }

    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'endereco',
        'cidade',
        'cep',
        'telefone',
        'cpf',
        'nascimento',
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
    ];
}
