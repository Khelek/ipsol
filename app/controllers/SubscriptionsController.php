<?php

class SubscriptionsController extends BaseController {

    protected $subscription;

    public function __construct(Subscription $subscription)
    {
        parent::__construct();
        $this->subscription = $subscription;
    }

	public function store()
	{
        $subscription = $this->subscription;

        $subscription->fill(Input::all());

        if ($subscription->save())
        {
            return Redirect::back()->with('success', \Lang::get('subscription/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($subscription->errors());
        }
	}
}
