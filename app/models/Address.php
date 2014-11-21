<?php

use Illuminate\Support\Facades\URL;

class Address extends \LaravelBook\Ardent\Ardent {

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['name', 'addresses'];

    public static $rules = array(
        'name' => 'required'
    );

    public function getAddressesAttribute($value)
    {
        $res =  unserialize($value);
        return $res ? $res : [];
    }

    public function setAddressesAttribute($value)
    {
        $this->attributes['addresses'] = serialize($value);
    }

    use BeutifullTimestamps;
}
