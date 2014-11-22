<?php

use Illuminate\Support\Facades\URL;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Instruction extends \LaravelBook\Ardent\Ardent implements StaplerableInterface {
    use EloquentTrait; // for Stapler

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['name', 'instruction', 'documentation',
                           'certificate'];

    public static $rules = array(
        'name' => 'required'
    );

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('documentation');
        $this->hasAttachedFile('instruction');
        $this->hasAttachedFile('certificate');

        parent::__construct($attributes);
    }

    use BeutifullTimestamps;
}
