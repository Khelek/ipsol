# -*- coding: utf-8 -*-
<?php namespace Admin\Support;
use Ask, Lang, AdminController, View, Input, Redirect;

class AsksController extends AdminController {

    protected $ask;

    public function __construct(Ask $ask)
    {
        parent::__construct();
        $this->ask = $ask;
    }

    public function index()
    {
        $title = Lang::get('admin/security/title.blog_management');

        $asks = $this->ask->all();

        return View::make('admin/support/asks/index', compact('asks', 'title'));
    }

	public function create()
	{
        $title = "Новый адрес";//Lang::get('admin/security/title.create_a_new_blog');

        $ask = $this->ask;
        return View::make('admin/support/asks/create', compact('title', 'ask'));
	}

	public function store()
	{
        $ask = $this->ask;

        $ask->fill(Input::all());

        if ($ask->save())
        {
            return Redirect::route('admin.support.asks.edit', $ask->id)->with('success', lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($ask->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.support.asks.edit', $id);
	}


	public function edit($id)
	{
        $title = "Изменить адрес";//Lang::get('admin/security/title.blog_update');
		$ask = $this->ask->find($id);

		if (is_null($ask))
		{
			return Redirect::route('admin.support.asks.index');
		}

        return View::make('admin/support/asks/edit', compact('ask', 'title'));
	}


	public function update($id)
	{
        $ask = $this->ask->find($id);

        if(!Input::get("asks")) Input::merge([ 'asks' => [] ]);

        $ask->fill(Input::all());

        if ($ask->update())
        {
            return Redirect::route('admin.support.asks.edit', $ask->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($ask->errors());
        }
	}

 	public function destroy($id)
	{
		$this->ask->find($id)->delete();

		return Redirect::route('admin.support.asks.index');
	}

}
