<?php

class SupportController extends BaseController {

    public function ask()
    {
        $asks = \Ask::all();
        return View::make('support/ask', compact('asks'));
    }

    public function sip()
    {
        $instructions = \Instruction::all();
        return View::make('support/sip', compact('instructions'));
    }

    public function pod()
    {
        $addresses = \Address::all();
        return View::make('support/pod', compact('addresses'));
    }

    public function ask_show($slug)
    {
        $ask = \Ask::where('slug', $slug)->firstOrFail();
        $another_asks = \Ask::orderBy(DB::raw("RANDOM()"))->take(2)->get();
        return View::make('support/ask_show', compact('ask', 'another_asks'));
    }
}