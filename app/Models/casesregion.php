<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class casesregion extends Model
{
    use HasFactory;

    protected $fillable = [
        'Location',
        'Cases',
        'Deaths',
    ];
}
