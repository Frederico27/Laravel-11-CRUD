<?php

namespace App\Models;

use App\Casts\HashidCast;
use App\Casts\HashidService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];

    protected function casts()
    {
        return [
            'id' => HashidCast::class
        ];
    }
}
