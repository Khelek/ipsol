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

        $news = $this->news;

        $news = $news->paginate(10);
        $last_news = $this->news->first();
        $another_news = $news->slice(1,9);

        return View::make('news/index', compact('news', 'last_news', 'title', 'another_news'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/news/title.blog_show');
      $news = $this->news->where('slug', $slug)->firstOrFail();
      // FIXME В mysql RAND()!
      $another_news = $this->news->orderBy(DB::raw("RANDOM()"))->take(4)->get();

      return View::make('news/show', compact('news', 'title', 'another_news'));
    }
}
