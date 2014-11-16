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

        return View::make('admin/blogs/create', compact('title'));
	}

	public function store()
	{
        $this->post->fill(Input::all());
        //$this->post->slug = Str::slug(Input::get('title'));

        if ($this->post->save())
        {
            return Redirect::route('admin.blogs.edit', $this->post->id)->with('success', lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($this->post->errors());
        }
	}

	public function show($id)
	{
        $title = Lang::get('admin/blogs/title.blog_show');
		$post = $this->post->findOrFail($id);

		return View::make('admin/blogs/show', compact('post'));
	}


	public function edit($id)
	{
        $title = Lang::get('admin/blogs/title.blog_update');
		$post = $this->post->find($id);
		if (is_null($post))
		{
			return Redirect::route('admin.blogs.index');
		}

        return View::make('admin/blogs/edit', compact('post', 'title'));
	}


	public function update($id)
	{
        $post = $this->post->find($id);
        //$this->post->fill($input);
        //$this->post->slug = Str::slug(Input::get('title'));

        if ($post->update(Input::all()))
        {
            return Redirect::route('admin.blogs.edit', $this->post->id)->with('success', Lang::get('admin/blogs/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($this->post->errors());
        }
	}

 	public function destroy($id)
	{
		$this->post->find($id)->delete();

		return Redirect::route('admin.blogs.index');
	}

}