<?php

trait PostMetaTags {
	/**
	 * Get the post's meta_description.
	 *
	 * @return string
	 */
	public function meta_description()
	{
		return $this->meta_description;
	}

	/**
	 * Get the post's meta_keywords.
	 *
	 * @return string
	 */
	public function meta_keywords()
	{
		return $this->meta_keywords;
	}
}