<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'admin_id'];

    // Relationships
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function parts()
    {
        return $this->hasManyThrough(Part::class, TeamPart::class);
    }
}

