<?php

class SecurityController extends BaseController {

    protected $tip;

    public function __construct(SecurityTip $tip)
    {
        parent::__construct();
        $this->tip = $tip;
    }

    public function index()
    {
        $title = "Советы по безопасности";//Lang::get('admin/blogs/title.blog_management');

        $tips = $this->tip->paginate(10);

        return View::make('security/index', compact('tips'));
    }

    public function show($slug)
    {
        //$title = Lang::get('admin/blogs/title.blog_show');
        $title = "Совет";
        $tip = $this->tip->where('slug', $slug)->firstOrFail();
        $another_tips = \SecurityTip::orderBy(DB::raw("RAND()"))->take(2)->get();

        return View::make('security/show', compact('tip', 'another_tips'));
    }
}
