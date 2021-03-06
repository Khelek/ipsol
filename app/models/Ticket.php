<?php

use Illuminate\Support\Facades\URL;

class Ticket extends \LaravelBook\Ardent\Ardent {

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['name', 'phone', 'email', 'page',
                           'departament', 'question'];

    public static $rules = array(
    );

    use BeutifullTimestamps;
}
