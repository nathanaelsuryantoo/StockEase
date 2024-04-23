<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgoingMarketplace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $tables = 'marketplace';

    public function outgoing(){
        return $this->belongsTo(OutgoingGoods::class);
    }
}
