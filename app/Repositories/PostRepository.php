<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PostRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Post";
    }

    public function post_cate($id) {
    	$result = $this->model->where('status', 2)->where('category_id', $id)->paginate(15);
    	return $result;
    }

    public function post_aside() {
        $result = $this->model->where('status', 2)->get();
        return $result;
    }
}