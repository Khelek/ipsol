<?php namespace Admin\Support;
use Instruction, Lang, AdminController, View, Input, Redirect;

class InstructionsController extends AdminController {

    protected $instruction;

    public function __construct(Instruction $instruction)
    {
        parent::__construct();
        $this->instruction = $instruction;
    }

    public function index()
    {
        $title = Lang::get('admin/security/title.blog_management');

        $instructions = $this->instruction->all();

        return View::make('admin/support/instructions/index', compact('instructions', 'title'));
    }

	public function create()
	{
        $title = "Новая инструкция";//Lang::get('admin/security/title.create_a_new_blog');

        $instruction = $this->instruction;
        return View::make('admin/support/instructions/create', compact('title', 'instruction'));
	}

	public function store()
	{
        $instruction = $this->instruction;

        $instruction->fill(Input::all());

        if ($instruction->save())
        {
            return Redirect::route('admin.support.instructions.edit', $instruction->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($instruction->errors());
        }
	}

	public function show($id)
	{
        return Redirect::route('admin.support.instructions.edit', $id);
	}


	public function edit($id)
	{
        $title = "Изменить инструкцию";//Lang::get('admin/security/title.blog_update');
        $instruction = $this->instruction->find($id);

        if (is_null($instruction))
        {
            return Redirect::route('admin.support.instructions.index');
        }

        return View::make('admin/support/instructions/edit', compact('instruction', 'title'));
	}


	public function update($id)
	{
        $instruction = $this->instruction->find($id);

        $instruction->fill(Input::all());

        if ($instruction->update())
        {
            return Redirect::route('admin.support.instructions.edit', $instruction->id)->with('success', Lang::get('admin/security/messages.create.success'));
        } else {
            return Redirect::back()->withInput()->withErrors($instruction->errors());
        }
	}

 	public function destroy($id)
	{
		$this->instruction->find($id)->delete();

		return Redirect::route('admin.support.instructions.index');
	}

}
