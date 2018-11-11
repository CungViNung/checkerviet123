<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{CateRepository, PostRepository, TagRepository};
use Session;
use App\Post;
class FrontendController extends Controller
{
    protected $cateRepository;
    protected $postRepository;
    protected $tagRepository;

    public function __construct(CateRepository $cateRepository, PostRepository $postRepository,
        TagRepository $tagRepository) {
    	$this->cateRepository = $cateRepository;
    	$this->postRepository = $postRepository;
        $this->tagRepository = $tagRepository;
    }

    public function index() {
    	$posts = $this->postRepository->findByField('status', 2);
    	$cates = $this->cateRepository->all();
    	return view('frontend.pages.index', compact('posts', 'cates'));	
    }

    public function category($id) {
        $cates = $this->cateRepository->find($id);
        $posts = $this->postRepository->post_cate($id);
        return view('frontend.pages.category', compact('cates', 'posts'));
    }

    public function detail($id) {
        $posts = $this->postRepository->find($id);
        $previous = $this->postRepository->findByField('status', 2)->where('category_id', $posts->category->id)
                ->where('id', '<', $posts->id)->max();
        $next = $this->postRepository->findByField('status', 2)->where('category_id', $posts->category->id)
                ->where('id', '>', $posts->id)->min();

        $postView = 'post_' . $id;
        if (!Session::has($postView)) {
            Post::where('id', $id)->increment('view');
            Session::put($postView, 1);
        }
        return view('frontend.pages.image-post', compact('posts', 'previous', 'next'));
    }

    public function tag($id) {
        $tags = $this->tagRepository->find($id);
        return view('frontend.pages.tag', compact('tags'));
    }

    public function search(Request $request) {
       $result = $request->result;
       $result = str_replace(' ', '%', $result);
       $data['keyword'] = $result;
       $data['items'] = Post::where('title', 'like', '%'.$result.'%')->orderBy('id', 'desc')->paginate(15);
       return view('frontend.pages.search', $data);
    }   
}	
