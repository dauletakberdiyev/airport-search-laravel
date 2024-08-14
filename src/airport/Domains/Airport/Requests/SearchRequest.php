<?php

namespace Airport\Domains\Airport\Requests;

use Airport\Support\Requests\FormRequest;

final class SearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'search_value' => ['required', 'string'],
        ];
    }

    public function getSearchValue(): string
    {
        return $this->validated('search_value');
    }
}
