<?php

namespace Airport\Support\Models;

use Airport\Support\Core\Traits\LocaleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Airport\Support\Core\Enums\Language as LanguageEnum;

/**
 * @property string $code
 * @property string $city_en
 * @property string $city_ru
 * @property string $airport_en
 * @property string $airport_ru
 * @property string $area
 * @property string $country
 * @property string $timezone
 * @property string $lat
 * @property string $lng
 * @property-read string|null $city
 * @property-read string|null $airport
 */
final class Airport extends Model
{
    use HasFactory, LocaleTrait;

    protected $table = 'airports';
    protected $primaryKey = 'code';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'code',
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

    public function getCityAttribute(?string $language = null): ?string
    {
        return match ($language ?? self::getLocale()) {
            LanguageEnum::RUSSIAN->value => $this->city_ru,
            default => $this->city_en
        };
    }

    public function getAirportAttribute(?string $language = null): ?string
    {
        return match ($language ?? self::getLocale()) {
            LanguageEnum::RUSSIAN->value => $this->airport_ru,
            default => $this->airport_en
        };
    }
}
