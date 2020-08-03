<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'material_code',
        'material_name',
        'color',
        'size',
        'quantity',
        'import_unit_price',
        'selling_price',
        'note'
    ];
}
