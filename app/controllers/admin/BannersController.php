<?php namespace Admin;
use Banner, Lang, AdminController, View, Input, Redirect;

class BannersController extends AdminController {

    protected $banner;

    public function __construct(Banner $banner)
    {
        parent::__construct();
        $this->banner = $banner;
    }

    public function index()
    {
        $title = Lang::get('admin/security/title.blog_management');

        $banners = $this->banner->all();

        return View::make('admin/banners/index', compact('banners', 'title'));
    }

	public function create()
	{
        $title = "Новый баннер";//Lang::get('admin/security/title.create_a_new_blog');

        $banner = $this->banner;
        return View::make('admin/banners/create', compact('title', 'banner'));
	}

	public function store()
	{
        $banner = $this->banner;

        $banner->fill(Input::all());

        if ($banner->save())
        {
            return Redirect::route('admin.banners.edit', $banner->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($banner->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.banners.edit', $id);
	}


	public function edit($id)
	{
        $title = "Изменить баннер";//Lang::get('admin/security/title.blog_update');
		$banner = $this->banner->find($id);

		if (is_null($banner))
		{
			return Redirect::route('admin.banners.index');
		}

        return View::make('admin/banners/edit', compact('banner', 'title'));
	}


	public function update($id)
	{
        $banner = $this->banner->find($id);

        $banner->fill(Input::all());

        if ($banner->update())
        {
            return Redirect::route('admin.banners.edit', $banner->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($banner->errors());
        }
	}

 	public function destroy($id)
	{
		$this->banner->find($id)->delete();

		return Redirect::route('admin.banners.index');
	}

}
