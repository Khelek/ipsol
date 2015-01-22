<?php namespace Admin;
use SecurityTip, Lang, AdminController, View, Input, Redirect;

class SecurityController extends AdminController {

    protected $tip;

    public function __construct(SecurityTip $tip)
    {
        parent::__construct();
        $this->tip = $tip;
    }

    public function index()
    {
        $title =Lang::get('admin/security/title.blog_management');

        $tips = $this->tip->all();

        return View::make('admin/security/index', compact('tips', 'title'));
    }

	public function create()
	{
        $title = "Новый совет";//Lang::get('admin/security/title.create_a_new_blog');

        $tip = $this->tip;
        return View::make('admin/security/create', compact('title', 'tip'));
	}

	public function store()
	{
        $tip = $this->tip;

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);

        $tip->fill(Input::all());

        if ($tip->save())
        {
            return Redirect::route('admin.security.edit', $tip->id)->with('success',Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($tip->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.security.edit', $id);
	}


	public function edit($id)
	{
        $title = "Изменить совет";//Lang::get('admin/security/title.blog_update');
		$tip = $this->tip->find($id);

		if (is_null($tip))
		{
			return Redirect::route('admin.security.index');
		}

        return View::make('admin/security/edit', compact('tip', 'title'));
	}


	public function update($id)
	{
        $tip = $this->tip->find($id);

        if (Input::get('slug') === "") Input::merge(['slug' => \Slug::make(Input::get('title'))]);
        $tip->fill(Input::all());
        if ($tip->updateUniques())
        {
            return Redirect::route('admin.security.edit', $tip->id)->with('success',Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($tip->errors());
        }
	}

 	public function destroy($id)
	{
		$this->tip->find($id)->delete();

		return Redirect::route('admin.security.index');
	}

}
