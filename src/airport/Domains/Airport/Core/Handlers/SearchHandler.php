<?php

namespace Airport\Domain\Airport\Core\Handlers;

use Airport\Domain\Airport\Core\Queries\Query;
use Illuminate\Database\Eloquent\Collection;

final readonly class SearchHandler
{
    public function __construct(
        private Query $query
    ) {
    }

    public function handle(string $searchValue): Collection
    {
        return $this->query->search($searchValue)->get();
    }
}
