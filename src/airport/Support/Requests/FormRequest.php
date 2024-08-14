<?php

namespace Airport\Support\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

abstract class FormRequest extends BaseFormRequest
{
    abstract public function rules(): array;
}
