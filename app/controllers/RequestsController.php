<?php

class RequestsController extends BaseController {

    protected $request;

    public function __construct(Ticket $request)
    {
        parent::__construct();
        $this->request = $request;
    }

	public function store()
	{
        $request = $this->request;

        $request->fill(Input::all());

        if ($request->save())
        {
            return Redirect::back()->with('success', \Lang::get('request/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($request->errors());
        }
	}
}
