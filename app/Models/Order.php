<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_order'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailOrder()
    {
        return $this->hasMany(DetailOrder::class);
    }
}
