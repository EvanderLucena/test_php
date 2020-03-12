<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public function produto()
    {
        return $this->hasOne(Produto::class, 'idcat', 'id');
    }

}
