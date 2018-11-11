<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Tag";
    }
}