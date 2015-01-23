<?php

class BlogsController extends BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    public function index($rubricSlug = NULL)
    {
        $title = Lang::get('admin/blogs/title.blog_management');

        $rubrics = \Rubric::all();
        $posts = $this->post;

        if(Input::get('search')) $posts = $posts->search(Input::get('search'));
        if(Input::get('tag')) $posts = $posts->withAnyTag(Input::get('tag'));
        if($rubricSlug) {
            $posts = $posts->whereHas('rubrics', function($q) use ($rubricSlug) {
                    $q->where('slug', $rubricSlug);
                });
        }

        $posts = $posts->paginate(10);
        return View::make('blogs/index', compact('posts', 'title', 'rubrics', 'paginator'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/blogs/title.blog_show');
      $post = $this->post->where('slug', $slug)->firstOrFail();
      $rubrics = \Rubric::all();
      // FIXME В mysql RAND()!
      $rubric = $another_posts = $post->rubrics()->first();
      if (!is_null($rubric)) {
          $another_posts = $rubric->posts()->orderBy(DB::raw("RAND()"))->take(4)->get();
      } else {
          $another_posts = [];
      }

      return View::make('blogs/show', compact('post', 'title', 'rubrics', 'another_posts'));
    }
}
