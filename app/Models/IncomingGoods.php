<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'amount',
        'created_at',
        'updated_at'
    ];

    protected $tables = 'item_incoming';

    public function item(){
        return $this->hasOne(Item::class);
    }
}
