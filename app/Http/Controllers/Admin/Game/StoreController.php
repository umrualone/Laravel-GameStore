<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Requests\GameRequest;

class StoreController extends BaseController
{
    public function __invoke(GameRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.game.index');
    }
}
