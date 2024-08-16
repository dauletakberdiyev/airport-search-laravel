<?php

namespace Airport\Domains\Airport\Controllers;

use Airport\Domain\Airport\Core\Handlers\SearchHandler;
use Airport\Domain\Airport\Resources\SearchResource;
use Airport\Domains\Airport\Requests\SearchRequest;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;

final class Controller extends BaseController
{
    public function search(SearchRequest $searchRequest, SearchHandler $handler): JsonResponse
    {
        return $this->response(
            self::translate('airport.domain.search_message'),
            SearchResource::collection($handler->handle($searchRequest->getSearchValue()))
        );
    }
}
