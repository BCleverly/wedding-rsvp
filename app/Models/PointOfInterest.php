<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class PointOfInterest extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'name',
        'description',
        'cost',
        'distance_to_venue'
    ];
}
