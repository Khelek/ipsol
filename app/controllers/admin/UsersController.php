<?php namespace Admin;
use User, Lang, AdminController, View, Input, Redirect;

class UsersController extends AdminController {

    protected $user;

    public function __construct(User $user)
    {
        parent::__construct();
        $this->user = $user;
    }

    public function index()
    {
        $title =Lang::get('admin/users/title.blog_management');

        $users = $this->user->all();

        return View::make('admin/users/index', compact('users', 'title'));
    }

	public function create()
	{
        $title = "Новый пользователь";//Lang::get('admin/users/title.create_a_new_blog');

        $user = $this->user;
        return View::make('admin/users/create', compact('title', 'user'));
	}

	public function store()
	{
        $user = $this->user;

        $user->fill(Input::all());
        $user->password = \Hash::make(Input::get('password'));
        $user->username = Input::get('email');
        $user->confirmed = 1;
        $user->confirmation_code = md5(microtime().\Config::get('app.key'));


        if ($user->save())
        {
            return Redirect::route('admin.users.edit', $user->id)->with('success',Lang::get('admin/users/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($user->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.users.edit', $id);
	}


	public function edit($id)
	{
        $title = "Редактирование пользователя";//Lang::get('admin/users/title.blog_update');
		$user = $this->user->find($id);

		if (is_null($user))
		{
			return Redirect::route('admin.users.index');
		}

        return View::make('admin/users/edit', compact('user', 'title'));
	}


	public function update($id)
	{
        $user = $this->user->find($id);

        $user->fill(Input::all());

        if (Input::get('password')) {
            $user->password = \Hash::make(Input::get('password'));
        }
        $user->admin = Input::get('admin');
        $user->manager = Input::get('manager');
        $user->content_manager = Input::get('content_manager');
        $user->username = Input::get('email');

        if ($user->updateUniques())
        {
            return Redirect::route('admin.users.edit', $user->id)->with('success',Lang::get('admin/users/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($user->errors());
        }
	}

 	public function destroy($id)
	{
		$this->user->find($id)->delete();

		return Redirect::route('admin.users.index');
	}

}
