<?php

class WelcomeController extends BaseController {

    protected $work;

    public function __construct(Work $work)
    {
        parent::__construct();
    }

    public function index()
    {
        $title = Lang::get('admin/works/title.blog_management');
        return View::make('welcome/index', compact('title'));
    }
}