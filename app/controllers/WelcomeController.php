<?php

class WelcomeController extends BaseController {

    protected $work;

    public function __construct(Work $work)
    {
        parent::__construct();
    }

    public function index()
    {
        $title = Lang::get('admin/works/title.blog_management');
        $advice = \SecurityTip::orderBy(DB::raw("RANDOM()"))->first();
        $news = \News::orderBy(DB::raw("RANDOM()"))->first();
        $work = \Work::orderBy(DB::raw("RANDOM()"))->first();
        return View::make('welcome/index', compact('title', 'news', 'work', 'advice'));
    }


    public function contacts() {
        $title = Lang::get('admin/works/title.blog_management');
        return View::make('welcome/contacts', compact('title'));
    }
}