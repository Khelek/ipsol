<?php

class Rubric extends \LaravelBook\Ardent\Ardent {

    public static $relationsData = array(
        'posts'  => array(self::BELONGS_TO_MANY, 'Post'),
    );

}
