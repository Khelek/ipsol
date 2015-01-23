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
            Mail::send(
                'emails.get_request',
                array(
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'page' => $request->page,
                    'departament' => $request->departament,
                    'question' => $request->question
                ),
                function( $message ) {
                    $message->from( 'info@ipsol-test.tk', 'Server Message' );
                    $message->to(
                        DbConfig::get("app.admin.email_to_send_requests"),
                        "Администратор"
                    )->subject( 'Пришла заявка на сайт АйПиРешения' );
                }
            );

            return Redirect::back()->with('success', \Lang::get('request/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($request->errors());
        }
	}
}
