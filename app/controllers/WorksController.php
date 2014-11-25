<?php

class WorksController extends BaseController {

    protected $work;

    public function __construct(Work $work)
    {
        parent::__construct();
        $this->work = $work;
    }

    public function index()
    {
        $title = Lang::get('admin/works/title.blog_management');

        $rubrics = \Rubric::all();
        $works = $this->work;

        if(Input::get('search')) $works = $works->search(Input::get('search'));
        if(Input::get('tag')) $works = $works->withAnyTag(Input::get('tag'));
        if(Input::get('rubric')) $works = $works->whereHas('rubrics', function($q) {
            $q->where('name', Input::get('rubric'));
        });

        $works = $works->paginate(10);
        return View::make('works/index', compact('works', 'title', 'rubrics', 'paginator'));
    }

    public function show($slug)
    {
      $title = Lang::get('admin/works/title.blog_show');
      $work = $this->work->where('slug', $slug)->firstOrFail();
      
      return View::make('works/show', compact('work', 'title', 'rubrics', 'another_works'));
    }
}
