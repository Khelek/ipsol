<?php

use Illuminate\Support\Facades\URL;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Nicolaslopezj\Searchable\SearchableTrait;

class SecurityTip extends \LaravelBook\Ardent\Ardent implements StaplerableInterface {
    use EloquentTrait; // for Stapler
    use Conner\Tagging\TaggableTrait;
    use SearchableTrait;

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['preview', 'content', 'title', 'slug', 'meta_title',
                           'meta_description', 'meta_keywords'];

    public static $rules = array(
        'content' => 'required',
        'preview' => 'file',
        'title'   => 'required',
        'slug'    => 'required|unique:security_tips'
    );

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('preview', [
            'styles' => [
                'medium' => ['dimensions' => '214x214#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'small' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]]
            ],
            'url' => '/system/:attachment/:id_partition/:style/:filename'
        ]);

        parent::__construct($attributes);
    }

    use PostMetaTags;
    use BeutifullTimestamps;

	/**
	 * Returns a formatted post content entry,
	 * this ensures that line breaks are returned.
	 *
	 * @return string
	 */
	public function content()
	{
		return nl2br($this->content);
	}

	/**
	 * Get the URL to the post.
	 *
	 * @return string
	 */
	public function url()
	{
		return Url::to($this->slug);
	}

}