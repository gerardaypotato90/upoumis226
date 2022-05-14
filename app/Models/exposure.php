<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 */
class exposure extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_desc',
        'userid',
    ];
}
