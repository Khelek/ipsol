<?php namespace Admin\News;
use BigNews, Lang, AdminController, View, Input, Redirect;

class BigNewsController extends AdminController {

    protected $rubric;

    public function __construct(BigNews $bnews)
    {
        parent::__construct();
        $this->big_news = $bnews;
    }

	public function store()
	{
        $big_news = $this->big_news->first();
        if (is_null($big_news)) {
            $big_news = $this->big_news;
        }

        $big_news->fill(Input::all());

        if ($big_news->save())
        {
            return Redirect::route('admin.news.index')->with('success', Lang::get('admin/news/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($big_news->errors());
        }
	}

}
