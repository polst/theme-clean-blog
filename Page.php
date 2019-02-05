<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Page extends Widget
{

	public $text;

    public $title;

	public function render()
	{
		return PHPTheme::view('page', [
			'text' => $this->text,
            'title' => $this->title
		]);
	}

}
