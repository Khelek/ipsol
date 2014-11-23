<?php

use Illuminate\Support\Facades\URL;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Banner extends \LaravelBook\Ardent\Ardent implements StaplerableInterface {
    use EloquentTrait; // for Stapler

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['name', 'url', 'img', 'view_in_news'];

    public static $rules = array(
        'name' => 'required',
        'url' => 'required'
    );

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('img', [
            'styles' => [
                'medium' => ['dimensions' => '214x214#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'small' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]]
            ],
            'url' => '/system/:attachment/:model/:id_partition/:style/:filename'
        ]);

        parent::__construct($attributes);
    }

    use BeutifullTimestamps;
}
