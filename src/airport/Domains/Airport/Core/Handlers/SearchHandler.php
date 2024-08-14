<?php

namespace Airport\Domain\Airport\Core\Handlers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

final readonly class SearchHandler
{
    public function handle(string $searchValue): Collection
    {
        $json = Storage::disk('public')->get('airports.json');
        $airports = json_decode($json, true);
        foreach ($airports as $key => $airport)
        {
            var_dump($key);
            var_dump($airport);

        }

        return Collection::make();
    }
}
