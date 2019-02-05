<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Post extends Widget
{

	public $text;

	public $title;

	public $created;

	public function render()
	{
		return PHPTheme::view('post', [
			'text' => $this->text,
			'title' => $this->title,
			'created' => $this->created
		]);
	}

}
