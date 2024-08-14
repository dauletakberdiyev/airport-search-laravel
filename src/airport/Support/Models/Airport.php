<?php

namespace Airport\Support\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Airport extends Model
{
    use HasFactory;

    protected $table = 'airports';
    protected $primaryKey = 'code';
    public $timestamps = false;

    protected $fillable = [
        'city_en',
        'city_ru',
        'airport_en',
        'airport_ru',
        'area',
        'country',
        'timezone',
        'lat',
        'lng'
    ];

    protected $casts = [
        'lat' => 'float',
        'lng' => 'float'
    ];
}
