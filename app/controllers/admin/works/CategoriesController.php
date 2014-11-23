<?php namespace Admin\Works;
use Category, Lang, AdminController, View, Input, Redirect;

class CategorysController extends AdminController {

    protected $category;

    public function __construct(Category $category)
    {
        parent::__construct();
        $this->category = $category;
    }

	public function store()
	{
        $category = $this->category;

        $category->fill(Input::all());

        if ($category->save())
        {
            return Redirect::route('admin.works.index')->with('success', lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($category->errors());
        }
	}

	public function update($id)
	{
        $category = $this->category->find($id);

        if ($category->update(Input::all()))
        {
            return Redirect::route('admin.works.index')->with('success', Lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($category->errors());
        }
	}

 	public function destroy($id)
	{
		$this->category->find($id)->delete();

		return Redirect::route('admin.works.index');
	}

}
