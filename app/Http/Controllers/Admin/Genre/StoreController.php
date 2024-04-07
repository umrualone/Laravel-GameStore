<?php

namespace App\Http\Controllers\Admin\Genre;

use App\Http\Requests\GenreRequest;
use App\Models\Genre;

class StoreController extends BaseController
{
    public function __invoke(GenreRequest $request)
    {
        $data = $request->validated();

        Genre::firstOrCreate($data);

        return redirect()->route('admin.genre.index');
    }
}
