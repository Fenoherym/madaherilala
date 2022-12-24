<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photoUrl'
    ];

    public function circuit_elements()
    {
        return $this->hasMany(CircuitElement::class);
    }

    public function point_forts()
    {
        return $this->hasMany(PointFort::class);
    }
}
