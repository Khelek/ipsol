<?php

class SecurityController extends BaseController {

    protected $tip;

    /*public function __construct(Tip $tip)
    {
        parent::__construct();
        $this->tip = $tip;
        }*/

    public function index()
    {
        $title = Lang::get('admin/blogs/title.blog_management');

        /*$rubrics = \Rubric::all();
        $tips = $this->tip;

        if(Input::get('search')) $tips = $tips->search(Input::get('search'));
        if(Input::get('tag')) $tips = $tips->withAnyTag(Input::get('tag'));
        if(Input::get('rubric')) $tips = $tips->whereHas('rubrics', function($q) {
            $q->where('name', Input::get('rubric'));
        });

        $tips = $tips->paginate(10);*/
        return View::make('security/index', compact([]));
    }

    public function show($slug)
    {
        //$title = Lang::get('admin/blogs/title.blog_show');
        //$tip = $this->tip->where('slug', $slug)->firstOrFail();

        return View::make('security/show', compact([]));
    }
}
