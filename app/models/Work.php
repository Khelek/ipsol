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
                           'main_photo', 'second_photo', 'third_photo',
                           'need_big_preview', 'client_photo',
                           'preview_for_main_page'];

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
        'preview_for_main_page' => 'required',
    );

    use AttachImageTrait;

    public function __construct(array $attributes = array()) {
        $url = '/system/:attachment/works/:id_partition/:style/:filename';

        $this->hasAttachedFile('preview', [
            'styles' => [
                'medium' => ['dimensions' => '214x214#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]],
                'small' => ['dimensions' => '100x100#', 'auto-orient' => true, 'convert_options' => ['quality' => 100]]
            ],
            'url' => $url
        ]);

        // мб добавить аргумент ['medium' => '416x214#', 'small' => '100x100#'] и вынести в trait
        $this->attachImage('big_preview', '416x214#', $url);
        $this->attachImage('main_photo', '810x457#', $url);
        $this->attachImage('second_photo', '400x214#', $url);
        $this->attachImage('third_photo', '400x214#', $url);
        $this->attachImage('client_photo', '214x214#', $url);

        parent::__construct($attributes);
    }

    public function setQuestDescriptionAttribute($value)
    {
        $this->attributes['quest_description'] = Purifier::clean($value, 'nofollow');
    }
    public function setSolutionContentAttribute($value)
    {
        $this->attributes['solution_content'] = Purifier::clean($value, 'nofollow');
    }

    use PostMetaTags;
    use BeutifullTimestamps;

    public function weight() {
        return $this->need_big_preview ? 2 : 1;
    }

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