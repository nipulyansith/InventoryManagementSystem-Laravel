<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description', // Even though it's nullable, include it here if you want it mass assignable
        'quantity',
        'price'
    ];
}
