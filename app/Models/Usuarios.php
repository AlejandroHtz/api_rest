<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'con'
    ];

   /* protected $hidden = [
    	'created_at',
    	'updated_at'
    ];  campos ocultos  */
}
