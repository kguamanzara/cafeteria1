<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function users(){
        return $this-> belongsToMany(User::class)->withTimeStamps();
    }

    public function pedidos(){
        return $this-> belongsToMany(Pedido::class)->withTimeStamps();
    }
}
