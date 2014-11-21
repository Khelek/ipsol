
<?php

class SupportController extends BaseController {

    /*protected $post;

    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
        }*/

    public function ask()
    {
        return View::make('support/ask', compact(''));
    }

    public function sip()
    {
        return View::make('support/sip', compact(''));
    }

    public function pod()
    {
        $addresses = \Address::all();
        return View::make('support/pod', compact('addresses'));
    }

    public function ask_show($slug)
    {
      return View::make('support/ask_show', compact(''));
    }
}