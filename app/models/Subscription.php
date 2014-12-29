<?php

use Illuminate\Support\Facades\URL;

class Subscription extends \LaravelBook\Ardent\Ardent {

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['email'];

    public static $rules = array(
        'email' => 'required'
    );

    use BeutifullTimestamps;
}
