<?php

namespace Airport\Domain\Airport\Core\Queries;

use Airport\Support\Models\Airport;
use Illuminate\Database\Eloquent\Builder;

final readonly class Query
{
    public function search(string $searchValue): Builder
    {
        return Airport::query()
            ->where('code', 'like', $searchValue . '%')
            ->orWhere('city_en', 'like', $searchValue . '%')
            ->orWhere('city_ru', 'like', $searchValue . '%')
            ->orWhere('airport_en', 'like', $searchValue . '%')
            ->orWhere('airport_ru', 'like', $searchValue . '%');
    }
}
