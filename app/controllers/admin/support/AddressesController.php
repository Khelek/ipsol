<?php namespace Admin\Support;
use Address, Lang, AdminController, View, Input, Redirect;

class AddressesController extends AdminController {

    protected $address;

    public function __construct(Address $address)
    {
        parent::__construct();
        $this->address = $address;
    }

    public function index()
    {
        $title = Lang::get('admin/security/title.blog_management');

        $addresses = $this->address->all();

        return View::make('admin/support/addresses/index', compact('addresses', 'title'));
    }

	public function create()
	{
        $title = "Новый адрес";//Lang::get('admin/security/title.create_a_new_blog');

        $address = $this->address;
        return View::make('admin/support/addresses/create', compact('title', 'address'));
	}

	public function store()
	{
        $address = $this->address;

        $address->fill(Input::all());

        if ($address->save())
        {
            return Redirect::route('admin.support.addresses.edit', $address->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($address->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.support.addresses.edit', $id);
	}


	public function edit($id)
	{
        $title = "Изменить адрес";//Lang::get('admin/security/title.blog_update');
		$address = $this->address->find($id);

		if (is_null($address))
		{
			return Redirect::route('admin.support.addresses.index');
		}

        return View::make('admin/support/addresses/edit', compact('address', 'title'));
	}


	public function update($id)
	{
        $address = $this->address->find($id);

        if(!Input::get("addresses")) Input::merge([ 'addresses' => [] ]);

        $address->fill(Input::all());

        if ($address->update())
        {
            return Redirect::route('admin.support.addresses.edit', $address->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($address->errors());
        }
	}

 	public function destroy($id)
	{
		$this->address->find($id)->delete();

		return Redirect::route('admin.support.addresses.index');
	}

}
