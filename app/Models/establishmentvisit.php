<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class establishmentvisit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'establishment',
        'temperature',
        'address',
        'symptoms',
        'telephone_number',
        'userid',
    ];
}
