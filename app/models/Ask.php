<?php

use Illuminate\Support\Facades\URL;

class Ask extends \LaravelBook\Ardent\Ardent {

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['title', 'content', 'slug', 'meta_title',
                           'meta_description', 'meta_keywords'];

    public static $rules = array(
        'title' => 'required',
        'content' => 'required',
        'slug'    => 'required|unique:asks'
    );

    use BeutifullTimestamps;
}
