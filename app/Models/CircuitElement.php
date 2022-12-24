<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircuitElement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}
