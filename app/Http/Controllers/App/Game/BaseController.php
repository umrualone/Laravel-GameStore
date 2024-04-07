<?php

namespace App\Http\Controllers\App\Game;

use App\Http\Controllers\Controller;
use App\Services\App\Game\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
