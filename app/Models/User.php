<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'cpf',
        'rg',
        'address',
        'cellphone',
        'status',
        'type_user',
        'is_admin',
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

    /*
     * Função/Método que insere o novo usuário/servidor na base
     * @access public
     * @param $request pega todos os dados vindo da requisição do formulário Novo/Cadastro
     * @name $this->type_user usuário/servidor possui type 1
     * @subpackage save
     * @return $this->save()
     */

    public function newUser($data,$userid, $senha)
    {
        $data['id'] = $userid;
        $data['name'] = $data['nome'];
        $data['status'] = 1;
        $data['type_user'] = 2;
        $data['password'] = $senha;
        return $this->create($data);

    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
