<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'name_product',
                            'description',
                            'position',
                            'price',
                            'stock',
                            'img1',
                            'img2',
                            'img3',
                            'img4',
                            ];
}
