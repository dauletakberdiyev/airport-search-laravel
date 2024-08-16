<?php

namespace Airport\Support\Core\Traits;

use Illuminate\Support\Facades\App;

trait LocaleTrait
{
    public static function getLocale(): string
    {
        return App::getLocale();
    }
}
