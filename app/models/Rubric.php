<?php

class Rubric extends \LaravelBook\Ardent\Ardent {

    protected $fillable = ['name', 'slug'];

    public static $rules = [
        'name' => 'required',
        'slug' => 'required|unique:rubrics'
    ];

    public static $relationsData = array(
        'posts'  => array(self::BELONGS_TO_MANY, 'Post'),
    );

}
