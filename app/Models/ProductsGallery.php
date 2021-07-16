<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsGallery extends Model
{
    use HasFactory;

    protected $table = 'products_gallery';

    protected $fillable = ['name', 'description', 'image'];

    public function Photos(){
        return $this->hasMany('App\Image');
    }
}
