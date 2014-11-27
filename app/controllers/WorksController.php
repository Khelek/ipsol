<?php

class WorksController extends BaseController {

    protected $work;

    public function __construct(Work $work)
    {
        parent::__construct();
        $this->work = $work;
    }

    public function index($categorySlug = NULL)
    {
        $title = Lang::get('admin/works/title.blog_management');

        $categories = \Category::all();
        $works = $this->work;

        if($categorySlug) $works = $works->whereHas('categories', function($q) use ($categorySlug) {
            $q->where('slug', $categorySlug);
        });

        $works = $works->get();

        return View::make('works/index', compact('works', 'title', 'categories'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/works/title.blog_show');
      $work = $this->work->where('slug', $slug)->firstOrFail();

      return View::make('works/show', compact('work', 'title', 'rubrics', 'another_works'));
    }
}
