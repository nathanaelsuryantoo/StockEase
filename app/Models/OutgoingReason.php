<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutgoingReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason',
    ];

    protected $tables = 'outgoingreason';

    public function outgoing(){
        return $this->belongsTo(OutgoingGoods::class);
    }
}
