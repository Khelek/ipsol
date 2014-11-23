<?php

class Category extends \LaravelBook\Ardent\Ardent {

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['name'];

    public static $rules = array(
        'name' => 'required'
    );

    public static $relationsData = array(
        'works'  => array(self::BELONGS_TO_MANY, 'Work'),
    );
}
