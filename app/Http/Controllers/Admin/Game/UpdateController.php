<?php

namespace App\Http\Controllers\Admin\Game;

use App\Http\Requests\GameRequest;
use App\Models\Game;

class UpdateController extends BaseController
{
    public function __invoke(GameRequest $request, Game $game)
    {
        $data = $request->validated();

        $this->service->update($game, $data);

        return redirect()->route('admin.game.index');
    }
}
