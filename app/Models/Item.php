<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'sku',
    ];

    protected $tables = 'item';

    public function outgoing(){
        return $this->belongsTo(OutgoingGoods::class);
    }

    public function incoming(){
        return $this->belongsTo(IncomingGoods::class);
    }

    public function category(){
        return $this->hasOne(Category::class);
    }
}
