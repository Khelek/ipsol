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
        $big_news = \BigNews::first();
        $big_news = is_null($big_news) ? $this->news->first() : $big_news->news;

        $banners = \Banner::where('view_in_news', true)->take(2)->get();

        return View::make('news/index', compact('news', 'big_news', 'title', 'banners'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/news/title.blog_show');
      $news = $this->news->where('slug', $slug)->firstOrFail();
      // FIXME В mysql RAND()!
      $another_news = $this->news->orderBy(DB::raw("RAND()"))->take(2)->get();

      return View::make('news/show', compact('news', 'title', 'another_news'));
    }
}
