<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Models\Genre;

class CreateController extends BaseController
{

    public function __invoke()
    {
        return view('admin.genres.create');
    }
}
