<?php

namespace Airport\Support\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class BasicResource extends JsonResource
{
    abstract public function getResponseArray(): array;

    final public function toArray(Request $request): array
    {
        return $this->getResponseArray();
    }
}
