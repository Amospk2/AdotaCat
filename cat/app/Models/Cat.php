<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

        /**
     * The model's default values for attributes.
     *
     * @var array
     */

     protected $attributes = [
        'name'=>'',
        'history'=>'',
        'gender'=>'',
        'specie'=>'',
        'photo'=>''
     ];
}
