<?php

class Rubric extends \LaravelBook\Ardent\Ardent {

    protected $fillable = ['name'];

    public static $rules = [
        'name' => 'required'];

    public static $relationsData = array(
        'posts'  => array(self::BELONGS_TO_MANY, 'Post'),
    );

}
