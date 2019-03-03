<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class Header extends Widget
{

	public $title = 'Clean Blog';

	public $description = 'A Blog Theme by Start Bootstrap';

	public $image;

	public function render()
	{
        $image = $this->image;

        if (!$image)
        {
            $image = PHPTheme::url('img/home-bg.jpg');
        }

		return PHPTheme::view('header', [
			'title' => $this->title,
			'description' => $this->description,
			'image' => $image
		]);
	}

}
