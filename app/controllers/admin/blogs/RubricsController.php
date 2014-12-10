<?php namespace Admin\Blogs;
use Rubric, Lang, AdminController, View, Input, Redirect;

class RubricsController extends AdminController {

    protected $rubric;

    public function __construct(Rubric $rubric)
    {
        parent::__construct();
        $this->rubric = $rubric;
    }

	public function store()
	{
        $rubric = $this->rubric;

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('name'))]);
        $rubric->fill(Input::all());

        if ($rubric->save())
        {
            return Redirect::route('admin.blogs.index')->with('success', lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput(['only' => []])->withErrors($rubric->errors());
        }
	}

	public function update($id)
	{
        $rubric = $this->rubric->find($id);
        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('name'))]);

        $rubric->fill(Input::all());
        if ($rubric->updateUniques())
        {
            return Redirect::route('admin.blogs.index')->with('success', Lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput(['only' => []])->withErrors($rubric->errors());
        }
	}

 	public function destroy($id)
	{
		$this->rubric->find($id)->delete();

		return Redirect::route('admin.blogs.index');
	}

}
