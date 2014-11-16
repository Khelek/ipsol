<?php

use Illuminate\Support\Facades\URL;

class Post extends \LaravelBook\Ardent\Ardent {

    public static $relationsData = array(
        'tags'     => array(self::BELONGS_TO_MANY, 'Tag'),
        'rubrics'  => array(self::BELONGS_TO_MANY, 'Rubric')
    );

    protected $fillable = ['content', 'title', 'slug', 'meta-title',
                           'meta-description', 'meta-keywords'];

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
