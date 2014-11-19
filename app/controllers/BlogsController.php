<?php

class BlogsController extends BaseController {

    protected $post;

    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    public function index()
    {
        $title = Lang::get('admin/blogs/title.blog_management');

        $posts = $this->post->all();

        return View::make('blogs/index', compact('posts', 'title'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/blogs/title.blog_show');
      $post = $this->post->where('slug', $slug)->firstOrFail();

      return View::make('blogs/show', compact('post', 'title'));
    }
}
