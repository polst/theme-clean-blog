<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Header extends Widget
{

	public $title = 'Clean Blog';

	public $description = 'A Blog Theme by Start Bootstrap';

	public $image = 'img/home-bg.jpg';

	public function render()
	{
		return PHPTheme::view('header', [
			'title' => $this->title,
			'description' => $this->description,
			'image' => $this->image
		]);
	}

}
