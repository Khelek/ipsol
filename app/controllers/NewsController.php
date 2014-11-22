<?php

class NewsController extends BaseController {

    protected $news;

    public function __construct(News $news)
    {
        parent::__construct();
        $this->news = $news;
    }

    public function index()
    {
        $title = Lang::get('admin/news/title.blog_management');

        $rubrics = \Rubric::all();
        $news = $this->news;

        if(Input::get('search')) $news = $news->search(Input::get('search'));
        if(Input::get('tag')) $news = $news->withAnyTag(Input::get('tag'));
        if(Input::get('rubric')) $news = $news->whereHas('rubrics', function($q) {
            $q->where('name', Input::get('rubric'));
        });

        $news = $news->paginate(10);
        return View::make('news/index', compact('news', 'title', 'rubrics', 'paginator'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/news/title.blog_show');
      $news = $this->news->where('slug', $slug)->firstOrFail();
      $rubrics = \Rubric::all();
      // FIXME В mysql RAND()!
      $another_news = $news->rubrics()->first()->news()->orderBy(DB::raw("RANDOM()"))->take(4)->get();

      return View::make('news/show', compact('news', 'title', 'rubrics', 'another_news'));
    }
}
