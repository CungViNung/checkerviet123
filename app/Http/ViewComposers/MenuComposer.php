<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Categories;

class MenuComposer {
	protected $cates;

	public function __construct(Categories $cates) {
		$this->cates = $cates;
	}

	public function compose(View $view) {
		$menuCate = $this->cates->where('parent_id', NULL)->get();
		$view->with('menuCate', $menuCate);
	}
}