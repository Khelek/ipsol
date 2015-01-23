<?php

use Illuminate\Support\Facades\URL;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class News extends \LaravelBook\Ardent\Ardent implements StaplerableInterface {
    use EloquentTrait; // for Stapler
    use Conner\Tagging\TaggableTrait;

    public $autoPurgeRedundantAttributes = true;

    protected $fillable = ['preview', 'content', 'title', 'slug', 'meta_title',
                           'meta_description', 'meta_keywords', 'big_preview',
                           'preview_for_main_page', 'photo_preview_for_main'];

    public static $rules = array(
        'content' => 'required',
        'preview' => 'file',
        'title'   => 'required',
        'slug'    => 'required|unique:news',
        'preview_for_main_page' => 'required',
        'photo_preview_for_main' => 'file',
    );

    use AttachImageTrait;

    public function __construct(array $attributes = array()) {
        $url = '/system/:attachment/news/:id_partition/:style/:filename';
        $this->hasAttachedFile('preview', [
            'styles' => [
                'medium' => ['dimensions' => '214x214#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'small' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]]
            ],
            'url' => $url
        ]);
        $this->attachImage('big_preview', '810x457#', $url);
        $this->attachImage('photo_preview_for_main', '400x250#', $url);

        parent::__construct($attributes);
    }

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = Purifier::clean($value, 'nofollow');
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