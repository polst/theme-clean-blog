<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class PostsItem extends Widget
{

	public $created;

	public $url;

	public $title;

	public $description;

	public function render()
	{
		return PHPTheme::view('posts-item', [
			'created' => $this->created,
			'url' => $this->url,
			'title' => $this->title,
			'description' => $this->description
		]);
	}

}
