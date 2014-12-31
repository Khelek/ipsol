<?php namespace Admin;
use Lang, Request, AdminController, Ticket, View, Response;

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

        return View::make('admin/requests/index', compact('title', 'requests'));
	}
}
