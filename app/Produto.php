<?php

namespace App;
use App\Categoria;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao', 'preco', 'idcat'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria','idcat', 'id');
    }
}
