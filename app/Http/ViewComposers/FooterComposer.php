<?php 

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Categories;

class FooterComposer {
	protected $cates;

	public function __construct(Categories $cates) {
		$this->cates = $cates;
	}

	public function compose(View $view) {
		$menuFooter = $this->cates->where('parent_id', NULL)->get();
		$hedieuhanh = $this->cates->whereIn('id', [29, 30, 31])->get();
		$view->with('menuFooter', $menuFooter)->with('hedieuhanh', $hedieuhanh);
	}
}