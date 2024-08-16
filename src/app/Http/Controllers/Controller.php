<?php

namespace App\Http\Controllers;

use Airport\Support\Core\Traits\LanguageTrait;
use Airport\Support\Core\Traits\ResponseTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ResponseTrait, LanguageTrait;
}
