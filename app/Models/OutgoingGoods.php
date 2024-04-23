<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgoingGoods extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'reason_id',
        'marketplace_id',
        'amount',
        'created_at',
        'updated_at'
    ];

    protected $tables = 'item_outgoing';

    public function item(){
        return $this->hasOne(Item::class);
    }

    public function reason(){
        return $this->hasOne(OutgoingReason::class);
    }

    public function marketplace(){
        return $this->hasOne(OutgoingMarketplace::class);
    }
}
