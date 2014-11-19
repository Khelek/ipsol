<?php namespace Admin;
use Post, Lang, AdminController, View, Input, Redirect;

class BlogsController extends AdminController {

    protected $post;

    public function __construct(Post $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    public function index()
    {
        $title = Lang::get('admin/blogs/title.blog_management');

        $posts = $this->post->all();

        return View::make('admin/blogs/index', compact('posts', 'title'));
    }

	public function create()
	{
        $title = Lang::get('admin/blogs/title.create_a_new_blog');

        $rubrics = \Rubric::all();
        $post = $this->post;
        return View::make('admin/blogs/create', compact('title', 'rubrics', 'post'));
	}

	public function store()
	{
        $post = $this->post;

        if (Input::get('slug') === "") Input::replace(['slug' => \Slug::make(Input::get('title'))]);

        $post->fill(Input::all());

        if ($post->save())
        {
            if (Input::get('rubrics')) $post->rubrics()->sync(Input::get('rubrics'));
            if (Input::get('tags')) $post->retag(explode(",", Input::get('tags')));

            return Redirect::route('admin.blogs.edit', $post->id)->with('success', lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($post->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.blogs.edit', $id);
	}


	public function edit($id)
	{
        $title = Lang::get('admin/blogs/title.blog_update');
		$post = $this->post->with('rubrics')->find($id);
        $rubrics = \Rubric::all();

		if (is_null($post))
		{
			return Redirect::route('admin.blogs.index');
		}

        return View::make('admin/blogs/edit', compact('post', 'title', 'rubrics'));
	}


	public function update($id)
	{
        $post = $this->post->find($id);

        if (Input::get('slug') === "") Input::replace(['slug' => \Slug::make(Input::get('title'))]);

        if ($post->update(Input::all()))
        {
            if (Input::get('rubrics')) $post->rubrics()->sync(Input::get('rubrics'));
            if (Input::get('tags')) $post->retag(explode(",", Input::get('tags')));

            return Redirect::route('admin.blogs.edit', $post->id)->with('success', Lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($post->errors());
        }
	}

 	public function destroy($id)
	{
		$this->post->find($id)->delete();

		return Redirect::route('admin.blogs.index');
	}

}