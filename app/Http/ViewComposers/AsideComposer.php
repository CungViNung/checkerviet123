<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\PostRepository;

class AsideComposer {
	protected $postRepository;

	public function __construct(PostRepository $postRepository) {
		$this->postRepository = $postRepository;
	}

	public function compose(View $view) {
		$newPost = $this->postRepository->findByField('status', 2)->sortByDesc('id')->take(4);
		$mostView = $this->postRepository->findByField('status', 2)->sortByDesc('view')->take(4);
		$view->with('newPost', $newPost)->with('mostView', $mostView);
	}
}