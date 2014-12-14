<?php namespace Admin\Works;
use Category, Lang, AdminController, View, Input, Redirect;

class CategoriesController extends AdminController {

    protected $category;

    public function __construct(Category $category)
    {
        parent::__construct();
        $this->category = $category;
    }

    public function index()
    {
        $title = Lang::get('admin/works/title.blog_management');

        $categories = \Category::all();

        return View::make('admin/works/categories/index', compact('title', 'categories'));
    }

	public function store()
	{
        $category = $this->category;

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('name'))]);
        $category->fill(Input::all());

        if ($category->save())
        {
            return Redirect::route('admin.works.categories.index')->with('success', lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput(['only' => []])->withErrors($category->errors());
        }
	}

	public function update($id)
	{
        $category = $this->category->find($id);

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('name'))]);

        $category->fill(Input::all());
        if ($category->updateUniques())
        {
            return Redirect::route('admin.works.categories.index')->with('success', Lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput(['only' => []])->withErrors($category->errors());
        }
	}

 	public function destroy($id)
	{
		$this->category->find($id)->delete();

		return Redirect::route('admin.works.categories.index');
	}

}
