<?php namespace Admin;
use Lang, Request, AdminController, Ticket, View, Response, Input;

class RequestsController extends AdminController {

    protected $request;

    public function __construct(Ticket $request)
    {
        parent::__construct();
        $this->request = $request;
    }

	public function index()
	{
        $title = "Управление заявками";//Lang::get('admin/blogs/title.blog_management');

        $requests = \Ticket::all();
        $email = \DbConfig::get("app.admin.email_to_send_requests");
        if (!$email) {
            $email = "";
        }

        return View::make('admin/requests/index', compact('title', 'requests', 'email'));
	}

	public function email_store()
	{
        \DbConfig::store("app.admin.email_to_send_requests", Input::get("email"), 'production');
        \DbConfig::store("app.admin.email_to_send_requests", Input::get("email"), 'development');
        return \Redirect::back();
	}
}
