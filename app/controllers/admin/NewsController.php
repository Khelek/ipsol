<?php namespace Admin;
use News, Lang, AdminController, View, Input, Redirect;

class NewsController extends AdminController {

    protected $news;

    public function __construct(News $news)
    {
        parent::__construct();
        $this->news = $news;
    }

    public function index()
    {
        $title = Lang::get('admin/news/title.blog_management');

        $news = $this->news->all();
        $rubrics = \Rubric::all();

        return View::make('admin/news/index', compact('news', 'title', 'rubrics'));
    }

	public function create()
	{
        $title = Lang::get('admin/news/title.create_a_new_blog');

        $rubrics = \Rubric::all();
        $news = $this->news;
        return View::make('admin/news/create', compact('title', 'rubrics', 'news'));
	}

	public function store()
	{
        $news = $this->news;

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);

        $news->fill(Input::all());

        if ($news->save())
        {
            if (Input::get('rubrics')) $news->rubrics()->sync(Input::get('rubrics'));
            if (Input::get('tags')) $news->retag(explode(",", Input::get('tags')));

            return Redirect::route('admin.news.edit', $news->id)->with('success', lang::get('admin/news/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($news->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.news.edit', $id);
	}


	public function edit($id)
	{
        $title = Lang::get('admin/news/title.blog_update');
		$news = $this->news->with('rubrics')->find($id);
        $rubrics = \Rubric::all();

		if (is_null($news))
		{
			return Redirect::route('admin.news.index');
		}

        return View::make('admin/news/edit', compact('news', 'title', 'rubrics'));
	}


	public function update($id)
	{
        $news = $this->news->find($id);

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);
        $news->fill(Input::all());
        if ($news->updateUniques())
        {
            if (Input::get('rubrics')) $news->rubrics()->sync(Input::get('rubrics'));
            if (Input::get('tags')) $news->retag(explode(",", Input::get('tags')));

            return Redirect::route('admin.news.edit', $news->id)->with('success', Lang::get('admin/news/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($news->errors());
        }
	}

 	public function destroy($id)
	{
		$this->news->find($id)->delete();

		return Redirect::route('admin.news.index');
	}

}