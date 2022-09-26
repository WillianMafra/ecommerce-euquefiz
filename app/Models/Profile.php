<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getDadosByUser()
    {
        $qr = Model::execute("SELECT u.id, u.name, u.image, u.endereco, u.cidade, u.cep, u.telefone, u.email FROM users");
}
}