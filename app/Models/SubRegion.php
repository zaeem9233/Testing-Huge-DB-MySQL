<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRegion extends Model
{
    use HasFactory;

    protected $table = 'subregions';

    protected $fillable = [
        'id',
        'name',
        'translations',
        'region_id',
        'created_at',
        'updated_at',
        'flag',
        'wikiDataId'
    ];
}
