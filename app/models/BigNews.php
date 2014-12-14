<?php

class BigNews extends \LaravelBook\Ardent\Ardent {

    protected $fillable = ['news_id'];

    public static $rules = [
        'news_id' => 'required',
    ];

    public static $relationsData = array(
        'news'  => array(self::BELONGS_TO, 'News'),
    );
}
