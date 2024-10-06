<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartPrice extends Model
{
    use HasFactory;

    protected $fillable = ['part_id', 'price', 'multiplier', 'is_static'];

    // Relationships
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}

