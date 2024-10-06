<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = ['model_number', 'manufacturer', 'list_price', 'type'];

    // Relationships
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_parts');
    }

    public function prices()
    {
        return $this->hasMany(PartPrice::class);
    }
}

