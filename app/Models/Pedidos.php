<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = [
        'andares',
        'cor1',
        'cor2',
        'cor3',
        'desenho1',
        'desenho2',
        'desenho3',
    ];
}
