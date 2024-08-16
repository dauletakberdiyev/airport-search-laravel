<?php

namespace Airport\Domain\Airport\Resources;

use Airport\Support\Models\Airport;
use Airport\Support\Resources\BasicResource;

/**
 * @mixin Airport
 */
final class SearchResource extends BasicResource
{
    public function getResponseArray(): array
    {
        return [
            'code' => $this->code,
            'city' => $this->city,
            'airport' => $this->airport,
            'area' => $this->area,
            'country' => $this->country,
            'timezone' => $this->timezone,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ];
    }
}
