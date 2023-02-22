<?php

namespace App\Models\Web\V1\Pizzas;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $appends = [

    ];
    protected $fillable = [
        'active',
        'name',
        'slug',
        'src',
        'alt',
    ];
    protected $table = 'pizzas';
}
