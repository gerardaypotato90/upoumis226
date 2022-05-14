<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class covid19case extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateofcases',
        'numcases',
    ];
}
