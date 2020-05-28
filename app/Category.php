<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Valores que serão preenchidos
    protected $fillable = ['name', 'description', 'slug'];

    public function product() {
        return $this->belongsToMany(Product::class);
    }
}
