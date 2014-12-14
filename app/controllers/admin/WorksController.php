<?php namespace Admin;
use Work, Lang, AdminController, View, Input, Redirect;

class WorksController extends AdminController {

    protected $work;

    public function __construct(Work $work)
    {
        parent::__construct();
        $this->work = $work;
    }

    public function index()
    {
        $title = Lang::get('admin/works/title.blog_management');

        $works = $this->work->all();

        return View::make('admin/works/index', compact('works', 'title', 'categories'));
    }

	public function create()
	{
        $title = Lang::get('admin/works/title.create_a_new_blog');

        $categories = \Category::all();
        $work = $this->work;
        return View::make('admin/works/create', compact('title', 'categories', 'work'));
	}

	public function store()
	{
        $work = $this->work;

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);

        $work->fill(Input::all());

        if ($work->save())
        {
            if (Input::get('categories')) $work->categories()->sync(Input::get('categories'));

            return Redirect::route('admin.works.edit', $work->id)->with('success', lang::get('admin/works/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($work->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.works.edit', $id);
	}


	public function edit($id)
	{
        $title = Lang::get('admin/works/title.blog_update');
		$work = $this->work->with('categories')->find($id);
        $categories = \Category::all();

		if (is_null($work))
		{
			return Redirect::route('admin.works.index');
		}

        return View::make('admin/works/edit', compact('work', 'title', 'categories'));
	}


	public function update($id)
	{
        $work = $this->work->find($id);

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);

        $work->fill(Input::all());

        if ($work->updateUniques())
        {
            if (Input::get('categories')) $work->categories()->sync(Input::get('categories'));

            return Redirect::route('admin.works.edit', $work->id)->with('success', Lang::get('admin/works/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($work->errors());
        }
	}

 	public function destroy($id)
	{
		$this->work->find($id)->delete();

		return Redirect::route('admin.works.index');
	}

}