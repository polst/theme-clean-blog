<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Navigation extends Widget
{

	public $title;

	public $items = [];

	public function render()
	{
		return PHPTheme::view('navigation', [
			'items' => $this->items,
			'title' => $this->title
		]);
	}

}
