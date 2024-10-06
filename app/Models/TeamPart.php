<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamPart extends Pivot
{
    use HasFactory;

    protected $table = 'team_parts';
    protected $fillable = ['team_id', 'part_id'];

    // Relationships and custom methods
}

