<?php

class Category extends \LaravelBook\Ardent\Ardent {

    protected $fillable = ['name', 'slug'];

    public static $rules = [
        'name' => 'required',
        'slug' => 'required|unique:categories'
    ];

    public static $relationsData = array(
        'works'  => array(self::BELONGS_TO_MANY, 'Work'),
    );
}
