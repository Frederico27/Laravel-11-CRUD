<?php

namespace App\Services;

use Hashids\Hashids;

class HashIdServices
{

    public $hasIds;

    public function __construct()
    {
        $this->hasIds = new Hashids('Hau Hadomi O', 10);
    }

    public function encode($id)
    {
        return $this->hasIds->encode($id);
    }

    public function decode($id)
    {
        if (is_string($id)) {
            return $this->hasIds->decode($id);
        }

        return $id;
    }
}
