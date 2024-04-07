<?php

namespace App\Services\Genre;

use App\Models\Genre;

class Service
{

    public function store($data): void
    {
    }

    public function update(): void
    {

    }

    public function delete(Genre $genre): void
    {
        $genre->delete();
    }
}
