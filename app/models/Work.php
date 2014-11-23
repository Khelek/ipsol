<?php

use Illuminate\Support\Facades\URL;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;
use Nicolaslopezj\Searchable\SearchableTrait;

class Work extends \LaravelBook\Ardent\Ardent implements StaplerableInterface {
    use EloquentTrait; // for Stapler
    use Conner\Tagging\TaggableTrait;
    use SearchableTrait;

    public $autoPurgeRedundantAttributes = true;

    public static $relationsData = array(
        'categories'  => array(self::BELONGS_TO_MANY, 'Category')
    );

    protected $fillable = ['preview', 'big_preview', 'solution_content',
                           'title', 'slug', 'meta_title',
                           'meta_description', 'meta_keywords',
                           'quest_description', 'client_name',
                           'client_post', 'client_description',
                           'main_photo', 'second_photo', 'third_photo'];

    public static $rules = array(
        'solution_content' => 'required',
        'quest_description' => 'required',
        'client_name' => 'required',
        'client_post' => 'required',
        'client_description' => 'required',
        'preview' => 'file',
        'big_preview' => 'file',
        'title'   => 'required',
        'slug'    => 'required|unique:works',
    );

    private function attachImage($attribute, $dimensions, $url)
    {
        $this->hasAttachedFile($attribute, [
            'styles' => [
                'medium' => ['dimensions' => $dimensions, 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
            ],
            'url' => $url
        ]);
    }

    public function __construct(array $attributes = array()) {
        $url = '/system/:attachment/:model/:id_partition/:style/:filename';

        $this->hasAttachedFile('preview', [
            'styles' => [
                'medium' => ['dimensions' => '214x214#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'small' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]]
            ],
            'url' => $url
        ]);

        $this->attachImage('big_preview', '416x214#', $url);
        $this->attachImage('main_photo', '214x214#', $url);
        $this->attachImage('second_photo', '214x214#', $url);
        $this->attachImage('third_photo', '214x214#', $url);

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