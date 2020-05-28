<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Valores que serão preenchidos
    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];

    // Produto pertence a uma loja
    public function store() {
        return $this->belongsTo(Store::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
