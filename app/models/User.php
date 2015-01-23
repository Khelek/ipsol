<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \LaravelBook\Ardent\Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = ['username', 'email', 'confirmed',
                           'confirmation_code', 'admin',
                           'content_manager', 'manager'];

    public static $rules = array(
        'email' => 'required',
        'password' => 'required',
    );
}
